<?php

// Count all product
        $result_pro = mysqli_query($conn, "SELECT COUNT(pro_name) AS `count` FROM product ");
        $row = mysqli_fetch_array($result_pro);
        $count_pro = $row['count'];

// Count Out Stock
        $result_pro_out = mysqli_query($conn, "SELECT COUNT(stock) AS `count` FROM product WHERE `stock` !='IN STOCK' ");
        $row = mysqli_fetch_array($result_pro_out);
        $count_pro_out = $row['count'];

// Count Just Arrived
        $result_pro_just = mysqli_query($conn, "SELECT COUNT(status) AS `count` FROM product WHERE `status` ='Just Arrived' ");
        $row = mysqli_fetch_array($result_pro_just);
        $count_pro_just = $row['count'];

// Count New
        $result_pro_new= mysqli_query($conn, "SELECT COUNT(status) AS `count` FROM product WHERE `status` ='New' ");
        $row = mysqli_fetch_array($result_pro_new);
        $count_pro_new = $row['count'];

// Count Second
        $result_pro_second= mysqli_query($conn, "SELECT COUNT(status) AS `count` FROM product WHERE `status` ='second' ");
        $row = mysqli_fetch_array($result_pro_second);
        $count_pro_second = $row['count'];


// Count All Customer's Product 
        $result_all_pro_cus= mysqli_query($conn, "SELECT COUNT(cart_id) AS `count` FROM cart ");
        $row = mysqli_fetch_array($result_all_pro_cus);
        $count_all_pro_cus = $row['count'];        

// Count All User
        $result_all_user= mysqli_query($conn, "SELECT COUNT(user_id) AS `count` FROM usertable ");
        $row = mysqli_fetch_array($result_all_user);
        $count_all_user = $row['count']; 

// Count All Cancel
        $result_all_pro_cancelled= mysqli_query($conn, "SELECT COUNT(cart_id) AS `count` FROM cart WHERE `cart_status` ='Rejected' ");
        $row = mysqli_fetch_array($result_all_pro_cancelled);
        $count_all_pro_cancelled = $row['count'];      

// Count All Requested
        $result_all_pro_requested= mysqli_query($conn, "SELECT COUNT(cart_id) AS `count` FROM cart WHERE `cart_status` ='Requested' ");
        $row = mysqli_fetch_array($result_all_pro_requested);
        $count_all_pro_requested = $row['count'];        

// Count All Confirmed
        $result_all_pro_confirmed= mysqli_query($conn, "SELECT COUNT(cart_id) AS `count` FROM cart WHERE `cart_status` ='Confirmed' ");
        $row = mysqli_fetch_array($result_all_pro_confirmed);
        $count_all_pro_confirmed = $row['count'];        

// Count All Completed
        $result_all_pro_completed= mysqli_query($conn, "SELECT COUNT(cart_id) AS `count` FROM cart WHERE `cart_status` ='Completed' ");
        $row = mysqli_fetch_array($result_all_pro_completed);
        $count_all_pro_completed = $row['count'];

// Count All user 
        $result_user_all= mysqli_query($conn, "SELECT COUNT(id) AS `count` FROM admintable ");
        $row = mysqli_fetch_array($result_user_all);
        $count_user_all = $row['count'];

// Count All Banner
        $result_all_banner= mysqli_query($conn, "SELECT COUNT(banner_id) AS `count` FROM banner_area ");
        $row = mysqli_fetch_array($result_all_banner);
        $count_all_banner = $row['count'];

// Count All Brand
        $result_all_brand= mysqli_query($conn, "SELECT COUNT(brand_id) AS `count` FROM brand ");
        $row = mysqli_fetch_array($result_all_brand);
        $count_all_brand = $row['count'];
?>