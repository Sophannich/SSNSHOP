<?php
		// $userid=$_POST['txtuserid'];
        $userid=$fetch_info['user_id'];

        $result_cart = mysqli_query($conn, "SELECT COUNT(qty) AS `count` FROM cart WHERE user_id = '$userid' AND cart_status='Cart' ");
        $row = mysqli_fetch_array($result_cart);
        $count_cart = $row['count'];

        $result_order = mysqli_query($conn, "SELECT COUNT(qty) AS `count_order` FROM cart WHERE cart_status='Requested' AND user_id = '$userid' ");
        $row = mysqli_fetch_array($result_order);
        $count_order = $row['count_order'];

        $result_sum = mysqli_query($conn, "SELECT SUM(product.total) AS prices FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND user_id= '$userid' AND cart_status='Cart'  ");
        $row = mysqli_fetch_array($result_sum);
        $sum_price = $row['prices'];


	
?>