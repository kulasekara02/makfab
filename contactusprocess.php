<?php
session_start();
$mysqli = new mysqli('localhost','root','','makfab') or die(mysqli_error($mysqli));
  
 

if (isset($_POST['submit'])){

	$firstname = $_POST['firstname'];
	$lastname	 = $_POST['lastname'];
	$email = $_POST['email'];
	$message = $_POST['message'];




	    $mysqli->query("INSERT INTO tbl_contact (firstname,lastname,email,message) VALUES('$firstname', '$lastname', '$email', '$message')") or die($mysqli->error);
	    
        header("location:index.html");

}
