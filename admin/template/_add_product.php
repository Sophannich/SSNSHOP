                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <h5 style="color: #5D6D7E;">Add Product (<?= $count_pro?>)</h5>
                            <hr>
                    </div>


                    <form method="POST" action="../admin/backend/add_product.php">
                        <div class="container">
                            <div class="row">
                                <!-- Product  -->
                                <div class="col-sm">

                                    <label hidden class="mt-3">Product ID</label>
                                    <input required type="text" class="form-control w-50"  placeholder="Product ID" name="txt_product_id" disabled hidden>

                                    <label for="Band Name" class="mt-3">Band Name</label>
                                    <input required  type="text" class="form-control"  placeholder="Brand name" name="txt_brand_name" >

                                    <label class="mt-3">Product Name</label>
                                    <input required  type="text" class="form-control check-input"  placeholder="Product Name" name="txt_product_name" >

                                    <label class="mt-3">Price $</label>
                                    <input required  type="number" class="form-control"  placeholder="Price" name="txt_product_Price" >

                                    <label class="mt-3">Date In</label>
                                    <input required  type="date" class="form-control" name="txt_date_in" >

                                    <label class="mt-3">Status</label>
                                    <select required class="form-control" name="txt_status">
                                        <option></option>
                                        <option>Just Arrived</option>
                                        <option>New</option>
                                        <option>Second</option>
                                    </select>

                                    <label class="mt-3">Category</label>
                                    <select required class="form-control" name="txt_category">
                                        <option></option>
                                        <option>Phone</option>
                                        <option>Computer</option>
                                        <option>Accessory</option>
                                    </select>

                                </div>

                                <div class="col-sm">
                                    <label class="mt-3">Discount (%)</label>

                                    <div class="row">
                                        <div class="col">
                                            <input  type="number" class="form-control"  placeholder="Discount %" name="txt_product_discount" >
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
                                    <input required type="text" class="form-control"  placeholder="Sale Price" name="txt_price1" disabled>
                                    <input required type="text" class="form-control"  placeholder="Sale Price" name="txt_price" hidden>

                                    <label class="mt-3">Stock</label>
                                    <select required class="form-control" name="txt_stock">
                                        <option></option>
                                        <option>IN STOCK</option>
                                        <option>OUT STOCK</option>
                                    </select>

                                    <label class="mt-3">Warranty</label>
                                    <input required type="text" class="form-control"  placeholder="Warranty" name="txt_warranty" >

                                    <label class="mt-3">Rate Star</label>
                                    <input  type="number" class="form-control"  placeholder="Rate Star" name="txt_rate_star" >

                                    <label class="mt-3">Gift</label>
                                    <input  type="text" class="form-control"  placeholder="Gift" name="txt_gift" >

                                    <label class="mt-3">Detail</label>
                                    <textarea class="form-control" name="txt_detail" rows="5"></textarea>

                                </div>

                                <div class="col-sm">

                                    <label class="mt-3">Image 1</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_1" />

                                    <label class="mt-3">Image 2</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_2" />

                                    <label class="mt-3">Image 3</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_3" />

                                    <label class="mt-3">Image 4</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_4" />

                                    <label class="mt-3">Image 5</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_5" />

                                    <label class="mt-3">Image 6</label>
                                    <input type="text" class="form-control " placeholder="Link address image" name="txt_img_6" />
                                        
                                    <div class="text-right">

                                        <button type="submit" class="btn btn-add btn-sm mt-5" <?php echo $fetch_info['adds'] ?>>Add</button>
                           
                                </div>

                            </div>
                            
                            </div>
                        </div>
                        
                    </form>


                        
                    </div>
                </div>  

