<?php
include('../../backend/DBController.php');
session_start();
$order_id=$_POST['txt_order_id'];
$cart_status="Confirmed";
$reason=$_POST['txt_reason'];

date_default_timezone_set('Asia/Bangkok');
$date_confirmed=date("Y-m-d H:i:s");

$conn->query(" UPDATE `cart` SET 

    `cart_status`='$cart_status',
    `reason`='$reason',
    `date_confirmed`='$date_confirmed'

WHERE `cart`.`order_id` = '$order_id' ");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>
