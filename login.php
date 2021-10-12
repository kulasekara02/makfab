<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	
<style>
      
#login .container #login-row #login-column #login-box {
  margin-top: 30px;
  max-width: 500px;
 
  height: 400px;
  border: 3px solid #9C9C9C;
  color: black;
	background-image: url("images/background\(2\).jpg") ;
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 400px;
			
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 10px;
	text-align: left;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
 margin-top: -5px;
text-align: left;
	color: aliceblue;

}
	
	.section3s2login{
		background-image: url("images/background.jpg");
		
		
		
		
		
	}
        
	</style>
	
	
	
	
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;"  >
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="100px" height="100px"></a>
	
<a  href="index.html">Home</a>
<a href="gallery.html">Gallery</a>
<a href="Services.html">Services</a>	
<a href="aboutus.html">About us</a>
<a href="contactus.html">Contact us</a>
<a class="active" href="login.php">Log In</a>
<a href="register.php">Register</a>
	
 <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="name">
      <button type="submit" value="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
	
	
	
	<div class="section3s2login" align="center">		
		
 <?php include('header.php');?>
    
     <!----------------- main frame----------------->
  <div id="mainframe">
  <div class="sub_framefullpage">
  <h1>Account Login</h1>
    <p>
    <div class="row"> 
  <div class="col_3">
  <h2>New Customers</h1>
  <form method="post">
  <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size: 20px">By creating an account with Salon Capello, you will get additional benefits such as seasonal discounts, order history, prioritised delivery and much more.</p>
  <input name="NewAccount" type="button" class="input1" value="Create a New Account" onclick="document.location = 'register.php'">
  </form>
  <?php
    if (isset($_SESSION['crumbs'])) {
  ?>
      <h3>Place Order as a Guest</h3>
  <form method="post">
  <h2>If you want to place this order quickly without any
registrations, then continue here. </h2>
 
    </form>
    <?php
  }
    ?>
  

  </div>
		
		
		
	
	
<div id="login">
  <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">	
									 <h2 class="text-center text-info">Capello Members</h2>
						
									  <form id="login-form" class="form" method="POST">
										  
											  <p>If you already have an account, please enter your User Name and password here.</p>
										  
										  <div class="form-group">
											  <label for="username" class="col-sm-3 control-label">Username:</label><br>
											  <input name="username" type="text" placeholder="Enter Username"><br>
										  </div>
											  
										  <div class="form-group">
											  <label for="password" class="col-sm-3 control-label">password:</label><br>
											  <input name="password" type="password" placeholder="Enter Password"><br>
										  </div>
										  
										  <div class="form-group">
											   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
											  <hr>
											  <input name="login" type="submit" value="Login">
												<div class="panel-danger"><?php echo $MESSAGE_LOGIN; ?></div>
											  <p><a href="forgotPassword.php">Forgot Password?</a></p>
										  </div>
										  
									  </form>
										 
									     
                            
                          
                        
		
						 </div>
                </div>
            </div>
        </div>
    </div> 

	
	</div>	
		
  </div>
  </p>
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
	
	
	
	
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
	
</body>
</html>
