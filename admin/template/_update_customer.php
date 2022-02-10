        <!-- Start Modal HTML -->

        <div id="update_customer" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
              <form method="POST" action="./backend/update_address.php" class="m-2">
              <br>
              <label for="validationCustom01" class="mt-3">User ID</label>
              <input  name="txtuserid" type="text" class="form-control"  placeholder="User ID" id="validationCustom01"  hidden>
              <input type="text" class="form-control"  placeholder="User ID" id="validationCustom01" disabled>
        
              <label for="validationCustom01" class="mt-3">Username</label>
              <input name="txtusername" type="text" class="form-control"  placeholder="Username" id="validationCustom01" >
    
              <label class="mt-3">Gender</label>
              <select class="form-control" name="txtgender">
                <option ></option>
                <option>Private</option>
                <option>Male</option>
                <option>Female</option>
              </select>
 
              <label for="validationCustom02" class="mt-3">Address</label>
              <input name="txtaddress" type="text" class="form-control"  placeholder="Address" id="validationCustom02" >

              <label for="validationCustom03" class="mt-3">Phone Number</label>
              <input name="txtnumber" type="text" class="form-control"  placeholder="Phone numner" id="validationCustom03" >

              <label for="validationCustom03" class="mt-3">Password</label>
              <input name="txtpassword" type="password" class="form-control"  placeholder="Password" id="validationCustom03" ><br>


                                    
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