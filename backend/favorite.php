<?php

    $id=$fetch_info['user_id'];
    $resultfavorite=$conn->query("SELECT * FROM favorite INNER JOIN product ON favorite.pro_id = product.pro_id AND favorite.user_id='$id'  ");
    $favorite=$conn->query("SELECT * FROM favorite ");
?>