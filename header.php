 <?php
require ('db.php');
session_start();
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////Login page related .php////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////Variables to store data/////////////////////////////
$MESSAGE_LOGIN = '';
//$PRODUCT_ID    = '';
/////////////////////////////Login/////////////////////////////
if (isset($_POST['login'])) {
		if (!isset($_POST['username']) || !isset($_POST['password'])) {
				$MESSAGE_LOGIN = "Username or Password Empty";
		} //!isset($_POST['username']) || !isset($_POST['password'])
		else {
				$USER                   = $_POST['username'];
				$USERNAME               = mysqli_real_escape_string($con, $USER);
				$PASS                   = $_POST['password'];
				$PASSWORD               = mysqli_real_escape_string($con, $PASS);
				$l_select_user          = "SELECT Username,Password FROM tblusers WHERE Username ='$USER' AND Password = '".md5($PASS)."' LIMIT 1";
				$results_l_select_user  = mysqli_query($con, $l_select_user);
				$l_select_admin         = "SELECT Username,Password FROM tbladmins WHERE Username='$USER' AND Password = '".md5($PASS)."' LIMIT 1";
				$results_l_select_admin = mysqli_query($con, $l_select_admin);
				if (mysqli_num_rows($results_l_select_user) > 0) {
						$_SESSION['username']        = $USERNAME;
						$l_insert_to_log_user        = "INSERT into `tbluserlog` (Username,LoginTime,Logout,Status) VALUES ('$USER','0',date('Y-m-d H:i:s'),'1')";
						$result_l_insert_to_log_user = mysqli_query($con, $l_insert_to_log_user);
						if (!isset($_SESSION['selectedproduct'])) {
								header('location:myprofile.php');
						} //!isset($_SESSION['selectedproduct'])
						else {
								
						}
				} //mysqli_num_rows($results_l_select_user) > 0
				else if (mysqli_num_rows($results_l_select_admin) > 0) {
						$_SESSION['username']         = $USERNAME;
						$l_insert_to_log_admin        = "INSERT into `tbluserlog` (Username,LoginTime,Logout,Status) VALUES ('$USER','0',date('Y-m-d H:i:s'),'1')";
						$result_l_insert_to_log_admin = mysqli_query($con, $l_insert_to_log_admin);
						header('location: admin/manageorders.php');
				} //mysqli_num_rows($results_l_select_admin) > 0
				else {
						$MESSAGE_LOGIN = "Username or Password is Invalid";
				}
		}
} //isset($_POST['login'])


?>

<?php
//session_start();
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////Register page related .php////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
require('db.php');
/////////////////////////////Variables to store data/////////////////////////////
$MESSAGE_REGISTER = '';
/////////////////////////////Regster/////////////////////////////
if (isset($_POST["register"])) {
		$USERNAME           = $_POST['username'];
		$USERNAME           = mysqli_real_escape_string($con, $USERNAME);
		$FIRST_NAME         = stripslashes($_POST['firstname']);
		$FIRST_NAME         = mysqli_real_escape_string($con, $FIRST_NAME);
		$LAST_NAME          = stripslashes($_POST['lastname']);
		$LAST_NAME          = mysqli_real_escape_string($con, $LAST_NAME);
		$E_MAIL             = stripslashes($_POST['email']);
		$E_MAIL             = mysqli_real_escape_string($con, $E_MAIL);
		$PHONE_NUMBER       = stripslashes($_POST['phonenumber']);
		$PHONE_NUMBER       = mysqli_real_escape_string($con, $PHONE_NUMBER);
		$PASSWORD           = stripslashes($_POST['password']);
		$PASSWORD           = mysqli_real_escape_string($con, $PASSWORD);
		$RE_TYPE_PASSWORD   = stripslashes($_POST['retypepassword']);
		$RE_TYPE_PASSWORD   = mysqli_real_escape_string($con, $RE_TYPE_PASSWORD);
		$SECURITY_QUESTION  = stripslashes($_POST['securityquestion']);
		$SECURITY_QUESTION  = mysqli_real_escape_string($con, $SECURITY_QUESTION);
		$SECURITY_ANSWER    = stripslashes($_POST['securityanswer']);
		$SECURITY_ANSWER    = mysqli_real_escape_string($con, $SECURITY_ANSWER);
		$select_user        = "SELECT * FROM tblusers WHERE Username='$USERNAME' OR EmailAddress='$E_MAIL' LIMIT 1";
		$result_select_user = mysqli_query($con, $select_user);
		$USER               = mysqli_fetch_assoc($result_select_user);
		// if user exists
		if ($USER) {
				if ($USER['Username'] = $USERNAME) {
						$MESSAGE_REGISTER = "OOPS! Username Is Already Taken!";
				} //$USER['Username'] = $USERNAME
				if ($USER['EmailAddress'] = $E_MAIL) {
						$MESSAGE_REGISTER = "OOPS! Email Is Already Taken";
				} //$USER['EmailAddress'] = $E_MAIL
		} //$USER
		// if fields are filled
		else if (!Empty($USERNAME) || !Empty($FIRST_NAME) || !Empty($LAST_NAME) || !Empty($E_MAIL) || !Empty($PHONE_NUMBER) || !Empty($PASSWORD) || !Empty($RE_TYPE_PASSWORD)) {
				$MESSAGE_REGISTER = "OOPS! Fill Mandatory Fields!";
		} //!isset($USERNAME) || !isset($FIRST_NAME) || !isset($LAST_NAME) || !isset($E_MAIL) || !isset($PHONE_NUMBER) || !isset($PASSWORD) || !isset($RE_TYPE_PASSWORD)
		// if password matches
		else if ($PASSWORD != $RE_TYPE_PASSWORD) {
				$MESSAGE_REGISTER = "Password doesnt match!";
		} //$PASSWORD != $RE_TYPE_PASSWORD
		else if (strlen($PASSWORD) < '8') {
        $MESSAGE_REGISTER= "Password Must Contain At Least 8 Characters!";
    	}
		else if (!filter_var($E_MAIL, FILTER_VALIDATE_EMAIL)) {
  $MESSAGE_REGISTER = "Invalid Email";
		}
		
		// enter user to database
		else {
				$insert_user        = "INSERT INTO `tblusers`(`Username`, `FirstName`, `LastName`, `EmailAddress`, `PhoneNumber`, `Password`, `SecurityQuestion`, `SecurityAnswer`) VALUES ('$USERNAME','$FIRST_NAME','$LAST_NAME','$E_MAIL','$PHONE_NUMBER','" . md5($PASSWORD) . "','$SECURITY_QUESTION','$SECURITY_ANSWER')";
				$result_insert_user = mysqli_query($con, $insert_user);
				if ($result_insert_user) {
						$MESSAGE_REGISTER = "successful";
				} //$result_insert_user
				else {
						$MESSAGE_REGISTER = "Registration unsuccessful!";
				}
		}
		mysqli_close($con); // Closing connection
} //isset($_POST["register"])
?>

