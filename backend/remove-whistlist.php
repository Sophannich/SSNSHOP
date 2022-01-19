<?php
include('../backend/DBController.php');
session_start();

$id=$_GET['cart_id'];
$proname=$_POST['pro_name'];


$conn->query("UPDATE `cart` SET `cart_status` = 'Cart' WHERE `cart`.`cart_id` = '$id'");

header('Location: '.$_SERVER['HTTP_REFERER']);


?>