
<?php require_once "./login/controllerUserData.php"; ?>
<?php 

$email = $_SESSION['email_admin'];
$password = $_SESSION['password_admin'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admintable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
    }
}else{

    header('Location: ./login/login-user.php');
}
?>


<?php
include('header.php');
$home=0;
include('../admin/template/_header.php');

?>

    <div class="container">
    <br><br>
    <div class="col-12">
                            <div class="row">
                                <div class="col">
                                <h5 style="color: #5D6D7E;">Total User (<?= $count_user_all?>)</h5>
                                </div>
                                <div class="col text-right" <?php echo $fetch_info['adds'] ?>>
                                        <a href="#addnew" data-toggle="modal" class="btn btn-add btn-sm">Add New </a>
                                </div>
                            </div>
                        </div>
                        <br>
        <div class=" table-responsive-sm">
  
                
            <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Position</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                    
                        <?php 
                
                    foreach ($user_all as $row){ ?>

                            <tr>
                                <th scope="row"><?=$row['id']?? "N/A";?></th>
                                <td><?=$row['name']?? "N/A";?></td>
                                <td><?=$row['position']?? "N/A";?></td>
                                <td><?=$row['email']?? "N/A";?></td>
                                <td style="display: inline-flex; align-items: center; " >
                                    <div style="display: inline-flex; align-items: center; " <?php echo $fetch_info['updates'] ?>><a  href="#edit<?=$row['id']?? "N/A";?>" data-toggle="modal" class="btn-warning btn-sm" disable>Edit</a> || </div>
                                    <div style="display: inline-flex; align-items: center; " <?php echo $fetch_info['deletes'] ?>><a href="#del<?=$row['id']?? "N/A";?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></div>
                                </td>
                            </tr>




    <!-- Update User Modal HTML -->

      <div id="edit<?=$row['id']?? "N/A";?>" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
             <div class="container">
             <form method="POST" action="./../admin/backend/user_update.php" class="m-2">
                <br>
                
                <label for="validationCustom01" class="mt-3">User ID</label>
                <input type="text" class="form-control"  placeholder="User ID" id="validationCustom01"  value="<?=$row['id']?? "N/A";?> " name="txt_user_id" disabled>
                <input required type="text" class="form-control w-50"  placeholder="User ID" id="validationCustom01"  value="<?=$row['id']?? "N/A";?> " name="txt_id" hidden >
          
                <label for="validationCustom01" class="mt-3">Username</label>
                <input required value="<?=$row['name']?? "N/A";?>" name="txt_name" type="text" class="form-control"  placeholder="Username" id="validationCustom01" >
      
                <label class="mt-3">Position</label>
                <select class="form-control" name="txt_position">
                  <option ><?=$row['position']?? "N/A";?></option>
                  <option>Admin</option>
                  <option>User</option>
                  <option>Tester</option>
                </select>
  
                <label for="validationCustom02" class="mt-3">Email</label>
                <input value="<?=$row['email']?? "N/A";?>" name="txt_email" type="text" class="form-control"  placeholder="Address" id="validationCustom02" disabled>


                <label class="mt-3">Add Product</label>
                <select class="form-control" name="txt_add_pro">
                  <option ><?=$row['add_pro']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Total Product</label>
                <select class="form-control" name="txt_total_pro">
                  <option ><?=$row['total_pro']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Request</label>
                <select class="form-control" name="txt_request">
                  <option ><?=$row['request']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>


                <label class="mt-3">Customer's Product</label>
                <select class="form-control" name="txt_cus_pro">
                  <option ><?=$row['cus_pro']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Banner</label>
                <select class="form-control" name="txt_banner">
                  <option ><?=$row['banner']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Brand</label>
                <select class="form-control" name="txt_brand">
                  <option ><?=$row['brand']?? "N/A";?></option>
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Reject</label>
                <select class="form-control" name="txt_reject">       
                <option ><?=$row['reject']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Confirm</label>
                <select class="form-control" name="txt_confirm">
                <option ><?=$row['confirm']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Complete</label>
                <select class="form-control" name="txt_complete">
                <option ><?=$row['complete']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Add</label>
                <select class="form-control" name="txt_add">
                <option ><?=$row['adds']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Delete</label>
                <select class="form-control" name="txt_delete">
                <option ><?=$row['deletes']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Update</label>
                <select class="form-control" name="txt_update">
                <option ><?=$row['updates']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Create User</label>
                <select class="form-control" name="txt_create_user">
                <option ><?=$row['create_user']?? "N/A";?></option>  
                <option>hidden</option>
                  <option></option>
                </select>



                <label for="validationCustom03" class="mt-3">Password</label>
                <input name="txt_password" type="Password" class="form-control"  placeholder="Password" id="validationCustom03" ><br>


                                      
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">
                                                  <span class="glyphicon glyphicon-remove"></span> Cancel
                                              </button>

                                              <button type="submit" class="btn btn-primary" >
                                                  <span class="glyphicon glyphicon-floppy-disk"> </span> Save
                                              </button>



                                            

                                              
                                          </div>

                </form>
             </div>           


                <br class="m-1">
              </div>
            </div>
          </div>
    <!-- End Modal HTML -->

     <!-- Delete User Modal HTML -->

          <div id="del<?=$row['id']?? "N/A";?>" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                <br><br><br>

                <div class="container">
                <h5 class="text-danger text-center">Do you want delete this User ? </h5>
                <br><br>
                    <h5 class="text-center"> <?= $row['name']?> #ID<?= $row['id']?></h5><hr>
        <br><br><br><hr>

                <div class="text-right ">
                  <button type="button" class="btn btn-add" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove "></span> Cancel
                   </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./../admin/backend/delete_user.php?user_id=<?= $row['id']?>" class="btn btn-de ">Delete</a>
                </div>
                </div>
                
                
              
                <br class="m-1">
              </div>
            </div>
          </div>
    <!-- End Modal HTML -->

                    <?php                
                        }
                    ?>

                        </tbody>
            </table>
        </div>
    </div>


