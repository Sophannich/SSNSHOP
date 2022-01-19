<?php
include('../backend/DBController.php');

	session_start();
		$userid=$_POST['txtuserid'];
		$proid=$_POST['txtproid'];
        $qty=$_POST['txtqty'];

		$conn->query("INSERT INTO cart(user_id,pro_id,qty,cart_status) values ('$userid','$proid','$qty','Cart' )");


		header('Location: '.$_SERVER['HTTP_REFERER']);
	

		
?>