        <!-- Start Modal HTML -->

        <div id="address" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="./assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
              <form method="POST" action="./backend/update_address.php" class="m-2">
              <br>
              <label for="validationCustom01">User ID</label>
              <input  name="txtuserid" type="text" class="form-control"  placeholder="Username" id="validationCustom01" value="<?php echo $fetch_info['user_id'] ?>" hidden>
              <input type="text" class="form-control"  placeholder="Username" id="validationCustom01" value="<?php echo $fetch_info['user_id'] ?>" disabled>
              <br>
              <label for="validationCustom01">Username</label>
              <input name="txtusername" type="text" class="form-control"  placeholder="Username" id="validationCustom01" value="<?php echo $fetch_info['name'] ?>">
              <br>
              <label>Gender</label>
              <select class="form-control" name="txtgender">
                <option ><?php echo $fetch_info['gender'] ?></option>
                <option>Private</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              <br>
              <label for="validationCustom02">Address</label>
              <input name="txtaddress" type="text" class="form-control"  placeholder="Your Address" id="validationCustom02" value="<?php echo $fetch_info['address'] ?>">
              <br>
              <label for="validationCustom03">Phone Number</label>
              <input name="txtnumber" type="text" class="form-control"  placeholder="Your phone numner" id="validationCustom03" value="<?php echo $fetch_info['phone_number'] ?>">


                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                <span class="glyphicon glyphicon-remove"></span> Cancel
                                            </button>

                                            <button type="submit" class="btn btn-primary" >
                                                <span class="glyphicon glyphicon-floppy-disk"> </span> Save
                                            </button>



                                          

                                            
                                        </div>

                </form>
                <br class="m-1">
              </div>
            </div>
          </div>
        <!-- End Modal HTML -->