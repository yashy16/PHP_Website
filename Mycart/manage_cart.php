<?php
session_start();
$name = $_GET["name"];
$price = $_GET["price"];
$quantity = $_GET["quantity"];

echo "Name: ".$name.", Price: ".$price.", Quantity: ".$quantity ;
?>