<?php
include('../footer.php');
?>


<!-- Add User Modal HTML -->

    <div id="addnew" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                
             <div class="container">
             <form method="POST" action="./../admin/backend/add_user.php" class="m-2">
                <br>
                
                <label for="validationCustom01" class="mt-3">User ID</label>

                <input required type="text" class="form-control w-50"  placeholder="User ID" id="validationCustom01"  name="txt_id" disabled >
          
                <label for="validationCustom01" class="mt-3">Username</label>
                <input required  name="txt_name" type="text" class="form-control"  placeholder="Username" id="validationCustom01" >
      
                <label class="mt-3">Position</label>
                <select class="form-control" name="txt_position">
                  <option>Admin</option>
                  <option>User</option>
                  <option>Tester</option>
                </select>
  
                <label for="validationCustom02" class="mt-3">Email</label>
                <input required name="txt_email" type="text" class="form-control"  placeholder="Address" id="validationCustom02">


                <label class="mt-3">Add Product</label>
                <select class="form-control" name="txt_add_pro">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Total Product</label>
                <select class="form-control" name="txt_total_pro">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Request</label>
                <select class="form-control" name="txt_request">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Customer's Product</label>
                <select class="form-control" name="txt_cus_pro">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Banner</label>
                <select class="form-control" name="txt_banner">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Brand</label>
                <select class="form-control" name="txt_brand">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Reject</label>
                <select class="form-control" name="txt_reject">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Confirm</label>
                <select class="form-control" name="txt_confirm">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Complete</label>
                <select class="form-control" name="txt_complete">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Add</label>
                <select class="form-control" name="txt_add">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Delete</label>
                <select class="form-control" name="txt_delete">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Update</label>
                <select class="form-control" name="txt_update">
                  <option>hidden</option>
                  <option></option>
                </select>

                <label class="mt-3">Create User</label>
                <select class="form-control" name="txt_create_user">
                  <option>hidden</option>
                  <option></option>
                </select>




                <label for="validationCustom03" class="mt-3">Password</label>
                <input name="txt_password" type="Password" class="form-control"  placeholder="Password" id="validationCustom03" ><br>


                                      
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">
                                                  <span class="glyphicon glyphicon-remove"></span> Cancel
                                              </button>

                                              <button type="submit" class="btn btn-primary" >
                                                  <span class="glyphicon glyphicon-floppy-disk"> </span> Add
                                              </button>



                                            

                                              
                                          </div>

                </form>
             </div>           


                <br class="m-1">
              </div>
            </div>
          </div>
<!-- End Modal HTML -->



<div style="height: 2000px;">
</div>

