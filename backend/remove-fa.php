<?php
include('../backend/DBController.php');

	session_start();
		$faid=$_POST['txtfavoriteid'];

		$conn->query("DELETE FROM `favorite` WHERE favorite_id='$faid'");

		header('Location: '.$_SERVER['HTTP_REFERER']);

 
		
?>