<?php

$resultproduct=$conn->query("SELECT * FROM `product` ORDER BY Rand()");
$resultsearch=$conn->query("SELECT * FROM `product` ORDER BY Rand()");
$resultbrandsearch=$conn->query("SELECT DISTINCT pro_brand FROM `product` ORDER BY Rand()");
$resultcategory=$conn->query("SELECT DISTINCT category FROM `product` ORDER BY Rand()");



?>


