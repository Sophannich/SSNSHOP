<?php
include('../../backend/DBController.php');
session_start();
$cart_id=$_POST['txt_cart_id'];
$cart_status="Completed";
$reason=$_POST['txt_reason'];

date_default_timezone_set('Asia/Bangkok');
$date_completed=date("Y-m-d H:i:s");

$conn->query(" UPDATE `cart` SET 

    `cart_status`='$cart_status',
    `reason`='$reason',
    `date_completed`='$date_completed'

WHERE `cart`.`cart_id` = '$cart_id' ");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>
