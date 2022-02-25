
<!-- Add Fa -->
<div class="modal fade" id="addfa<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Add to Favorite</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
                <div class="modal-body">
                    
                    
       <?php 
			include('_product-card.php'); 
		?>
        <br><br><br>

                    <form method="POST" action="./backend/add-fa.php" >

                        <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                        <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                        <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>


                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span> Cancel
                                                    </button>
                                                    <a href="../login/login-user.php" class="btn btn-primary" ><span class="glyphicon glyphicon-floppy-disk"> </span>Add Favorite</a>
                                                
                                                    
                                                </div>

                    </form>
                    

                    
                </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Add Cart -->
<div class="modal fade" id="addcart<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
                <div class="modal-body">
                    
                    
       <?php 
			include('_product-card.php'); 
		?>
        <br><br><br>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span> Cancel
                                                    </button>


                                                    <a href="../login/login-user.php" class="btn btn-warning" ><span class="glyphicon glyphicon-floppy-disk"> </span>Add to Cart</a>
                                                </div>
               


                    

                    
                </div>
        </div>
    </div>
</div>



<!-- /.modal -->

