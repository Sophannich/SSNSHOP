<?php

$pro_total=$conn->query("SELECT * FROM `product` WHERE 1");
$pro_out_stock=$conn->query("SELECT * FROM `product` WHERE `stock` !='IN STOCK' ");

?>
