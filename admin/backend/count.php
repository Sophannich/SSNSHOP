<?php

        $result_order = mysqli_query($conn, "SELECT COUNT(qty) AS `count_order` FROM cart WHERE cart_status='Order' ");
        $row = mysqli_fetch_array($result_order);
        $count_order = $row['count_order'];

?>