<div class="col-xl-3  mb-3 " >
                                    <div class="border-left-comfirmed shadow  py-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 ">
                                            <?php                                               

                                                if ( $row['img1']>0) {
                                                    echo '
                                                    <img src=" '.$row['img1']. ' " alt="" class="img-brand">
                                                ';
                                                } else {
                                                    
                                                    echo '
                                                    <img src="https://image.mfa.go.th/mfa/r_0x740/mkKfL2iULZ/migrate_directory/media-center-20130323-155715.jpg " alt="" class="img-brand ">
                                                    ';
                                                }

                                              ?>
                                            </div>
                                            <div class="col-5 ">
                                            <small>Order  ID :<?=$row['order_id']?? "N/A";?></small><br>
                                            <small>User ID :<?=$row['user_id']?? "N/A";?></small> <br>
                                            <small>Order: <?=$row['date_order']?? "N/A";?></small><br>
                                            <small>Confirmed : <?=$row['date_confirmed']?? "N/A";?></small><br>
                                            
                                            </div>

                                            <div class="col">
                                                
                                            <small>Price : $<?=$row['price_cart']?? "N/A";?></small><br>
                                            <small class="one-line"><?=$row['pro_name']?? "N/A";?></small>
                                            <small>Phone : <a href="tel:<?=$row['phone']??0;?>"><?=$row['phone']?? "N/A";?></a></small> <br><br>
                                            
                                            <a href="#completed<?=$row['cart_id']?? "N/A";?>" data-toggle="modal">
                                            <button type="button" class="btn btn-complete  btn-sm" <?php echo $fetch_info['complete'] ?>>Complete</button>
                                            </a>
                        
                                            </div>
                                        </div>
                                    </div>
                        </div>


     <!-- Completed product -->
         <div id="completed<?=$row['cart_id']?? "N/A";?>" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="logo"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
            <br>


          <div class="container">
              <div class="card" style="width: 18rem;">
                <div class="w-50">
                <?php                                               

                    if ( $row['img1']>0) {
                        echo '
                        <img src=" '.$row['img1']. ' " alt="" class="img-brand">
                    ';
                    } else {
                        
                        echo '
                        <img src="https://image.mfa.go.th/mfa/r_0x740/mkKfL2iULZ/migrate_directory/media-center-20130323-155715.jpg " alt="" class="img-brand ">
                        ';
                    }

                ?>

                </div>
                  <div class="ml-3">
                    <b class="card-text">Order ID : <?=$row['order_id']?? "N/A";?></b><br>
                    <b class="card-text">User ID : <?=$row['user_id']?? "N/A";?></b><br>
                    <b class="card-text">Username : <?=$row['name']?? "N/A";?></b><br>
                    <b class="card-text"> Date : <?=$row['date_order']?? "N/A";?></b><br>
                    <b>Phone : <a href="tel:<?=$row['phone']??0;?>"><?=$row['phone']?? "N/A";?></a></b> <br><br>
                    <b class="one-line"><?=$row['pro_name']?? "N/A";?></b>
                    <b class="card-text"> Price : $<?=$row['price']?? "N/A";?></b><br>
                    <b class="card-text"> Discount : <?=$row['discount']?? "N/A";?> %</b><br>
                    <b class="card-text"> Amount : $<?=$row['total']?? "N/A";?></b><br>
                    
                  </div>
                <br><br>
              </div>
          </div>
          

          

            <br>   <br> 
            <form method="POST" action="./../admin/backend/complete_pro.php">
                <input type="text" value="<?=$row['cart_id']?>" name="txt_cart_id" hidden>
                <div class="card-body text-right">
                  <button class="btn btn-primary">Complete</button>
                </div>
            </form>

              </div>
            </div>
          </div>
    <!-- End Modal HTML -->                       