        <!-- Start Modal HTML -->
        <!-- <div id="addEmployeeModal" class="modal fade"> -->


        <?php
          include('./backend/count-cart.php');

          ?>
          
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="menu-header">
                  <a href="./index.php"><img src="./assets/logos/ssnshop.gif" class="logo"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>

                <div class="menu-profile">
                  <div class="menu-box-pf">
                    <img src="./assets/profile/pf.jpg" alt="">
                  </div>
                  <div class="menu-name">
                    <div class="d-flex">
                      <h6><?php echo $fetch_info['name'] ?> /#<?php echo $fetch_info['user_id'] ?></h6>
             
                     </div>
                    
                    <!-- <div><a href="#">Sing Up / Login</a></div> -->
                  </div>
                </div>

                <div class="menu-btn">

                  <a href="#address" data-toggle="modal">
                    <button class="btn">
                      <i class="material-icons color-item" style="font-size: 25px;" >manage_accounts</i>
                    </button>
              
                    <span class="menu-text">Address</span>
                  </a>

                  <a href="./favorite.php">
                    <button class="btn">
                      <i class="material-icons color-item" style="font-size: 25px;" >favorite_border</i>
                    </button>
                    <span class="menu-text">Favorites</span>
                  </a>

                  <a href="./order.php">

                        <?php
                                
                                if($count_order>0){
                                  echo '

                                  <button class="btn">
                                  <i class="material-icons color-item" style="font-size: 25px;" >assignment</i>
                                </button>
                                <span class="menu-text">Orders</span>
                                <div class="menu-number">
                                <b>'.$count_order.'</b>
                                </div>

                                  ';
                                }else{
                                  echo '
                                  
                                  <button class="btn">
                                  <i class="material-icons color-item" style="font-size: 25px;" >assignment</i>
                                </button>
                                <span class="menu-text">Orders</span>
                                <div class="">
                                <b></b>
                                </div>
                                
                                  ';
                                }
                            ?>
                  </a>

                  <a href="./cart.php">
                        <?php
                          
                            if($count_cart>0){
                              echo '
                              <button class="btn">
                              <i class="material-icons color-item" style="font-size: 25px;" >shopping_bag</i>
                            </button>
                            <span class="menu-text">Carts</span>
                            <div class="menu-number">
                            <b>'.$count_cart.'</b>
                            </div>

                              ';
                            }else{
                              echo '
                              <button class="btn">
                              <i class="material-icons color-item" style="font-size: 25px;" >shopping_bag</i>
                            </button>
                            <span class="menu-text">Carts</span>
                            <div class="">
                            <b></b>
                            </div>
                              ';
                            }
                        ?>
   
                  </a>

                  <a href="./whistlist.php">
                    <button class="btn">
                      <i class="material-icons color-item" style="font-size: 25px;" >receipt_long</i>
                    </button>
                    <span class="menu-text">Whist List</span>
                  </a>

                  <hr class="m-3">

                  <div class="menu-info">
                    <a href="./teams.php">
                      <button class="btn">
                        <i class="material-icons" style="font-size: 22px;" >help_outline</i>
                      </button>
                      <span class="menu-text">Help Center</span>
                    </a>
            
                    <a href="./teams.php">
                      <button class="btn">
                        <i class="material-icons" style="font-size: 22px;" >copyright</i>
                      </button>
                      <span class="menu-text">Teams & Conditions / Privacy</span>
                    </a>
            
                    <a href="./login/logout-user.php">
                      <button class="btn">
                        <i class="material-icons" style="font-size: 22px;" >logout</i>
                      </button>
                      <span class="menu-text">Logout</span>
                    </a>
                  </div>

                  

                </div>
                

                <br class="m-1">
              </div>
            </div>
          </div>
        <!-- End Modal HTML -->