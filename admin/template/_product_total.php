                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">

                        <div class="wrapper">
                            <div class="search-input ">
                                <input type="text" name="search" id="search_text" placeholder="Type Here" autofocus value="<?= $_GET['pro_detail']?? "" ; ?>">
                                <a href="#" class="icon"><i class="material-icons icon" >search</i></a>
                            </div>
                        </div>
                        <br>


                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                <h5 style="color: #5D6D7E;">Product Total (<?= $count_pro?>)</h5>
                                </div>
                                <div class="col text-right">
                                    <a href="./add_product.php">
                                        <button type="button" class="btn btn-add btn-sm">Add New </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>

                            
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    <?php 
	
                        foreach ($pro_total as $row){
                        include('../admin/template/_product.php');
                                
                        }

                    ?>

                        
                    </div>
                </div>  

