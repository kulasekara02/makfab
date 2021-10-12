<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="css/slider.css" rel="stylesheet">
</head>
<style>
	
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
	
	
	
	
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;">
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="100px" height="100px"></a>
	

</div>
	
	
	
 <!-----------------Wrapper----------------->
      <div id="wrapper">
         <!-----------------Header & Navigation Bar----------------->
         <?php include('header.php');?>
         <!-----------------Main Frame----------------->
         <div id="mainframe">
            <div class="sub_framefullpage">
               <!-----------------Products Frame----------------->
               <h3>Forgot Password</h3>
               <hr>
               <p>
               <div class="row" align="center">
                  <div class="col_3">
                     <h3>Account Benifits</h3>
                     <hr>
                     <p>By creating an account with us, additional benefits such as seasonal discounts, view order history, prioritised delivery and much more will be available for you.</p>
                  </div>
                  <div class="col_3">
                     <h3>Recover Your Password Here</h3>
                     <hr>
                     <form method="POST">
                        <p>Recover your account here with a few steps.</p>
                        <p><?php echo $MESSAGE_RECOVER; ?></p>
                        <?php if($DISPLAY_CONTENT != "Display"){ ?> 
                        <label>Username</label><br>
                        <input name="username" type="text"><br>
                        <label>Email Address</label><br>
                        <input name="email" type="text" ><br>
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
                       
                        <label>Security Answer</label><br>
                        <input name="securityanswer" type="text"><br>
                        <p>
                        <input name="recoveraccount" type="submit" value="Recover">
                        </p>
                        </form>
                        
                        <?php } else{ ?> 
                        <form method="post">
                        <label>Please Enter A New Password</label><br>
                        <input name="newpassword" type="password"><br>
                        <p>
                        <input name="resetpassword" type="submit" value="Reset Password">
                        </p>
                        </form>
                        <?php } ?>
                     
                  </div>
               </div>
               </p>
            </div>
	
	
<footer class="footer-distributed">

<div class="footer-left">

  <a><img src="images/download.jpeg.jpg" alt="" width="100px" height="100px"  ></a>

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
