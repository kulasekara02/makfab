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
	
        
#register .container #register-row #register-column #register-box {
  margin-top:  0px;
  max-width: 1100px;
  height: 800px;
  border: 3px solid #9C9C9C;
  color: black;
	
	font-size: 16px;
background-image: url("images/background (3).jpg");
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
        
  	
	.section3s2register{
		background-image: url("images/background.jpg");

		
		
		
		
	
	</style>
	
	
	
	
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;"  >
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="100px" height="100px"></a>

<a href="index.html">Home</a>
<a href="gallery.html">Gallery</a>	
<a href="Services.html">Services</a>
<a href="discounts.html">Discounts</a>
<a href="aboutus.html">About us</a>
<a href="contactus.html">Contact us</a>
<a href="login.php">Log In</a>
<a class="active" href="register.php">Register</a>
	
	
	
 <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="name">
      <input type="submit" value="Search" name="submit"><i class="fa fa-search"></i></input>
    </form>
  </div>
</div>
	
	<div class="section3s2register" align="center">
	
  <div id="wrapper">
      <!-----------------Header & Navigation Bar----------------->
      <?php include('header.php');?>
      <!-----------------Main Frame----------------->
      <div id="mainframe">
        <div class="sub_framefullpage">
          <!-----------------Products Frame----------------->
          <h3>Account Register</h3>
          <p>
			  
	
 <div id="register">		  
			  
       
   
            <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">			  
			  
          <div class="row">
			  
            <div class="col_3">
				
              <h3>Account Benifits</h3>
				
				
              <h2>If you create an account with Capello, you will get additional benefits such as seasonal discounts, order history, prioritised delivery and much more.</h2>
            </div>
			  
            <div class="col_3">
				<hr>
				
              <h1>Become Member Of Capello Today !!</h1>
				
				
				
				
				
				
              <form method="POST" >
                <p style="font-size: 18px">Create your free account here and enjoy the benifits.</p>
                <p><?php echo $MESSAGE_REGISTER; ?></p>
                <?php if($MESSAGE_REGISTER == "successful"){ ?> 
                <p>Successfully Registered! Click here to <a href='login.php'>Login</a></p>
                <?php } else{ ?> 
				  
				  <div class="form-group"> 
               <label for="username" class="col-sm-3 control-label">Username:</label><br>
                <input name="username" type="text"><br>
				  </div>
				  
				<div class="form-group">   
                <label>First Name</label><br>
                <input name="firstname" type="text"><br>
					</div>
				  
				 <div class="form-group">   
                <label>Last Name</label><br>
                <input name="lastname" type="text"><br>
					 </div>
				  
				  <div class="form-group">    
                <label>Email Address</label><br>
                <input name="email" type="text" ><br>
					   </div>
				  
				  <div class="form-group">    
                <label>Phone Number</label><br>    
                <input name="phonenumber" type="number"><br>
					    </div>
				  
				    <div class="form-group">
                <label>Password</label><br>
                <input name="password" type="password"><br>
						
						  </div>
				  
				   <div class="form-group">
                <label>Re-Type Password</label><br>
					   </div>
				  
				  <div class="form-group"> 
                <input name="retypepassword" type="password"><br>
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
                <input name="securityanswer" type="text"><br>
					   </div>	
				  <hr>
				 <div class="form-group">  
                <input name="register" type="submit" value="Register">
                <p>
                  <input type="button" value="Forgot Password" class="cart_btn" onclick="location.href='forgotpassword.php'">
                </p>
					 
					 </div>
                <?php } ?>
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
        <div class="clear"></div>

    </div>
	
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
