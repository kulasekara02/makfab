<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="css/slider.css" rel="stylesheet">
</head>
	<style>
	.section1 {background: rgb(43,207,180);
background: linear-gradient(90deg, rgba(43,207,180,1) 26%, rgba(20,155,212,1) 70%);}
	#register .container #register-row #register-column #register-box {
  margin-top:  0px;
  max-width: 1100px;
  height: 500px;
  border: 3px solid #9C9C9C;
  color: black;
	
	font-size: 16px;
background-image: url("images/images/download.jpeg.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 800px;


		
}
#register .container #register-row #register-column #register-box #register-form {
  padding: 1px;
	text-align: left;
	alignment-baseline: center;
	
	
}
#register .container #register-row #register-column #register-box #register-form #register-link {
 margin-top: -1px;
text-align: left;
color: aliceblue;


}
        
  	
	
        
  	

		
		
		
			
		
		
		
		
		
		
		
	#productsview {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#productsview td, #productsview th {
  border: 1px solid #ddd;
  padding: 8px;
}

#productsview tr:nth-child(even){background-color: #f2f2f2;}

#productsview tr:hover {background-color: #ddd;}

#productsview th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #F18BE7;
  color: white;
	
	
	
	
	
	
	
	
	
	
	
	
	
	</style>
	
<?php include('header.php');?>
   
	
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;" >
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="100px" height="100px"></a>
	
<a  href="adminfeedbacksview.php">Feed Back View</a>
<a  href="adminusersview.php">Users View</a>
<form method="POST">
    <input name="logout" class="cart_btn" type="submit" value="Log Out">
  </form>
	
	
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
	
	<?php
$mysqli = new mysqli('localhost','root','','makfab') or die(mysqli_error($mysqli));
$result  = $mysqli->query("SELECT * FROM tblusers") or die ($mysqli->erorr);
//pre_r($rersult); ?>
	
<div class="section1" style="overflow-y: scroll">
	
		<div align="center" class="badge" style="font-size: : 40px;font:small-caps"><h4> Customers</h4></div>
	<table id="productsview">
  <tr>
	  
	  
	 	<th>Customer Name</th> 
    	<th>First Name</th>
		<th>Last Name</th>
	  	<th>Email Address</th>
    	<th>Phone Number</th>
	  	<th>Security Question</th>
	  	<th>Security Answer</th>
	  	<th>Register Date ANd Time</th>
  </tr>
 <?php 
 		while ($row= $result->fetch_assoc()):  ?>
 			<tr>
 				<td> <?php echo $row['Username']; ?> </td>
 				<td> <?php echo $row['FirstName']; ?> </td>
 				<td> <?php echo $row['LastName']; ?> </td>
 				<td> <?php echo $row['EmailAddress']; ?> </td>
 				<td> <?php echo $row['PhoneNumber']; ?> </td>

 				<td> <?php echo $row['SecurityQuestion']; ?> </td>
 				<td> <?php echo $row['SecurityAnswer']; ?> </td>	
 				<td> <?php echo $row['UserCrtd']; ?> </td>
	
  </tr>
 <?php endwhile; ?>
 	 </table>
 	</div>
 	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';

 	 }
 	 ?>

	</div>
	
	<div class="section1" align="center" style="height: 700px">
	
		<div align="center" class="badge" style="font-size: : 40px;font:small-caps"><h4> Add a New Customer</h4></div>
	
		
			  
			  
 <div id="register">
       
   
            <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">			  
			  
          <div class="row">
			  
            
			  
            <div class="col_3">
				<hr>
				
              
				
				
				
				<?php include('header.php');?>
				
				
              <form method="POST" >
                <p><?php echo $MESSAGE_REGISTER; ?></p>

				  <div class="form-group"> 
               <label for="username" class="col-sm-3 control-label">Username:</label><br>
                <input name="username" type="text"><br>
				  </div>
				  
				<div class="form-group">   
                <label>First Name</label><br>
                <input name="firstname" type="text" required ><br>
					</div>
				  
				 <div class="form-group">   
                <label>Last Name</label><br>
                <input name="lastname" type="text" required><br>
					 </div>
				  
				  <div class="form-group">    
                <label>Email Address</label><br>
                <input name="email" type="text"  ><br>
					   </div>
				  
				  <div class="form-group">    
                <label>Phone Number</label><br>    
                <input name="phonenumber" type="number" required><br>
					    </div>
				  
				    <div class="form-group">
                <label>Password</label><br>
                <input name="password" type="password" required><br>
						
						  </div>
				  
				   <div class="form-group">
                <label>Re-Type Password</label><br>
					   </div>
				  
				  <div class="form-group"> 
                <input name="retypepassword" type="password" required><br>
					  </div> 
				  
				  
				    <div class="form-group"> 
                <label>Security Question</label><br>
                <select name="securityquestion">
                  <option value="1">What was the name of your primary school?</option>
                  <option value="2"> What is the name of the company of your first job?</option>
                  <option value="3"> What was your favorite place to visit as a child?</option>
                  <option value="4"> What is your spouse's mother's maiden name?</option>
                  <option value="5"> What is the country of your ultimate dream vacation?</option>
                  <option value="6"> What is the name of your favorite childhood teacher?</option>
                  <option value="7"> To what city did you go on your honeymoon?</option>
                  <option value="8"> What time of the day were you born?</option>
                  <option value="9"> What was your dream job as a child?</option>
                  <option value="10"> What is the street number of the house you grew up in? </option>
                  <option value="11"> What is the license plate of your dad's first car? </option>
                </select>
                <br>
					</div>	
					
				   <div class="form-group"> 
                <label>Security Answer</label><br>
                <input name="securityanswer" type="text" required><br>
					   </div>	
				  <hr>
				 <div class="form-group">  
                <input name="register" type="submit" value="Register">
               
					 
					 </div>
         
              </form>
				
				      </div>
                </div>
            </div>
        </div>
    </div> 
				
		</div>
		</div>
		</div>

				
            </div>
          </div>
          </div>
          </p>
        </div>
        <div class="clear"></div>

    </div>
	
	</div>
	
		
				</body>	
		
	</div>
	
	
		
</div>	


<footer class="footer-distributed">

    <div class="footer-left">
  
      <a><img src="images/download.jpeg.jpg" alt="" width="100px" height="100"  ></a>
  
      <p class="footer-links">
        <a href="index.html" class="link-1">Home</a>
        <a href="gallery.html">Gallery</a>
    
        <a href="products.html">Products</a>
      
        <a href="aboutus.html">About us</a>
        
        
        <a href="contactus.html">Contact us</a>
      </p>
  
      <p class="footer-company-name">Capello Name © 2021</p>
    </div>
  
    <div class="footer-center">
  
      <div>
        <i class="fa fa-map-marker"></i>
        <p>Capello Salon (PVT) LTD,<br> De Krester Place, Colombo</p>
      </div>
  
      <div>
        <i class="fa fa-phone"></i>
        <p>077 786 1863</p>
      </div>
  
      <div>
        <i class="fa fa-envelope"></i>
          <p><a href="Capello:support@company.com">support@Capello.com</a></p>
      </div>
  
    </div>
  
    <div class="footer-right">
  
      <p class="footer-company-about">
        <span>Our Story</span>
        Above Everything, Capello always tries to give clients the most affordable prices with the best quality products and treatments.
      </p>
  
      <div class="footer-icons">
  
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
  
      </div>
  
    </div>
  
  </footer>
  </div>
  <script src="js/slider.js"></script>	
</body>
</html>