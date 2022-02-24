<?php
include('../../backend/DBController.php');
session_start();

$id=$_POST['txt_id'];
$name=$_POST['txt_name'];
$email=$_POST['txt_email'];
$password_user=$_POST['txt_password'];
$add_pro=$_POST['txt_add_pro'];
$total_pro=$_POST['txt_total_pro'];
$banner=$_POST['txt_banner'];
$brand=$_POST['txt_brand'];
$confirm=$_POST['txt_confirm'];
$request=$_POST['txt_request'];
$cus_pro=$_POST['txt_cus_pro'];
$create_user=$_POST['txt_create_user'];
$position=$_POST['txt_position'];
$reject=$_POST['txt_reject'];
$complete=$_POST['txt_complete'];
$add=$_POST['txt_add'];
$delete=$_POST['txt_delete'];
$update=$_POST['txt_update'];

$pw_user = password_hash($password_user, PASSWORD_BCRYPT);

if($password_user>0){
    $conn->query(" UPDATE `admintable` SET
     `name`= '$position', 
     `password`='$pw_user', 
     `add_pro`='$add_pro', 
     `total_pro`='$total_pro',
     `banner`='$banner',
     `brand`='$brand',
     `request`='$request',
     `cus_pro`='$cus_pro',
     `create_user`='$create_user', 
     `position`='$position', 
     `reject`='$reject', 
     `confirm`='$confirm',
     `complete`='$complete',
     `adds`='$add',
     `deletes`='$delete',
     `updates`='$update'
    
     WHERE `admintable`.`id` = '$id' ");

}else{
    $conn->query(" UPDATE `admintable` SET
    `name`= '$position',
    `add_pro`='$add_pro', 
    `total_pro`='$total_pro',
    `banner`='$banner',
    `brand`='$brand',
    `request`='$request',
    `cus_pro`='$cus_pro',
    `create_user`='$create_user', 
    `position`='$position', 
    `reject`='$reject', 
    `confirm`='$confirm',
    `complete`='$complete',
    `adds`='$add',
    `deletes`='$delete',
    `updates`='$update'
   
    WHERE `admintable`.`id` = '$id' ");
}





header('Location: '.$_SERVER['HTTP_REFERER']);


?>