<?php
$userid=$fetch_info['user_id'];

$resultordered=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND  cart_status='Order' AND  user_id='$userid' ");
$resultpastorder=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND  cart_status='Completed' AND  user_id='$userid'  ");

?>