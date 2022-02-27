                            <div class="col-xl-3  mb-3 " >
                                    <div class="border-left-completed shadow  py-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 ">
                                                <?php                                               

                                                if ( $row['img1']!=null) {
                                                        echo '
                                                        <img src="'.$row['img1'].'" alt="" class="img-brand">
                                                    ';
                                                    } else {
                                                        
                                                        echo '
                                                        <img src="https://image.mfa.go.th/mfa/r_0x740/mkKfL2iULZ/migrate_directory/media-center-20130323-155715.jpg " alt="" class="img-brand">
                                                        ';
                                                    }

                                                ?>

                                            </div>
                                            <div class="col-5 ">
                                            <small>Order  ID : <?=$row['order_id']?? "N/A";?></small><br>
                                            <small>User ID : <?=$row['user_id']?? "N/A";?></small> <br>
                                            <small>Order: <?=$row['date_order']?? "N/A";?></small><br>
                                            <small>Confirmed : <?=$row['date_confirmed']?? "N/A";?></small><br>
                                            <small>Complete : <?=$row['date_completed']?? "N/A";?></small><br>
                                            
                                            </div>

                                            <div class="col">
                            
                                            <small>Price : $<?=$row['price_cart']?? "N/A";?></small><br>
                                            <small class="one-line"><?=$row['pro_name']?? "N/A";?></small>
                                            <small>Phone : <a href="tel:<?=$row['phone']??0;?>"><?=$row['phone']?? "N/A";?></a></small> <br><br>
                                            <div class="text-left">
                                                <button type="button" class="btn btn-sm " style="color: #17A2B8; font-weight: bold;  font-size: 12px;" disabled>Completed</button>
                                            </div>
                            
                                            </div>
                                        </div>
                                    </div>
                        </div>