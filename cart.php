<?php 

/* include _header.php */ 
include("./header.php");
/* !include _header.php */ 
require('./backend/cart.php');
include('./backend/count-cart.php');



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
                <span class="header-title">Carts</span>
                
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
                  
                  <a href="./order.php">
                    <button class="btn_icon">
                      <i class="material-icons color-item" style="font-size: 22px;" >assignment</i>
                      <?php
                        include('./backend/count-cart.php');
                            if($count_order>0){
                              echo '<div class="menu_number" >
                              <b>'.$count_order.'</b>
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


    <!-- Start Cart Show -->
        <div id="cart-site" class="container">
            <br>
            <div class=" cart-cart-header">
                <div class="cart-cart-title bg-color-item ">
                <h5>Your carts</h5>
                </div>
            
            <br>

            <div class="row">
                <!-- Start Cart Item  -->
                <div class="col-sm-8">
                <div class="container">

                <?php foreach ($resultcart as $row){   ?>
                    <div class="row">
                            <div class="col-sm-3">
                                <a href="./product-detail.php?pro_id=<?= $row['pro_id']?? "#" ; ?>"><img src="<?= $row['img1']?? "#" ; ?>" alt="cart1" class="img-fluid"></a>
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <h5 class="font-baloo font-size-20"><?= $row['pro_name']?? "#" ; ?> <small class="font-size-12"> By <?= $row['pro_brand']?? "#" ; ?></small></h5>
                            
                                <h6>Detail</h6>
                                <span class="multi-line"><?= $row['detail']?? "#" ; ?></span>
                                <!-- Product qty-->
                                <div class="qty cart-qty">
                                    <div class="cart-cart-btn border">
                                    <button disabled class="qty-up cart-btn border-right" data-id="<?= $row['pro_id']?? "#" ; ?>"><i class="fas fa-angle-up" ></i></button>
                                    <input type="text" data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty_input px-1 cart-btn font-baloo" disabled value="<?= $row['qty']?? "#" ; ?>" placeholder="1">
                                    <button disabled data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty-down cart-btn border-left"><i class="fas fa-angle-down" ></i> </button>
                                    </div>

                                    <div class="d-block " style="margin-left: 50px;">
                                        <button type="submit" class="btn border font-baloo btn-danger px-2 border-right">
                                            <a href="./backend/de-cart.php?cart_id=<?php echo $row['cart_id']; ?>" class="text-white"> Delete </a>
                                        </button>
                                        <button type="submit" class="btn border font-baloo btn-primary px-2 border-right">
                                            <a href="./backend/add-whistlist.php?cart_id=<?php echo $row['cart_id']; ?>" class="text-white"> Later </a>
                                        </button>

                                        




                                        
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
                    </div>
                    <hr>




                    
                <?php } ?>
                    

            

                

                    <div style="height: 100px;"></div>
                </div>

                </div>
                <!-- End Cart Item  -->

                
                
                <!-- Start Cart Total -->
                <div class="col-sm-4 pr-4 pl-4">
                    <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3 text-50">Your order eligible for FREE Delivery. <i class="fas fa-check"></i></h6>
                    <div class="border-top py-4 text-center ">
                        <h5 class="font-baloo" style="font-size: 24px;">Your  number <span class="color-second " > <?php echo $fetch_info['phone_number'] ?></span></h5>
                        <h5 class="font-baloo" style="font-size: 24px;">Subtotal <span class="color-second " ><?= $count_cart ?><span class="text-dark font-size-20"> items</span></span></h5>
                        
                        <span class="text-danger" style="font-size: 24px;"> $ <span class=" border-bottom" id="deal-price" ><?= $sum_price?></span></span>
                        <br>

                        <form method="POST" action="./backend/cart-buy.php" >

                                <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                                <input type="text"  name="txtphone" value="<?php echo $fetch_info['phone_number'] ?>" hidden>
                                <input type="text"  name="txtprice" value="<?= $row['total']??0;?>" hidden>
                                
                                <button type="submit" class="btn btn-danger mt-4">
                                  Proceed to Buy 
                                </button>
 
                            </form>

                        



                    </div>
                    </div>
                </div>
                <!-- End Cart Total -->
                
                </div>
            </div>
        
        </div>
    <!-- End Cart Show -->



    <br>

<?php 

/* include _footer.php */ 
include("template/_footer.php");
/* !include _footer.php */ 

/* include footer.php */ 
include("./footer.php");
/* !include footer.php */ 

?>