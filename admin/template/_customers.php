                <!-- Begin Page Content -->
                <div class="container-fluid">
                
                    <div class="mb-4">
                          
                            <h5 style="color: #5D6D7E;">Customer's Information (<?= $count_all_user?>)</h5>
                            <hr>
                            
                    </div>

                    <!-- Content Row -->
                    <div class="row" >

                    <?php 
                        foreach ($cus_all as $row){
                        include('../admin/template/card/card_customers.php');
                        }
                    ?>
                        
                    </div>
                </div>  