<?php
include('../backend/DBController.php');
session_start();


$user_id=$_POST['txtuserid'];
$usename=$_POST['txtusername'];
$address=$_POST['txtaddress'];
$number=$_POST['txtnumber'];

$conn->query(" UPDATE `usertable` SET `name` = '$usename', `address`='$address', `phone_number`='$number' WHERE `usertable`.`user_id` = '$user_id' ");

header('Location: '.$_SERVER['HTTP_REFERER']);


?>