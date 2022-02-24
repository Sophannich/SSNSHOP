                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">

                            <br>
                            <h5 style="color: #5D6D7E;">Cancelled (<?= $count_all_pro_cancelled?>)</h5>
                            <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                        <?php          
	
                            foreach ($pro_cancel as $row){
                            include('../admin/template/card/card_cancel.php');
                                 }
                        ?>

                        
                    </div>
                </div>  


