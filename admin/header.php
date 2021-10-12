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
		else if (!isset($USERNAME) || !isset($FIRST_NAME) || !isset($LAST_NAME) || !isset($E_MAIL) || !isset($PHONE_NUMBER) || !isset($PASSWORD) || !isset($RE_TYPE_PASSWORD)) {
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
						header('location:manageorders.php');
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
////////////////////////////////////Logout page related .php///////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["logout"])) {
                if (session_destroy()) {
                                header("Location: ../myprofile.php");
                } //session_destroy()
} //isset($_POST["logout"])
if (isset($_POST["logoutadmin"])) {
                if (session_destroy()) {
                                header("Location: ../myprofile.php");
                } //session_destroy()
} //isset($_POST["logout"])
?>