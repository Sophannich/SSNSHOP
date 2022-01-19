<?php 

/* include _header.php */ 
include("./header.php");
/* !include _header.php */ 
require('./backend/whistlist.php');

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
                <span class="header-title">Whist List</span>
                
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
                  
                  <a href="./favorite.php">
                    <button class="btn_icon">
                      <i class="material-icons color-item" style="font-size: 22px;" >favorite_border</i>
                      <!-- <div class="menu_number" >
                      <b>12</b>
                      </div> -->
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
                <div class="cart-cart-title bg-color-item">
                <h5>Your Whist List</h5>
                </div>  
                      <br>

                      <div class="row">
                          <!-- Start Cart Item  -->
                          <div class="col-sm-10">
                          <div class="container">
                 <?php foreach ($resultlist as $row){   ?>                 
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
                                    <button class="qty-up cart-btn border-right" data-id="<?= $row['pro_id']?? "#" ; ?>"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty_input px-1 cart-btn font-baloo" disabled value="<?= $row['qty']?? "#" ; ?>" placeholder="1">
                                    <button data-id="<?= $row['pro_id']?? "#" ; ?>" class="qty-down cart-btn border-left"><i class="fas fa-angle-down"></i> </button>
                                    </div>

                                          <div class="d-block " style="margin-left: 20px;">
                                              <button type="submit" class="btn border font-baloo btn-danger px-2 border-right">
                                                <a href="./backend/de-cart.php?cart_id=<?php echo $row['cart_id']; ?>" class="text-white"> Delete </a>
                                              </button>
                                              
                                              <button type="submit" class="btn border font-baloo btn-warning px-2 border-right">
                                                  <a href="./backend/remove-whistlist.php?cart_id=<?php echo $row['cart_id']; ?>" class="text-white"> Add to cart </a>
                                              </button>

                                              <!-- <button type="submit" class="btn border btn-warning font-baloo px-2">Add to cart</button> -->



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