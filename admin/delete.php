<?php

$mysqli = new mysqli('localhost','root','','makfab') or die(mysqli_error($mysqli));

if (isset($_POST['deleteproduct'])) {
            $delete_to_category        = "DELETE FROM `tblproducts` WHERE `ProductID`='".$_GET["id"]."'";
            $result_delete_to_category = mysqli_query($con, $delete_to_category);
            header("Location: managecategory.php");
?>
