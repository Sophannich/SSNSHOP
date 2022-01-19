<?php


$result1=$conn->query("SELECT * FROM product INNER JOIN product_detail WHERE product.pro_id=product_detail.pro_id");
$result=$conn->query("SELECT * FROM `product` ORDER BY Rand()");

$resultsearch=$conn->query("SELECT * FROM `product` ORDER BY Rand()");
$resultbrand=$conn->query("SELECT DISTINCT pro_brand FROM `product` ORDER BY Rand()");
$resultcategory=$conn->query("SELECT DISTINCT category FROM `product` ORDER BY Rand()");



?>


