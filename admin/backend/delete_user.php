<?php
include('../../backend/DBController.php');
session_start();
$id=$_GET['user_id'];
$conn->query("DELETE FROM admintable WHERE id='$id'");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>