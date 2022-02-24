<?php require_once "./login/controllerUserData.php"; ?>
<?php 

$email = $_SESSION['email_admin'];
$password = $_SESSION['password_admin'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admintable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
    }
}else{

    header('Location: ./login/login-user.php');
}
?>

<?php
include('header.php');
$home=1;
include('../admin/template/_header.php');

?>






                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                        <h5 style="color: #5D6D7E;">Dashboard</h5>
                        <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        
                        <div class="col-xl-3  mb-3">
                            <a href="./completed.php">
                                <div class="border-left-completed shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">Completed
                                                    </div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold "><?= $count_all_pro_completed?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                <i class="material-icons" >verified</i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3  mb-3" <?php echo $fetch_info['confirm']?? "hidden"; ?>>
                            <a href="./confirmed.php">
                                <div class="border-left-comfirmed shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold text-uppercase mb-1">Confirmed
                                                    </div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold "><?= $count_all_pro_confirmed?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                <i class="material-icons" >check_circle_outline</i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </a>
                        </div>

                        
                        <div class="col-xl-3  mb-3" <?php echo $fetch_info['request']?? "hidden";  ?>>
                            <a href="./order.php">
                                <div class="border-left-request shadow  py-2">
                                    <div class="card-body">
                                        <div class="row  align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">Request Order</div>
                                                <div class="h5 mb-0 font-weight-bold "><?= $count_all_pro_requested?></div>
                                            </div>
                                            <div class="col-auto">     
                                                <i class="material-icons" >hourglass_bottom</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
  
                        <div class="col-xl-3  mb-3">
                            <a href="./cancel.php">
                                <div class="border-left-cancel shadow  py-2">
                                    <div class="card-body">
                                        <div class="row  align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">
                                                    Cancelled</div>
                                                <div class="h5 mb-0 font-weight-bold "><?= $count_all_pro_cancelled?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons" >do_not_disturb_on</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3  mb-3 " >
                            <a href="./customers.php">
                                    <div class=" border-left-customer shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold text-uppercase mb-1">
                                                        Customers</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_all_user?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="material-icons" >badge</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </a>
                        </div>

                        <div class="col-xl-3  mb-3 " <?php echo $fetch_info['cus_pro']?? "hidden";  ?>>
                            <a href="./customer_products.php">
                                    <div class="border-left-customer-product shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold text-uppercase mb-1">
                                                        Customer's Products </div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_all_pro_cus?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="material-icons" >inventory_2</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </a>
                        </div>
               
                    </div>   

                    <br>
                    <div class="mb-4">
                        <h5 style="color: #5D6D7E;">Products</h5>
                        <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-3  mb-3" <?php echo $fetch_info['add_pro']?? "hidden";  ?>>
                            <a href="./add_product.php">
                                    <div class="border-left-paid shadow  py-2">
                                    <div class="card-body">
                                        <div class="row  align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">
                                                    Add Product </div>
                                                <div class="h5 mb-0 font-weight-bold "><span class="ml-1">(Add stock)</span></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons" >add_circle_outline</i>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </a>
                        </div>

                        <div class="col-xl-3  mb-3 " <?php echo $fetch_info['total_pro']?? "hidden";  ?>>
                            <a href="./product_total.php">
                                    <div class="border-left-order  shadow  py-2">
                                    <div class="card-body">
                                        <div class="row  align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">
                                                    Total (Products)</div>
                                                <div class="h5 mb-0 font-weight-bold "><?= $count_pro?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons" >style</i>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </a>
                        </div>   

                        <!-- <div class="col-xl-3  mb-3">
                                <div class="border-left-info shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold text-info text-uppercase mb-1">Tasks Order</div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold ">50%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="material-icons" >insights</i>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div> -->

                            <div class="col-xl-3  mb-3" >
                                <a href="./out_stock.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                        Out Stock</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_out?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >remove_shopping_cart</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3  mb-3">
                                <a href="./just_arrived.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                        Just Arrived</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_just?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >archive</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3  mb-3">
                                <a href="./new_product.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                        New Product</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_new?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >done_all</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3  mb-3">
                                <a href="./second_had.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                        Second Hand</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_second?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >published_with_changes</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3  mb-3" <?php echo $fetch_info['banner']?? "hidden";  ?>>
                                <a href="./banner_area.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                    Banner</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_second?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >collections</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3  mb-3" <?php echo $fetch_info['brand']?? "hidden";  ?>>
                                <a href="./brand.php">
                                    <div class="border-left shadow  py-2">
                                        <div class="card-body">
                                            <div class="row  align-items-center">
                                                <div class="col mr-2">
                                                    <div class=" font-weight-bold  text-uppercase mb-1">
                                                    Brand</div>
                                                    <div class="h5 mb-0 font-weight-bold "><?= $count_pro_second?></div>
                                                </div>
                                                <div class="col-auto">     
                                                    <i class="material-icons" >add_photo_alternate</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>




                        </div>   
                    </div>
                </div>

                


<?php
include('../footer.php');
?>

<!-- 
<div style="height: 200px;">
</div> -->
