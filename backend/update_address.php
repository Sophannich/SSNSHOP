<?php
include('../backend/DBController.php');
session_start();


$user_id=$_POST['txtuserid'];
$usename=$_POST['txtusername'];
$address=$_POST['txtaddress'];
$number=$_POST['txtnumber'];
$gender=$_POST['txtgender'];

$pass_new=$_POST['txt_new_password'];
$pass_renew=$_POST['txt_renew_password'];
$encpass = password_hash($pass_new, PASSWORD_BCRYPT);
if($pass_new=$pass_renew){
    $conn->query(" UPDATE `usertable` SET `name` = '$usename', `address`='$address', `phone_number`='$number',`gender`='$gender', `password`= '$encpass' WHERE `usertable`.`user_id` = '$user_id' ");
}else{
    $conn->query(" UPDATE `usertable` SET `name` = '$usename', `address`='$address', `phone_number`='$number',`gender`='$gender'  WHERE `usertable`.`user_id` = '$user_id' ");

}


header('Location: '.$_SERVER['HTTP_REFERER']);


?>