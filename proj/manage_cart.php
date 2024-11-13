<?php
include 'db_conn.php';
session_start();
$name = $_GET["name"];
$price = $_GET["price"];
$quantity = $_GET["quantity"];
$amount = $price*$quantity;
$user = $_SESSION["user_name"];

$sql ="insert into mycart (name, price, quantity, amount, user) values ('".$name."',".$price.",".$quantity.",".$amount.",'".$user."');";
if($conn->query($sql))
{
	echo '<script>alert("Item has been added to cart");</script>';
	echo '<script>window.location="mycart.php";</script>';
}
else
{
	echo '<script>alert("Error");</script>';
	echo '<script>window.location="menu.php";</script>';
}
?>