<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////Forgot password page related .php///////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
$MESSAGE_RECOVER = '';
$DISPLAY_CONTENT = '';
if (isset($_POST["recoveraccount"])) {

		$USERNAME       = $_POST['username'];
		$E_MAIL       = $_POST['email'];
		$SECURITY_QUESTION       = $_POST['securityquestion'];
		$SECURITY_ANSWER       = $_POST['securityanswer'];
		
		$select_user = mysqli_query($con, "SELECT * FROM tblusers WHERE Username='".$USERNAME."' OR EmailAddress='".$E_MAIL."' LIMIT 1");
		$result_select_user = mysqli_fetch_assoc($select_user);
		$QUESTION              = $result_select_user['SecurityQuestion'] ;
		$ANSWER              = $result_select_user['SecurityAnswer'] ;
		
		if ($result_select_user) {
				
				 if ($QUESTION != $SECURITY_QUESTION || $ANSWER != $SECURITY_ANSWER)
				 	 {
						$MESSAGE_RECOVER = "Please Enter A Correct Security Question And Answer!";
					} 
				else if (!isset($SECURITY_QUESTION) || !isset($SECURITY_ANSWER) || !isset($E_MAIL)|| !isset($USERNAME)  )
					 {
					
					$MESSAGE_RECOVER = "Please Fill Mandatory Fields!";
					}
					
					else{
						$DISPLAY_CONTENT = "Display";
						$_SESSION['tempusername'] = $USERNAME;
						}
		
					} 
					else{ $MESSAGE_RECOVER = "Please Enter A Valid Username Or Email"; }
}

if (isset($_POST["resetpassword"])) {
		$USERNAME           = $_SESSION['tempusername'];
		$NEW_PASSWORD       = $_POST['newpassword'];
		$NEW_PASSWORD       = mysqli_real_escape_string($con, $NEW_PASSWORD);
		
		$select_user = mysqli_query($con, "SELECT * FROM tblusers WHERE Username='".$USERNAME."' LIMIT 1");
		$result_select_user = mysqli_fetch_assoc($select_user);
		
		// if user exists
		if ($result_select_user) {
				  if (!isset($NEW_PASSWORD)) {
					
					$MESSAGE_RECOVER = "Fill Mandatory Fields!";
					$DISPLAY_CONTENT = "Display";
					}
					
					else     if (strlen($NEW_PASSWORD) <= '8') {
        $MESSAGE_RECOVER= "Password Must Contain At Least 8 Characters!";
		$DISPLAY_CONTENT = "Display";
    							}
	
				else {
				$recover_password= "UPDATE `tblusers` SET `Password`='".md5($NEW_PASSWORD)."' WHERE `Username`='".$USERNAME."'";
				$result_recover_password = mysqli_query($con, $recover_password);
				if ($result_recover_password) {
						$MESSAGE_RECOVER = "Successfully Updated";
						$DISPLAY_CONTENT = "Display";
				} 
				else {	
						$MESSAGE_RECOVER = " Please contact Us!";
				}

}		}
} 
?>
<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////My Profile page related .php////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
require('db.php');
/////////////////////////////Variables to store data/////////////////////////////
$MESSAGE_MYPROFILE = '';
/////////////////////////////Update Username/////////////////////////////

