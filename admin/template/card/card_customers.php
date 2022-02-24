
<div class="col-sm-4 mt-3">
  <div class="card border-left-customer">
    <div class="card-body">
      <h5 class="card-title"><?=$row['name']?? "N/A";?>  #<?=$row['user_id']?? "N/A";?></h5>
      <b>E-mail : </b><span><?=$row['email']?? "N/A";?></span><br>
      <b>Address : </b><span><?=$row['address']?? "N/A";?></span><br>
      <b>Gender : </b><span><?=$row['gender']?? "N/A";?></span><br>
      <b>Phone  : </b><span><a href="tel:<?=$row['phone_number']??0;?>"><?=$row['phone_number']?? "N/A";?></a></span>

      <br>
      <br>
      <form action="">
        <div class="text-right" <?php echo $fetch_info['updates'] ?>>
            <a href="#update_customer<?=$row['user_id']?? "N/A";?>" data-toggle="modal" class="btn btn-primary">Update</a>
        </div>
      </form>
    </div>
  </div>
</div>


      
      
      <!-- Update Customer Modal HTML -->

      <div id="update_customer<?=$row['user_id']?? "N/A";?>" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
              <form method="POST" action="./../admin/backend/update_customer.php" class="m-2">
                <br>
                
                <label for="validationCustom01" class="mt-3">User ID</label>
                <input type="text" class="form-control"  placeholder="User ID" id="validationCustom01"  value="<?=$row['user_id']?? "N/A";?> " name="txt_user_id1" disabled>
                <input required type="text" class="form-control w-50"  placeholder="User ID" id="validationCustom01"  value="<?=$row['user_id']?? "N/A";?> " name="txt_user_id" hidden >
          
                <label for="validationCustom01" class="mt-3">Username</label>
                <input required value="<?=$row['name']?? "N/A";?>" name="txtusername" type="text" class="form-control"  placeholder="Username" id="validationCustom01" >
      
                <label class="mt-3">Gender</label>
                <select class="form-control" name="txtgender">
                  <option ><?=$row['gender']?? "N/A";?></option>
                  <option>Private</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
  
                <label for="validationCustom02" class="mt-3">Address</label>
                <input value="<?=$row['address']?? "N/A";?>" name="txtaddress" type="text" class="form-control"  placeholder="Address" id="validationCustom02" >

                <label for="validationCustom03" class="mt-3">Phone Number</label>
                <input required value="<?=$row['phone_number']?? "N/A";?>" name="txtnumber" type="text" class="form-control"  placeholder="Phone numner" id="validationCustom03" >

                <label for="validationCustom03" class="mt-3">Password</label>
                <input name="txtpassword" type="Password" class="form-control"  placeholder="Password" id="validationCustom03" ><br>


                                      
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