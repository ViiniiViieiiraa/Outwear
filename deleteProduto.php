<?php
include 'connect.php';

$id = $_GET['id'];

$sq="delete from prod where id=$id";
mysqli_query($con,$sq);
header('location:projects.php');
?>