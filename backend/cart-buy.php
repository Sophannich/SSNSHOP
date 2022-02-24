<?php
include('../backend/DBController.php');
session_start();

date_default_timezone_set('Asia/Bangkok');
$date_order=date("Y-m-d H:i:s");

$id_order = date('ymd') . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);


$userid=$_POST['txtuserid'];
$number=$_POST['txtphone'];
$price=$_POST['txtprice'];



$conn->query("UPDATE  `cart` SET `cart_status`='Requested', `date_order` = '$date_order', `order_id`='$id_order', `phone`='$number', `price_cart`=$price WHERE `user_id`='$userid' AND cart_status='Cart' ");

// header('Location: '.$_SERVER['HTTP_REFERER']);
header("location: ../order.php"); 


?>