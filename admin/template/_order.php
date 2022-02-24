                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>
                    <div class="mb-4">
                            <br>
                            <h5 style="color: #5D6D7E;">Request Order (<?= $count_all_pro_requested?>)</h5>
                            <hr>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                    <?php 
                        foreach ($pro_requested as $row){
                        include('../admin/template/card/card_order.php');
                        }
                    ?>

                        
                    </div>
                </div>  


