<?php
include 'connect.php';

$id = $_GET['id'];

$sq="delete from reg where id=$id";
mysqli_query($con,$sq);
header('location:usuarios.php');
?>

<?php
/*
include 'connect.php';

$j='delete*from reg where id="'.$_GET['pessoas'].'"';
$result = $con->query($j);
header('location:usuarios.php');
*/
?>