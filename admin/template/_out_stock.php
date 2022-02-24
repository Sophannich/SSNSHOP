                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <br>
                            <h5 style="color: #5D6D7E;">Out Stock (<?= $count_pro_out?>)</h5>
                            <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    <?php 
                      foreach ($pro_out_stock as $row){

                      include('../admin/template/_product.php');

                      }
                    ?>

                        
                    </div>
                </div>  


