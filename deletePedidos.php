<?php
include 'connect.php';

$id = $_GET['id'];

$sqp="delete from pedidos where id=$id";
mysqli_query($con,$sqp);
header('location:page-shopping-cart.php');
?>