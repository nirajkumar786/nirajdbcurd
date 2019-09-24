<?php
include("connection.php");
$id = $_GET['id'];
$query=mysqli_query($con , "DELETE FROM `emp` WHERE id='$id'");
header('Location:employee.php');
?>
