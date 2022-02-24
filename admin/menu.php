        <!-- Menu -->
        <div id="mainmenu" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="logo"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>

                <div class="menu-profile">
                  <div class="menu-box-pf">
                  
                          <img src="../assets/profile/p-male.jpg" alt="">
                          <p class="ml-2 mt-1 text-white"><?php echo $fetch_info['position'] ?></p>

                  </div>
                  <div class="menu-name">
                    <div class="d-flex">
                    
                      <h6><?php echo $fetch_info['name'] ?> / #<?php echo $fetch_info['id'] ?></h6> 
             
                     </div>
                    
                    <!-- <div><a href="#">Sing Up / Login</a></div> -->
                  </div>
                </div>

                <div class="menu-btn">

                  <a href="#changepw" data-toggle="modal">
                    <button class="btn">
                      <i class="material-icons color-item" style="font-size: 25px;" >vpn_key</i>
                    </button>
              
                    <span class="menu-text">Change Password</span>
                  </a>

                  <a href="./users.php" <?php echo $fetch_info['create_user'] ?>>
                    <button class="btn">
                      <i class="material-icons color-item" style="font-size: 25px;" >manage_accounts</i>
                    </button>
                    <span class="menu-text">Manage User</span>
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




         <!-- Change Password Modal HTML -->

      <div id="changepw" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
              <form method="POST" action="./../admin/backend/update_user.php" class="m-2">
                <br>
                
                <label for="validationCustom01" class="mt-3">User ID</label>
                <input type="text" class="form-control"  placeholder="User ID" id="validationCustom01"  value="<?php echo $fetch_info['id'] ?>" name="txt_user_id1" disabled>
                <input required type="text" class="form-control w-50"  placeholder="User ID" id="validationCustom01"  value="<?php echo $fetch_info['id'] ?>" name="txt_user_id" hidden >
          
                <label for="validationCustom01" class="mt-3">Username</label>
                <input required value="<?php echo $fetch_info['name'] ?>" name="txtusername" type="text" class="form-control"  placeholder="Username" id="validationCustom01" >
 
                <label for="validationCustom02" class="mt-3">Email</label>
                <input value="<?php echo $fetch_info['email'] ?>" name="txtemail" type="text" class="form-control"  placeholder="Email" id="validationCustom02" disabled >


                <label for="validationCustom03" class="mt-3">Password</label>
                <input name="txtpassword" type="Password" class="form-control"  placeholder="Password" id="validationCustom03" ><br>


                                      
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">
                                                  <span class="glyphicon glyphicon-remove"></span> Cancel
                                              </button>

                                              <button type="submit" class="btn btn-primary" >
                                                  <span class="glyphicon glyphicon-floppy-disk"> </span> Save
                                              </button>



                                            

                                              
                                          </div>

                </form>
                <br class="m-1">
              </div>
            </div>
          </div>
        <!-- End Modal HTML -->