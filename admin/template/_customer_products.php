                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br><br>
                    <div class="mb-4">

                    <div class="wrapper">
                        <div class="search-input ">
                            <input type="text" name="search" id="search_text" placeholder="Order ID" autofocus value="<?= $_GET['pro_detail']?? "" ; ?>">
                            <a href="#" class="icon"><i class="material-icons icon" >search</i></a>
                        </div>
                    </div>


                            <br>
                            <h5 style="color: #5D6D7E;">Customer's Products</h5>
                            <hr>
                            
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <?php 
                        include('../admin/template/card/card_completed.php');
                        include('../admin/template/card/card_confirmed.php');
                        include('../admin/template/card/card_order.php');
                        include('../admin/template/card/card_cancel.php');

                    ?>
                        
                    </div>
                </div>  