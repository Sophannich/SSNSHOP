                                <div class="col-xl-3  mb-3 " style="display: inline-flex;">
                                    <div class="border-left-customer shadow  py-2">
                                        <div class="row align-items-center">
                                            <div class="col-3 ">



                                            <?php                                               

                                                        if ( $row['img1']>0) {
                                                            echo '
                                                            <img src=" '.$row['img1']. ' " alt="" class="img-brand">
                                                        ';
                                                        } else {
                                                            
                                                            echo '
                                                            <img src="https://image.mfa.go.th/mfa/r_0x740/mkKfL2iULZ/migrate_directory/media-center-20130323-155715.jpg " alt="" class="img-brand">
                                                            ';
                                                        }

                                            ?>
                                                
                                            </div>
                                            <div class="col-5 ">
                                            <small>Product ID : <?=$row['pro_id']?? "N/A";?></small><br>
                                            <small>Brand : <?=$row['pro_brand']?? "N/A";?></small> <br>
                                            <small class="one-line">Product : <?=$row['pro_name']?? "N/A";?></small>
                                            <small>Date In : <?=$row['date_in']?? "N/A";?></small><br>
                                            <small>Status : <?=$row['status']?? "N/A";?></small><br>
                                            <small>Stock : <small class="ml-1 
                                            
                                            
                                                <?php 
                                                    

                                                    if ( $row['stock'] == "IN STOCK" and $row['total']>0 ) {
                                                        echo '
                                                        text-success
                                                    ';
                                                    } else {
                                                        
                                                        echo '
                                                        text-danger 
                                                        ';
                                                    }

                                                ?>
                                    
                                                "><?=$row['stock']?? "N/A";?></small>
                                            </small>
                                            
                                            </div>

                                            <div class="col">
                                                <div style="position: absolute; margin-left: 55px; " <?php echo $fetch_info['deletes'] ?>>
                                                    <a href="#delete_product<?=$row['pro_id']?? "N/A";?>" data-toggle="modal" class="btnadd">
                                                
                                                        <i class="material-icons" style="color: red;">delete</i>
                                                    </a>
                                                </div>


                                                
                                            <small>Price : $<?=$row['price']?? "N/A";?></small><br>
                                            <small>Discount : <?=$row['discount']?? "N/A";?>%</small><br>
                                            <small>Total : $<?=$row['total']?? "N/A";?></small><br><br>


                                            <form method="POST" action="./update_product.php" >
                                            <input value="<?=$row['pro_id'];?>"  type="text"  name="txt_product_id" hidden>
                                            <input  value="<?=$row['pro_brand'];?>" hidden type="text" name="txt_brand_name" >
                                                <input  value="<?=$row['pro_name'];?>" hidden type="text" name="txt_product_name" >
                                                <input  value="<?php echo $row['price']; ?>" hidden type="number" name="txt_product_Price" >
                                                <?php $date = "25-06-1996"; $newDate = date("Y-m-d", strtotime($row['date_in'])); ?>     
                                                <input  value="<?php echo date($newDate);?>" hidden  type="date" name="txt_date_in" >
                                                <input  value="<?=$row['status'];?>" hidden type="text" name="txt_status" >
                                                <input  value="<?=$row['category'];?>" hidden type="text" name="txt_category" >
                                                <input  value="<?=$row['discount'];?>" hidden type="number"  name="txt_product_discount" >
                                                <input value="<?=$row['total'];?>" hidden type="text" name="txt_price" >
                                                <input value="<?=$row['stock'];?>" hidden type="text" name="txt_stock" >
                                                <input value="<?=$row['warranty'];?>" hidden type="text" name="txt_warranty" >
                                                <input value="<?php echo $row['pro_rate'];?>" hidden type="number" name="txt_rate_star" >
                                                <input  value="<?=$row['gift'];?>" hidden type="text" name="txt_gift" >
                                                <textarea name="txt_detail" hidden rows="5"><?=$row['detail'];?></textarea>
                                                <input value="<?=$row['img1'];?>" hidden type="text" name="txt_img_1" />
                                                <input value="<?=$row['img2'];?>" hidden type="text" name="txt_img_2" />
                                                <input value="<?=$row['img3'];?>" hidden type="text" name="txt_img_3" />
                                                <input value="<?=$row['img4'];?>" hidden type="text" name="txt_img_4" />
                                                <input value="<?=$row['img5'];?>" hidden type="text" name="txt_img_5" />
                                                <input value="<?=$row['img6'];?>" hidden type="text" name="txt_img_6" />

                                            <button class="btn btn-complete  btn-sm" <?php echo $fetch_info['updates'] ?>>
                                            Update
                                            </button>

                                            </form>
                                            

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                


