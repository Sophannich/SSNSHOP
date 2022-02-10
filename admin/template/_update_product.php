                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <h5 style="color: #5D6D7E;">Update Product</h5>
                            <hr>
                    </div>


                    <form>
                        <div class="container">
                            <div class="row">
                                <!-- Product  -->
                                <div class="col-sm">

                                    <label class="mt-3">Product ID</label>
                                    <input required name="txtaddress" type="text" class="form-control w-50"  placeholder="Product ID" id="txt_product_id" disabled>

                                    <label for="Band Name" class="mt-3">Band Name</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Brand name" id="Band Name" >

                                    <label class="mt-3">Product Name</label>
                                    <input required name="txtaddress" type="text" class="form-control check-input"  placeholder="Product Name" id="txt_product_name" >

                                    <label class="mt-3">Price</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Price" id="txt_product_Price" >

                                    <label class="mt-3">Date In</label>
                                    <input required name="txtaddress" type="date" class="form-control" id="txt_date_in" >

                                    <label class="mt-3">Status</label>
                                    <select required class="form-control" name="txt_stock">
                                        <option></option>
                                        <option>NEW</option>
                                        <option>New</option>
                                        <option>Second</option>
                                    </select>

                                    <label class="mt-3">Category</label>
                                    <select required class="form-control" name="txt_stock">
                                        <option></option>
                                        <option>Phone</option>
                                        <option>Computer</option>
                                        <option>Accessory</option>
                                    </select>

                                </div>

                                <div class="col-sm">
                                    <label class="mt-3">Discount (%)</label>
                                    <input  name="txtaddress" type="text" class="form-control"  placeholder="Discount %" id="txt_product_discount" >

                                    <label class="mt-3">Sale Price</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Sale Price" id="txt_product_sale_price" >

                                    <label class="mt-3">Stock</label>
                                    <select required class="form-control" name="txt_stock">
                                        <option></option>
                                        <option>IN STOCK</option>
                                        <option>OUT STOCK</option>
                                    </select>

                                    <label class="mt-3">Warranty</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Warranty" id="txt_warranty" >

                                    <label class="mt-3">Rate Star</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Rate Star" id="txt_rate" >

                                    <label class="mt-3">Gift</label>
                                    <input required name="txtaddress" type="text" class="form-control"  placeholder="Gift" id="txt_rate" >

                                    <label class="mt-3">Detail</label>
                                    <textarea class="form-control" id="txt_detail" rows="5"></textarea>

                                </div>

                                <div class="col-sm">

                                    <label class="mt-3">Image 1</label>
                                    <input type="file" class="form-control " id="txt_img_1" />

                                    <label class="mt-3">Image 2</label>
                                    <input type="file" class="form-control " id="txt_img_2" />

                                    <label class="mt-3">Image 3</label>
                                    <input type="file" class="form-control " id="txt_img_3" />

                                    <label class="mt-3">Image 4</label>
                                    <input type="file" class="form-control " id="txt_img_4" />

                                    <label class="mt-3">Image 5</label>
                                    <input type="file" class="form-control " id="txt_img_5" />

                                    <label class="mt-3">Image 6</label>
                                    <input type="file" class="form-control " id="txt_img_6" />
                                        
                                    <div class="text-right">
                                    <a href="#">
                                        <button type="button" class="btn btn-new btn-sm mt-5">Clear</button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="btn btn-add btn-sm mt-5">Save</button>
                                    </a>
                                </div>

                            </div>
                            
                            </div>
                        </div>
                        
                    </form>


                        
                    </div>
                </div>  