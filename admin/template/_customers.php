                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br><br>
                    <div class="mb-4">

                    <div class="wrapper">
                        <div class="search-input ">
                            <input type="text" name="search" id="search_text" placeholder="Customer ID" autofocus value="<?= $_GET['pro_detail']?? "" ; ?>">
                            <a href="#" class="icon"><i class="material-icons icon" >search</i></a>
                        </div>
                    </div>
                    
                            <br>
                            <h5 style="color: #5D6D7E;">Customer's Information</h5>
                            <hr>
                            
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <?php 
	
                        include('../admin/template/card/card_customers.php');

                    ?>
                        
                    </div>
                </div>  