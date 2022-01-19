
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
			include('./template/_product-card.php'); 
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

                                                    <button type="submit" class="btn btn-primary" >
                                                        <span class="glyphicon glyphicon-floppy-disk" </span> Add Favorite
                                                    </button>



                                                   

                                                    
                                                </div>

                    </form>
                    

                    
                </div>
        </div>
    </div>
</div>
<!-- /.modal -->


<!-- Remove Fa -->
<div class="modal fade" id="refa<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Remove Favorite</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
                <div class="modal-body">
                    
                    
       <?php 
			include('./template/_product-card.php'); 
		?>
        <br><br><br>

                    <form method="POST" action="./backend/remove-fa.php" >

                        <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                        <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                        <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>
                        <input type="text"  name="txtfavoriteid" value="<?= $row['favorite_id']; ?>" hidden>


                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span> Cancel
                                                    </button>

                                                    <button type="submit" class="btn btn-danger" >
                                                        <span class="glyphicon glyphicon-floppy-disk" ></span> Remove Favorite
                                                    </button>



                                                   

                                                    
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
			include('./template/_product-card.php'); 
		?>
        <br><br><br>


                    <form method="POST" action="./backend/add-cart.php" >

                        <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                        <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                        <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>
                        <input type="text"  name="txtqty" value="1" hidden>

                        


                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span> Cancel
                                                    </button>

                                                    <button type="submit" class="btn btn-warning" 
                                                        <span class="glyphicon glyphicon-floppy-disk" </span> Add to Cart
                                                    </button>


                                                </div>

                    </form>


                    

                    
                </div>
        </div>
    </div>
</div>
<!-- /.modal -->
