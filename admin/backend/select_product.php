<?php

// Select all product
$pro_total=$conn->query("SELECT * FROM `product` WHERE 1");

// Select product out stock 
$pro_out_stock=$conn->query("SELECT * FROM `product` WHERE `stock` !='IN STOCK' ");

// Select product just arrived
$pro_just=$conn->query("SELECT * FROM `product` WHERE `status` ='Just Arrived' ");

// Select product new
$pro_new=$conn->query("SELECT * FROM `product` WHERE `status` ='New' ");

// Select product second head
$pro_second=$conn->query("SELECT * FROM `product` WHERE `status` ='Second' ");

// Select product Rejected
$pro_cancel=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND cart_status='Rejected'  ORDER BY date_confirmed DESC ");

// Select product Completed
$pro_completed=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id AND cart_status='Completed' ORDER BY date_completed DESC");

// Select product Requested
$pro_requested=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id AND cart_status='Requested' ORDER BY date_completed ");

// Select product Confirmed
$pro_confirmed=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id AND cart_status='Confirmed' ORDER BY date_completed ");

// Select all Customer
$pro_all_cus=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id ORDER BY cart_status DESC");

// Select product Requested
$cus_all=$conn->query("SELECT * FROM usertable ");

// Select product Requested
$user_all=$conn->query("SELECT * FROM admintable ");

?>
