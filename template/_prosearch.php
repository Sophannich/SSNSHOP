
       <?php 
			include('./template/_product-card.php'); 
            
		?>



                        <div style="display: inline-flex;  position: absolute; margin-left: -120px;" >
                            <input type="text" value="<?php echo $fetch_info['user_id'] ?>" id="userid" style="width: 30px;" hidden>                                    
                            <input type="text" value="<?= $row['pro_id']?? "#" ; ?>" id="proid" style="width: 30px;" hidden> 
                        </div>


                                            
                                        <?php 
										include('./template/button.php'); 
										?>





