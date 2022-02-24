<?php
include('../../backend/DBController.php');
session_start();
$user_id=$_POST['txt_user_id'];
$usename=$_POST['txtusername'];
$address=$_POST['txtaddress'];
$number=$_POST['txtnumber'];
$gender=$_POST['txtgender'];
$txt_password=$_POST['txtpassword'];
$encpass = password_hash($txt_password, PASSWORD_BCRYPT);

if($txt_password>0){
    $conn->query(" UPDATE `usertable` SET `name` = '$usename', `address`='$address', `phone_number`='$number',`gender`='$gender',`password`='$encpass' WHERE `usertable`.`user_id` = '$user_id' ");
}else{
    $conn->query(" UPDATE `usertable` SET `name` = '$usename', `address`='$address', `phone_number`='$number',`gender`='$gender' WHERE `usertable`.`user_id` = '$user_id' ");
}



header('Location: '.$_SERVER['HTTP_REFERER']);


?>