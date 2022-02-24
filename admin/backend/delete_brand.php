<?php
include('../../backend/DBController.php');
session_start();
$id=$_GET['brand_id'];
$conn->query("DELETE FROM brand WHERE brand_id='$id'");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>