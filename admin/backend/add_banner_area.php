<?php
include('../../backend/DBController.php');
session_start();
$banner=$_POST['txt_banner'];

$conn->query("INSERT INTO `banner_area` (`banner_id`,`banner_img`)
values (NULL, ' $banner')");


header('Location: '.$_SERVER['HTTP_REFERER']);


?>