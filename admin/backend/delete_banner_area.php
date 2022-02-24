<?php
include('../../backend/DBController.php');
session_start();
$id=$_GET['banner_id'];
$conn->query("DELETE FROM banner_area WHERE banner_id='$id'");

header('Location: '.$_SERVER['HTTP_REFERER']);

?>