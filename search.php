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
	.section1{background-image: url("search.jpg")}
	
	
	
	</style>
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;" >
<a style="padding-top:0px; padding-bottom: 0px"><img src="images/download.jpeg.jpg" width="100px" height="100px"></a>
	
<a class="active" href="index.html">Home</a>
<a href="gallery.html">Gallery</a>	
<a href="Services.html">Services</a>
<a href="discounts.html">Discounts</a>
<a href="aboutus.html">About us</a>
<a href="contactus.html">Contact us</a>
<a href="login.php">Log In</a>
<a href="register.php">Register</a>
	
	
  <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" value="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
	
	
<?php
if(isset($_POST['submit'])){
include('DBconnection.php');
if($_POST['name']){
$search=$_POST['name'];
$sql = 'SELECT * FROM tblproducts WHERE Name = "'.$search.'"';
$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));
if(mysqli_num_rows($result) > 0){
//-create while loop and loop through result set
while($row=mysqli_fetch_array($result)){
$id=$row['id'];
$Name=$row['Name'];
$price=$row['price'];
$category=$row['category'];
//-display the result of the array

echo "<ul>\n";

echo "<p> <center> <strong>  Product  id - </strong> $id </center> </p>"; 
"<br>";
echo "<p> <center> <strong>  product Name - </strong> $Name </center> </p>"; 
"<br>";
echo "<p> <center> <strong>  Price - </strong> $price</center> </p>"; 
"<br>";
echo "<p> <center> <strong>  category - </strong> $category </center> </p>"; 
"<br>";


echo "</ul>";
}//end while
}
else{
echo " No results found ";
}
}
}
else{
header("Location:index.html");
}
?>
	
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
