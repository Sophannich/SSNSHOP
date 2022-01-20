<?php
include('../backend/DBController.php');

	session_start();


		date_default_timezone_set('Asia/Bangkok');
		$date_order=date("Y-m-d H:i:s");
	
		$id_order = date('ymd') . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
	

		$userid=$_POST['txtuserid'];
		$number=$_POST['txtphone'];
		$userid=$_POST['txtuserid'];
		$proid=$_POST['txtproid'];
        $qty=$_POST['txtqty'];

		$conn->query("INSERT INTO cart(user_id,pro_id,qty,cart_status,order_id,date_order,phone) values ('$userid','$proid','$qty','Order', '$id_order','$date_order','$number')");


		header("location: ../order.php"); 
	

		
?>