if (isset($_POST["updatename"])) {
		$USERNAME           = $_SESSION['username'];
		$FIRST_TNAME       = $_POST['firstname'];
		$FIRST_TNAME       = mysqli_real_escape_string($con, $FIRST_TNAME);
		$LAST_NAME       = $_POST['lastname'];
		$LAST_NAME       = mysqli_real_escape_string($con, $LAST_NAME);
		$PASSWORD       = $_POST['password'];
		$PASSWORD       = mysqli_real_escape_string($con, $PASSWORD);
		
		
		$select_user = mysqli_query($con, "SELECT * FROM tblusers WHERE Username='".$USERNAME."' LIMIT 1");
		$result_select_user = mysqli_fetch_assoc($select_user);
		$PASS              = $result_select_user['Password'] ;
		
		// if user exists
		if ($result_select_user) {
				 if ($PASS != md5($PASSWORD)) {
						$MESSAGE_MYPROFILE = "Wrong Password!";
				} 
	
				else {
				$update_username = "UPDATE `tblusers` SET `FirstName`='".$FIRST_TNAME."',`LastName`='".$LAST_NAME."' WHERE `Username`='".$USERNAME."'";
				$result_update_username = mysqli_query($con, $update_username);
				if ($result_update_username) {
						$MESSAGE_MYPROFILE = "Successfully Updated";
				} 
				else {	
						$MESSAGE_MYPROFILE = " Please contact Us!";
				}

}		}
} 
/////////////////////////////Update password/////////////////////////////
if (isset($_POST["updatepassword"])) {
		$USERNAME           = $_SESSION['username'];
		$NEW_PASSWORD       = $_POST['newpassword'];
		$NEW_PASSWORD       = mysqli_real_escape_string($con, $NEW_PASSWORD);
		$PASSWORD       = $_POST['password'];
		$PASSWORD       = mysqli_real_escape_string($con, $PASSWORD);
		
		
		$select_user = mysqli_query($con, "SELECT * FROM tblusers WHERE Username='".$USERNAME."' LIMIT 1");
		$result_select_user = mysqli_fetch_assoc($select_user);
		$PASS              = $result_select_user['Password'] ;
		
		// if user exists
		if ($result_select_user) {
				 if ($PASS != md5($PASSWORD)) {
						$MESSAGE_MYPROFILE = "Wrong Password!";
				} 
				else if (!isset($NEW_PASSWORD) || !isset($PASSWORD) ) {
					
					$MESSAGE_MYPROFILE = "Fill Mandatory Fields!";
					}
					
					else     if (strlen($NEW_PASSWORD) <= '8') {
        $MESSAGE_MYPROFILE= "Password Must Contain At Least 8 Characters!";
    							}
	
				else {
				$update_password= "UPDATE `tblusers` SET `Password`='".md5($NEW_PASSWORD)."' WHERE `Username`='".$USERNAME."'";
				$result_update_password = mysqli_query($con, $update_password);
				if ($result_update_password) {
						$MESSAGE_MYPROFILE = "Successfully Updated";
				} 
				else {	
						$MESSAGE_MYPROFILE = " Please contact Us!";
				}

}		}
} 

/////////////////////////////Update Username/////////////////////////////

if (isset($_POST["updateemailaddress"])) {
		$USERNAME        = $_SESSION['username'];
		$E_MAIL       = $_POST['email'];
		$E_MAIL       = mysqli_real_escape_string($con, $E_MAIL);
		$PASSWORD       = $_POST['password'];
		$PASSWORD       = mysqli_real_escape_string($con, $PASSWORD);
		
		
		$select_user = mysqli_query($con, "SELECT * FROM tblusers WHERE Username='".$USERNAME."' LIMIT 1");
		$result_select_user = mysqli_fetch_assoc($select_user);
		$PASS              = $result_select_user['Password'] ;
		
		// if user exists
		if ($result_select_user) {
				 if ($PASS != md5($PASSWORD)) {
						$MESSAGE_MYPROFILE = "Wrong Password!";
				} 
				else if (!filter_var($E_MAIL, FILTER_VALIDATE_EMAIL)) {
 					 $MESSAGE_MYPROFILE = "Invalid Email";
						}
				else {
				$update_email = "UPDATE `tblusers` SET `EmailAddress` = '".$E_MAIL."' WHERE `Username`='".$USERNAME."'";
				$result_update_email = mysqli_query($con, $update_email);
				if ($result_update_email) {
						$MESSAGE_MYPROFILE = "Successfully Updated";
				} 
				else {	
						$MESSAGE_MYPROFILE = " Please contact Us!";
				}

}		}
} 
?>
<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////Logout page related .php///////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["logout"])) {
		session_start();
		if (session_destroy()) {
				header("Location: login.php");
		} //session_destroy()
} //isset($_POST["logout"])
?>
