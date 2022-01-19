<?php
include('../backend/DBController.php');

	session_start();
		$userid=$_POST['txtuserid'];
		$proid=$_POST['txtproid'];

		$conn->query("INSERT INTO favorite(user_id,pro_id,favorite_status) values ('$userid','$proid','1')");


		header('Location: '.$_SERVER['HTTP_REFERER']);
	

		
?>


	




