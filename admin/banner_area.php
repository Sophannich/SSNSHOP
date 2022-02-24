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


    <!-- Start Carousel Top -->
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" style="margin-top: -5px; position: relative;">
                        <ol class="carousel-indicators">
                                    <?php

                                    $i=0;
                                    foreach ($resultbanner as $row){
                                        $actives=' ';

                                        if ($i == 0){
                                            $actives = 'active';
                                        }
                                    ?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

                                        <?php
                                        $i++; 
                                        }
                                        ?>

                        </ol>


                        <div class="carousel-inner ">
                                        <?php

                                        $i=0;


                                        foreach ($resultbanner as $row){
                                            $actives=' ';

                                            if ($i == 0){
                                                $actives = 'active';
                                            }
                                        ?>                       
                            <div class="carousel-item <?= $actives; ?>">
                                <img src="<?= $row['banner_img'] ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption" <?php echo $fetch_info['deletes'] ?>>
                                <a href="#delete_banner<?=$row['banner_id']?>" data-toggle="modal" class="btnadd">
                                                
                                                <i class="material-icons" style="color: red;">delete</i>
                                            </a>
                                <!-- <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>  
        

    <!-- Delete Banner Modal HTML -->

        <div id="delete_banner<?=$row['banner_id']?>" class="modal fade" >
                <div class="modal-dialog">
                <div class="modal-content">

                <div class="menu-header">
                    <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                        <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                    </div>
                    <br><br><br>

                    <div class="container">
                    <form  method="POST" action="../admin/backend/add_banner_area.php" >
                    
                    <div class="w-50">
                    <img src=" <?= $row['banner_img']?>" alt="" class="img-brand ">
                    </div>
                        <label  class="mt-3">ID Banner</label>
                        <input value="<?=$row['banner_id']?>" required  type="text" class="form-control w-50"  placeholder="Link Image address" name="txt_banner_id" >                      
                        <label  class="mt-3">Link Image address</label>
                        <input value="<?=$row['banner_img']?>" required  type="text" class="form-control"  placeholder="Link Image address" name="txt_banner" >
                            <br><br>

                        <a href="../admin/backend/delete_banner_area.php?banner_id=<?=$row['banner_id']?>"class="btn btn-danger form-control">
                            Delete
                        </a>
                    </form>

                    </div>
                    <br class="m-1">
                </div>
                </div>
            </div>
    <!-- End Modal HTML -->     


                                        <?php
                                        $i++; 
                                        }


                                        ?>                        
                        </div>
            </div>
        
                <br>
    <!-- End Carousel Top -->

    <div class="container" <?php echo $fetch_info['adds'] ?>>
        <a href="#banner_area" data-toggle="modal" class="btn btn-add-banner">Add Banner 1920x770</a>
    </div>



    
    <!-- Add Banner Modal HTML -->

        <div id="banner_area" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                <br><br><br>

                <div class="container">
                <form  method="POST" action="../admin/backend/add_banner_area.php" >

                    <label  class="mt-3">Link Image address</label>
                    <input required  type="text" class="form-control"  placeholder="Link Image address" name="txt_banner" >
                        <br><br>


                    <button type="submit" class="btn btn-add-banner form-control">
                        Add
                    </button>
                </form>

                </div>
                <br class="m-1">
              </div>
            </div>
          </div>
    <!-- End Modal HTML -->


    
<?php
include('../footer.php');
?>