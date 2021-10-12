<?php
$mysqli = new mysqli('localhost','root','','makfab') or die(mysqli_error($mysqli));
  


if (isset($_POST['Order'])){

	$name = $_POST['name'];
	$Quantity = $_POST['Quantity'];





	    $mysqli->query("INSERT INTO tblorder (name,Quantity) VALUES('$name', '$Quantity')") or die($mysqli->error);
	

        header("location:index.html");

}
?>