<?php
include('../../backend/DBController.php');
session_start();
$b_name=$_POST['txt_brand_name'];
$p_name=$_POST['txt_product_name'];
$price=$_POST['txt_product_Price'];
$date_in=$_POST['txt_date_in'];
$status=$_POST['txt_status'];
$category=$_POST['txt_category'];
$discount=$_POST['txt_product_discount'];
$sale_price=$_POST['txt_price'];
$stock=$_POST['txt_stock'];
$warranty=$_POST['txt_warranty'];
$rate_star=$_POST['txt_rate_star'];
$gift=$_POST['txt_gift'];
$detail=$_POST['txt_detail'];
$img1=$_POST['txt_img_1'];
$img2=$_POST['txt_img_2'];
$img3=$_POST['txt_img_3'];
$img4=$_POST['txt_img_4'];
$img5=$_POST['txt_img_5'];
$img6=$_POST['txt_img_6'];



$conn->query("INSERT INTO `product` (`pro_id`, `pro_brand`, `pro_name`, `price`, `discount`, `total`, `date_in`, `stock`, `status`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `detail`, `pro_rate`, `category`, `gift`, `warranty`)
values (NULL, 
   ' $b_name',
    '$p_name',
    '$price',
    '$discount',
    '$sale_price',
    '$date_in',
    '$stock',
    '$status',
    '$img1',
    '$img2',
    '$img3',
    '$img4',
    '$img5',
    '$img6',
    '$detail',
    '$rate_star',
    '$category',
    '$gift',
    '$warranty'
    )");


header('Location: '.$_SERVER['HTTP_REFERER']);


?>