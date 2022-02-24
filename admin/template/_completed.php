                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <br>
                            <h5 style="color: #5D6D7E;">Completed (<?= $count_all_pro_completed?>)</h5>
                            <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    <?php 
	                    foreach ($pro_completed as $row){
                        include('../admin/template/card/card_completed.php');
                        }
                    ?>


                        
                    </div>
                </div>  