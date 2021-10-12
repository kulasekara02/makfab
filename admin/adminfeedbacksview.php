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
	

	
<body class="">
	
<div class="topnav" style=" margin-bottom: 20px;" >
<a style="padding-top:0px; padding-bottom: 0px"> <img src="images/download.jpeg.jpg" width="200px" height="100px"></a>
	

<a  href="adminfeedbacksview.php">User Feedback</a>
<a  href="adminusersview.php">View Users</a>
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
	
	<?php include('header.php');?>
       
	
<div class="section1" style="overflow-y: scroll">
	
		<div align="center" class="badge" style="font-size: : 40px;font:small-caps"><h4> Feed Backs :</h4></div>
	<table id="productsview">
  <?php
$mysqli = new mysqli('localhost','root','','makfab') or die(mysqli_error($mysqli));
$result  = $mysqli->query("SELECT * FROM tbl_contact") or die ($mysqli->erorr);
//pre_r($rersult); ?>
	

  <tr>
	  
	  
	 	<th>ID</th> 
    	<th>First Name</th>
		<th>Last Name</th>
	  	<th>Email Address</th>
    	<th>Massage</th>
  </tr>
 <?php 
 		while ($row= $result->fetch_assoc()):  ?>
 			<tr>
 				<td> <?php echo $row['id']; ?> </td>
 				<td> <?php echo $row['firstname']; ?> </td>
 				<td> <?php echo $row['lastname']; ?> </td>
 				<td> <?php echo $row['email']; ?> </td>
 				<td> <?php echo $row['message']; ?> </td>
	
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

</body>
</html>