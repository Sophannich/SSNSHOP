<?php 

/* include _header.php */ 
include("./header.php");
/* !include _header.php */ 
require('./backend/order.php');

?>


<!-- Start Header -->
    <header id="header">
      <table class="table text-center table-borderless">
        <thead></thead>
        <tbody>
          <tr>
            <td>

              <div class=" d-flex"> 
                <a href="#" onclick="goBack()" <i class="material-icons color-item" style="font-size: 26px; cursor: pointer; text-decoration: none;" >keyboard_backspace</i></a>
                <span class="header-title">Orders</span>
                
                <script>
                  function goBack() {
                  window.history.back();
                  }
                </script>
                
              </div>
              
            </td>
            

            <td class="text-right py-2">
             <a href="./search.php">
                    <button class="btn_icon">
                        <i class="material-icons color-item" style="font-size: 22px;" >search</i>
                    </button>
                </a>

                <a href="./index.php">
                    <button class="btn_icon">
                    <i class="material-icons color-item" style="font-size: 22px;" >home</i>
                  </button></a>
                  
                  <a href="./cart.php">
                        <button class="btn_icon">
                        <i class="material-icons color-item" style="font-size: 22px;" >shopping_bag</i>
                        <?php
                            include('./backend/count-cart.php');
                                if($count_cart>0){
                                echo '<div class="menu_number" >
                                <b>'.$count_cart.'</b>
                                </div>';
                                }else{
                                echo '<div class="" >
                                <b></b>
                                </div>';
                                }
                            ?>
                        </button>
                </a>
            </td>
          </tr>

        </tbody>
      </table>
    </header>
<!-- End Header -->


    <!-- Start Order Show -->
        <div id="cart-site" class="container">
            <br>
            <div class=" cart-cart-header">
                <div class="cart-cart-title bg-color-item">
                <h5>Ordered &nbsp;&nbsp;<i class="material-icons " style="font-size: 25px; position: absolute;" >assignment</i></h5>
                </div>
            
            <br>
            <div class="row">
                <!-- Start Cart Item  -->
                <div class="col-sm-10">
                <div class="container">
                    <?php foreach ($resultordered as $row){   ?>    
                        <div class="row">
                            <div class="col-sm-3">
                            <a href="./product-detail.php?pro_id=<?= $row['pro_id']?? "#" ; ?>"><img src="<?= $row['img1']?? "#" ; ?>" alt="<?= $row['cart_id']?? "#" ; ?>" class="img-fluid"></a>
                                
                            </div>
                            <div class="col-sm-5">
                                <br>
                                <h5 class="font-baloo font-size-20"><?= $row['pro_name']?? "#" ; ?> <small class="font-size-12">By <?= $row['pro_brand']?? "#" ; ?></small></h5>
                            
                                <h6>Detail</h6>
                                <span class="multi-line"><?= $row['detail']?? "#" ; ?></span>
                                <!-- Product qty-->
                                <div class="qty cart-qty">
                                    <div class="cart-cart-btn border" >
                                    <button class="qty-up cart-btn border-right" data-id="<?= $row['pro_id']?? "#" ; ?>" disabled><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty_input px-1 cart-btn font-baloo" disabled value="<?= $row['qty']?? "#" ; ?>" placeholder="1">
                                    <button data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty-down cart-btn border-left" disabled><i class="fas fa-angle-down"></i> </button>
                                    </div>

                                    <div class="d-block disable" style="margin-left: 20px;" >
                                        <button type="submit" class="btn border font-baloo text-success px-2 border-right ">Ordered</button>
                                        <img src="https://www.bing.com/th/id/OGC.d42873404debcfc7813d8fe041348b50?pid=1.7&rurl=https%3a%2f%2fgifimage.net%2fwp-content%2fuploads%2f2018%2f04%2fprocessing-gif-5.gif&ehk=2KUkzdWhi1VhygK4PXdwoxpQxPCspHLVEphHPhkVfu8%3d" alt="" class="img-fluid img-grid w-50">
                                    </div>

                                </div>
                                <!-- !Product qty-->      
                                
                            </div>

                            <div class="col-sm-2">
                                <br>
                                <div class="">
                                <div class="row">
                                    <div class="col">
                                    Price : 
                                    <h6 class="text-danger font-size-18 border-bottom">$<?= $row['price']?? "#" ; ?></h6>
                                    </div>

                                    <div class="col">
                                    Discount :
                                    <h6 class="text-danger font-size-16 border-bottom"><?= $row['discount']?? "#" ; ?>%</h6>
                                    </div>

                                    <div class="col">
                                    Total :
                                    <h6 class="text-danger font-size-18 border-bottom">$<?= $row['total']?? "#" ; ?></span>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <br>
                                <div class="">
                                <div class="row">
                                    <div class="col">
                                   <b>Order ID : </b>
                                    <h6 class=" border-bottom text-black-50"><?= $row['order_id']?? "#" ; ?></h6>
                                    </div>

                                    <div class="col">
                                    <b> Order Date :</b>
                                    <h6 class="font-size-14 border-bottom text-black-50"><?= $row['date_order']?? "#" ; ?></h6>
                                    </div>


                                    
                                </div>
                                </div>
                            </div>

                            

                        </div>
                        <hr>
                    <?php } ?>
                    
                </div>

                </div>
                <!-- End Cart Item  -->

      
                
            </div>
            </div>
        
        </div>
    <!-- End Order Show -->
    <br>
