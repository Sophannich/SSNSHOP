<?php
include('../../backend/DBController.php');
session_start();
$user_id=$_POST['txt_user_id'];
$usename=$_POST['txtusername'];

$txt_password=$_POST['txtpassword'];
$encpass = password_hash($txt_password, PASSWORD_BCRYPT);

if($txt_password>0){
    $conn->query(" UPDATE `admintable` SET `name` = '$usename', `password`='$encpass' WHERE `admintable`.`id` = '$user_id' ");
}else{
    $conn->query(" UPDATE `admintable` SET `name` = '$usename' WHERE `admintable`.`id` = '$user_id'  ");
}





header('Location: '.$_SERVER['HTTP_REFERER']);


?>