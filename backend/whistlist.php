<?php
$userid=$fetch_info['user_id'];
$resultlist=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND cart_status='List' AND user_id = '$userid'  ");

?>