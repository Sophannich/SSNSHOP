<?php

        $result_pro = mysqli_query($conn, "SELECT COUNT(pro_name) AS `count` FROM product ");
        $row = mysqli_fetch_array($result_pro);
        $count_pro = $row['count'];
   
?>