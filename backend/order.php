<?php
$userid=$fetch_info['user_id'];

$resultordered=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND (cart_status='Confirmed' OR cart_status='Requested')AND  user_id='$userid' ORDER BY date_order DESC");
$resultpastorder=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND  cart_status='Completed' AND  user_id='$userid'  ORDER BY date_completed DESC");
$resultreject=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND  cart_status='Rejected' AND  user_id='$userid'  ORDER BY date_confirmed DESC");

?>