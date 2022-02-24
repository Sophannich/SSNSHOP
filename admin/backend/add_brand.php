<?php
include('../../backend/DBController.php');
session_start();
$brand_name=$_POST['txt_brand_name'];
$brand_logo=$_POST['txt_brand_logo'];

$conn->query("INSERT INTO `brand` (`brand_id`,`brand_logo`,`brand_name`)
values (NULL, ' $brand_logo','$brand_name')");


header('Location: '.$_SERVER['HTTP_REFERER']);


?>