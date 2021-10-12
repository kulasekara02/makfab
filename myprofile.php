<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
  <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/css.css">
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
  
<div class="topnav" style=" margin-bottom: 20px;"  >
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="140px" height="46px"></a>
  
	<a>Name</a>
	
	
	<form method="POST">
    <input name="logout" class="cart_btn" type="submit" value="Log Out">
  </form>

</div>
  
  
  
 
<?php
  include('header.php');
  if(!isset($_SESSION["username"])){
  header("Location: login.php");
  unset($_SESSION['crumbs']);
  }
  else
{
    $USER = $_SESSION["username"];
    $select_track_orders = "SELECT tblordertrack.TrackID, tblordertrack.`Status`, tblorder.OrderDate, tbldelivery.RecipientName FROM tblordertrack join tblorder ON tblordertrack.`OrderID` = tblorder.`OrderID` join tbldelivery ON tblorder.`DeliveryID` = tbldelivery.`DeliveryID` WHERE tblorder.Username = '" . $USER . "'";
    $result_track_orders = mysqli_query($con, $select_track_orders);
}
  
?>
     <!----------------- main frame----------------->
  <div id="mainframe">
  <div class="sub_framefullpage" style="width:100%">
    <h3>My Profile - <?php echo $_SESSION["username"] ?></h3>
  <p>
    <div class="row"> 
  <div class="col_3">
  <h3> Account Settings</h3>
    <!----------------- Update username----------------->
  <?php if(empty($MESSAGE_MYPROFILE)){ } else {?>
  <label class = "labelhome"> <center><?php echo $MESSAGE_MYPROFILE ?></center></label>
  
 <?php }?> 
    
<h1> Update Name</h1>
<div class="content" align="center">
  <form method="post">
  <p>
  <label>First Name</label>
  <br>
  <input name="firstname" type="text">
  </p>
    <p>
  <label>Last Name</label>
  <br>
  <input name="lastname" type="text">
  </p>
    <p>
    <label>Your Password</label>
    <br>
  <input name="password" type="password">
  </p>
    <p>
<input name="updatename" type="submit" value="Update">
  </p>
  </form>
</div>

<!----------------- Update password----------------->
<h1>Update Password<h1>
<div class="content" class="content" align="center">
<form method="post">
  <p>
  <label>New Password</label>
  <br>
  <input name="newpassword" type="password">
  </p>
  <p>
    <label>Currrent Password</label>
    <br>
  <input name="password" type="password">
  </p>
    <p>
<input name="updatepassword" type="submit" value="Update">
  </p>
  </form>
</div>
<!----------------- Update email address----------------->
<h1>Update Email Address</h1>
<div class="content" class="content" align="center">
<form method="post">
    <p>
  <label>New Email Address</label>
  <br>
  <input name="email" type="text">
  </p>
  <p>
    <label>Your Password</label>
    <br>
  <input name="password" type="password">
  </p>
    <p>
<input name="updateemailaddress" type="submit" value="Update">
  </p>
   </form>
</div>
<!----------------- Update email address----------------->
  
 
    
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
