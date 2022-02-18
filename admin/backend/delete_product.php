<?php
include('../../backend/DBController.php');
session_start();
$id=$_GET['pro_id'];
$conn->query("DELETE FROM product WHERE pro_id='$id'");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>