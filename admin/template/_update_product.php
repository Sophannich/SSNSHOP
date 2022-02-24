<?php
$pro_id=$_POST['txt_product_id'];
$pro_brand=$_POST['txt_brand_name'];
$pro_name=$_POST['txt_product_name'];
$price=$_POST['txt_product_Price'];
$date_in=$_POST['txt_date_in'];
$status=$_POST['txt_status'];
$category=$_POST['txt_category'];
$discount=$_POST['txt_product_discount'];
$totals=$_POST['txt_price'];
$stock=$_POST['txt_stock'];
$warranty=$_POST['txt_warranty'];
$pro_rate=$_POST['txt_rate_star'];
$gift=$_POST['txt_gift'];
$detail=$_POST['txt_detail'];
$img1=$_POST['txt_img_1'];
$img2=$_POST['txt_img_2'];
$img3=$_POST['txt_img_3'];
$img4=$_POST['txt_img_4'];
$img5=$_POST['txt_img_5'];
$img6=$_POST['txt_img_6'];

?>
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <h5 style="color: #5D6D7E;">Update Product (<?=$count_pro?>)</h5>
                            <hr>
                    </div>


                    <form method="POST" action="../admin/backend/update_product.php">
                        <div class="container">
                            <div class="row">
                                <!-- Product  -->
                                <div class="col-sm">

                                    <label  class="mt-3">Product ID</label>
                                    <input value="<?=$pro_id?? "N/A";?>" required  type="text" class="form-control w-50"  placeholder="Product ID" name="txt_product_id" >

                                    <label for="Band Name" class="mt-3">Band Name</label>
                                    <input value="<?=$pro_brand?? "N/A";?>" required  type="text" class="form-control"  placeholder="Brand name" name="txt_brand_name" >

                                    <label class="mt-3">Product Name</label>
                                    <input value="<?=$pro_name?? "N/A";?>" required  type="text" class="form-control check-input"  placeholder="Product Name" name="txt_product_name" >

                                    <label class="mt-3">Price $</label>
                                    <input value="<?=$price?? "N/A";?>" required  type="number" class="form-control"  placeholder="Price" name="txt_product_Price" >

                                    <label class="mt-3">Date In</label>
                                    <input value="<?=$date_in?? "N/A";?>" required  type="date" class="form-control" name="txt_date_in" >

                                    <label class="mt-3">Status</label>
                                    <select required class="form-control" name="txt_status">
                                        <option ><?=$status?? "N/A";?></option>
                                        <option>Just Arrived</option>
                                        <option>New</option>
                                        <option>Second</option>
                                    </select>

                                    <label class="mt-3">Category</label>
                                    <select required class="form-control" name="txt_category">
                                        <option><?=$category?? "N/A";?></option>
                                        <option>Phone</option>
                                        <option>Computer</option>
                                        <option>Accessory</option>
                                    </select>

                                </div>

                                <div class="col-sm">
                                    <label class="mt-3">Discount (%)</label>

                                    <div class="row">
                                        <div class="col">
                                            <input value="<?=$discount?? "N/A";?>"  type="number" class="form-control"  placeholder="Discount %" name="txt_product_discount" >
                                        </div>
                                        <div class="col">
                                            <input type="button" class="btn btn-new btn-sm" value="Calculate" onclick="calcSum()">
                                        </div>

                                        <script>
                                            function calcSum() {
                                                let num1 = document.getElementsByName("txt_product_Price")[0].value;
                                                let num2 = document.getElementsByName("txt_product_discount")[0].value;
                                                let sum1 = Number(num1) * Number(num2)/100;
                                                let sum= Number(num1)-sum1;
                                                document.getElementsByName("txt_price1")[0].value = sum;
                                                document.getElementsByName("txt_price")[0].value = sum;
                                            }
                                        </script>

                                    </div>
                                    

                                    <label class="mt-3">Sale Price $</label>
                                    <input value="<?=$totals?? "N/A";?>" required type="text" class="form-control"  placeholder="Sale Price" name="txt_price1" disabled>
                                    <input value="<?=$totals?? "N/A";?>" required type="text" class="form-control"  placeholder="Sale Price" name="txt_price" hidden>

                                    <label class="mt-3">Stock</label>
                                    <select required class="form-control" name="txt_stock">
                                        <option><?=$stock?? "N/A" ; ?></option>
                                        <option>IN STOCK</option>
                                        <option>OUT STOCK</option>
                                    </select>

                                    <label class="mt-3">Warranty</label>
                                    <input value="<?=$warranty?? "N/A";?>" required type="text" class="form-control"  placeholder="Warranty" name="txt_warranty" >

                                    <label class="mt-3">Rate Star</label>
                                    <input value="<?=$pro_rate?? "N/A";?>"  type="number" class="form-control"  placeholder="Rate Star" name="txt_rate_star" >

                                    <label class="mt-3">Gift</label>
                                    <input value="<?=$gift?? "N/A";?>"  type="text" class="form-control"  placeholder="Gift" name="txt_gift" >

                                    <label class="mt-3">Detail</label>
                                    <textarea class="form-control" name="txt_detail" rows="5"><?=$detail?? "N/A";?></textarea>

                                </div>

                                <div class="col-sm">

                                    <label class="mt-3">Image 1</label>
                                    <input value="<?=$img1??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_1" />

                                    <label class="mt-3">Image 2</label>
                                    <input value="<?=$img2??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_2" />

                                    <label class="mt-3">Image 3</label>
                                    <input value="<?=$img3??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_3" />

                                    <label class="mt-3">Image 4</label>
                                    <input value="<?=$img4??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_4" />

                                    <label class="mt-3">Image 5</label>
                                    <input value="<?=$img5??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_5" />

                                    <label class="mt-3">Image 6</label>
                                    <input value="<?=$img6??"N/A";?>" type="text" class="form-control " placeholder="Link address image" name="txt_img_6" />
                                        
                                    <div class="text-right">

                                        <button type="submit" class="btn btn-add btn-sm mt-5">SAVE</button>
                           
                                </div>

                            </div>
                            
                            </div>
                        </div>
                        
                    </form>


                        
                    </div>
                </div>  

