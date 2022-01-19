<?php

$result=$conn->query("SELECT * FROM `banner_area` ORDER BY Rand()");
$resultbrand=$conn->query("SELECT * FROM `brand` ORDER BY Rand()");

?>