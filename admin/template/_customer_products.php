                <!-- Begin Page Content -->
                <div class="container-fluid">
 

                    <!-- Content Row -->
                    <div class="row">

                    <?php 
                    // Select product Requested
// $pro_all_cus=$conn->query("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id ORDER BY cart_status DESC");

                    foreach ($pro_all_cus as $row){

                        if($row['cart_status']=="Completed"){
                            include('../admin/template/card/card_completed.php');
                        }elseif($row['cart_status']=="Confirmed"){
                            include('../admin/template/card/card_confirmed.php');
                        }elseif($row['cart_status']=="Requested"){
                            include('../admin/template/card/card_order.php');
                        }elseif($row['cart_status']=="Rejected"){
                            include('../admin/template/card/card_cancel.php');
                        }

                    }
                    ?>
                        
                    </div>
                </div>  