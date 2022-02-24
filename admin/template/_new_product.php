                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <br>
                            <h5 style="color: #5D6D7E;">New Product (<?= $count_pro_new?>)</h5>
                            <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    <?php 
	
                       foreach ($pro_new as $row){

                        include('../admin/template/_product.php');
  
                    
                      }

                    ?>

                        
                    </div>
                </div>  