<hr>
    <br>
        <!-- Start Past Order Show -->
        <div id="cart-site" class="container">
            <br>
            <div class=" cart-cart-header">
                <div class="cart-cart-title btn-success">
                <h5>Past Orders &nbsp;&nbsp;<i class="material-icons " style="font-size: 25px; position: absolute;" >assignment_turned_in</i></h5>
                </div>
            
            <br>
            <div class="row">
                <!-- Start Cart Item  -->
                <div class="col-sm-10">
                <div class="container">
                <?php foreach ($resultpastorder as $row){   ?>
                    <div class="row">
                        <div class="col-sm-2">
                        <a href="./product-detail.php?pro_id=<?= $row['pro_id']?? "#" ; ?>"><img src="<?= $row['img1']?? "#" ; ?>" alt="<?= $row['cart_id']?? "#" ; ?>" class="img-fluid"></a>
                        </div>
                        <div class="col-sm-5">
                            <br>
                            <h5 class="font-baloo font-size-20"><?= $row['pro_name']?? "#" ; ?> <small class="font-size-12">By <?= $row['pro_brand']?? "#" ; ?></small></h5>
                        
                            <h6>Detail</h6>
                            <span class="multi-line"><?= $row['detail']?? "#" ; ?></span>
                            <!-- Product qty-->
                            <div class="qty cart-qty">
                                <div class="cart-cart-btn border" >
                                <button class="qty-up cart-btn border-right" data-id="<?= $row['pro_id']?? "#" ; ?>" disabled><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty_input px-1 cart-btn font-baloo" disabled value="<?= $row['qty']?? "#" ; ?>" placeholder="1">
                                <button data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty-down cart-btn border-left" disabled><i class="fas fa-angle-down"></i> </button>
                                </div>

                                <div class="d-flex" style="margin-left: 20px;" >
                                    <a href="./product-detail.php?pro_id=<?= $row['pro_id']?? "#" ; ?>" style="text-decoration: none;">
                                        <button type="submit" class="btn  font-baloo btn-warning px-2 ">Reorder</button>&nbsp;&nbsp;
                                    </a>
                                    <h6 class="border-bottom text-success">Completed</h6>
                                </div>

                            </div>
                            <!-- !Product qty-->      
                            
                        </div>

                        <div class="col-sm-2">
                            <br>
                            <div class="">
                            <div class="row">
                                <div class="col">
                                Price : 
                                <h6 class="text-danger font-size-18 border-bottom">$<?= $row['price']?? "#" ; ?></h6>
                                </div>
                                <div class="col">
                                Discount :
                                <h6 class="text-danger font-size-16 border-bottom"><?= $row['discount']?? "#" ; ?>%</h6>
                                </div>
                                <div class="col">
                                Total :
                                <h6 class="text-danger font-size-18 border-bottom">$<?= $row['total']?? "#" ; ?></span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <br>
                            <div class="">
                            <div class="row">
                            <div class="col">
                                   <b>Order ID : </b>
                                    <h6 class=" border-bottom text-black-50"><?= $row['order_id']?? "#" ; ?></h6>
                                    </div>

                                    <div class="col">
                                    <b> Order Date :</b>
                                    <h6 class="font-size-12 border-bottom text-black-50"><?= $row['date_order']?? "#" ; ?></h6>
                                    </div>

                                    <div class="col">
                                    <b> Completed Date :</b>
                                    <h6 class="font-size-12 border-bottom text-black-50"><?= $row['date_completed']?? "#" ; ?></h6>
                                    </div>
                                
                            </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                <?php } ?>

                </div>

                </div>
                <!-- End Cart Item  -->

      
                
            </div>
            </div>
        
        </div>
    <!-- End Past Order Show -->



    <br>

    <div style="height: 100px;"></div>

<?php 

/* include _footer.php */ 
include("template/_footer.php");
/* !include _footer.php */ 

/* include footer.php */ 
include("./footer.php");
/* !include footer.php */ 

?>