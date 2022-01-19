<?php
include('../backend/DBController.php');
session_start();

$userid=$_GET['txtuserid'];



date_default_timezone_set('Asia/Bangkok');
$date_order=date("Y-m-d H:i:s");

$id_order = date('ymd') . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

$number=$fetch_info['phone_number'];
$conn->query("UPDATE  `cart` SET `cart_status`='Order', `date_order` = '$date_order', `order_id`='$id_order', `phone_number`='$number' WHERE `user_id`='$userid' AND cart_status='Cart' ");

// header('Location: '.$_SERVER['HTTP_REFERER']);
header("location: ../order.php"); 


?>