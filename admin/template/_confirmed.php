                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br><br>
                    <div class="mb-4">
                            <br>
                            <h5 style="color: #5D6D7E;">Confirmed (<?= $count_all_pro_confirmed?>)</h5>
                            <hr>
                            
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <?php 
	                    foreach ($pro_confirmed as $row){
                        include('../admin/template/card/card_confirmed.php');
                        }
                    ?>
                        
                    </div>
                </div>  


