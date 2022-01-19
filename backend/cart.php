<?php
$userid=$fetch_info['user_id'];
$resultcart=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND cart_status='Cart' AND user_id = '$userid' ");

?>