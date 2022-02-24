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

$conn->query("INSERT INTO `admintable` (`id`,
                                                                                `name`,
                                                                                `email`,
                                                                                `password`,
                                                                                `add_pro`,
                                                                                `total_pro`,
                                                                                `banner`,
                                                                                `brand`,
                                                                                `request`,
                                                                                `cus_pro`,
                                                                                `create_user`,
                                                                                `position`,
                                                                                `reject`,
                                                                                `confirm`,
                                                                                `complete`,
                                                                                `adds`,
                                                                                `deletes`,
                                                                                `updates`
                                                                                )
values (NULL,
              '$name',
              '$email',
              '$pw_user',
              '$add_pro',
              '$total_pro',
              '$banner',
              '$brand',
              '$request',
              '$cus_pro',
              '$create_user',
              '$position',
              '$reject',
              '$confirm',
              '$complete',
              '$add',
              '$delete',
              '$update'
              )");


header('Location: '.$_SERVER['HTTP_REFERER']);


?>