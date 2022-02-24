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


    <!-- Start Brand carousel -->
        <section id="brand">     
                    <br>
                    <div class="owl-carousel owl-theme pl-3">
                                <?php
                                    $i=0;
                                    foreach ($resultbrand as $row){
            
                                ?>

                        <div class="font-rale  border btn box-brand" >                                            
                            <a href="#delete_brand<?=$row['brand_id']?>" data-toggle="modal"> <img src="<?= $row['brand_logo']?? " " ; ?>" alt="Product1" class="img-fluid img-brand "></a>   
                        </div>
                        





                                    <?php
                        
                                        }
                                        ?>
                    </div>






        </section>
    <!-- End Brand carousel -->
                
        <script type="text/javascript">
          $(document).ready(function(){

                // Start Brand carousel
                    $("#brand .owl-carousel").owlCarousel({
                        // loop: true,
                        nav: false,
                        dots: false,
                        responsive : {
                            0: {
                                // items: 2.5
                            },
                            600: {
                                // items: 4.5
                            },
                            1000 : {
                                loop: true,
                                items: 8.5
                            }
                        }
                    });
                // End Brand carousel
    

    
             });
        </script>
<br><br>
 
<?php
include('../footer.php');
?>

<div class="container">
        <a href="#add_brand" data-toggle="modal" class="btn btn-add-banner">Add Brand (PNG)</a>
    </div>


<!-- Add Brand Modal HTML -->

    <div id="add_brand" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                <br><br><br>

                <div class="container">
                <form  method="POST" action="../admin/backend/add_brand.php" >

                    <label  class="mt-3">Name Brand</label>
                    <input required  type="text" class="form-control"  placeholder="Name brand" name="txt_brand_name" >
                    <label  class="mt-3">Link Image address</label>
                    <input required  type="text" class="form-control"  placeholder="Link Image address" name="txt_brand_logo" >
                        <br><br>


                    <button type="submit" class="btn btn-add-banner form-control" <?php echo $fetch_info['adds'] ?>>
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
 $i=0;
 foreach ($resultbrand as $row){          
 ?>

<!-- Delete Brand Modal HTML -->

    <div id="delete_brand<?=$row['brand_id']?>" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                <br><br><br>

                <div class="container">
                <form  method="POST" action="../admin/backend/add_brand.php" >
                <div class="w-50">
                    <img src=" <?= $row['brand_logo']?>" alt="" class="img-brand ">
                    </div>
                    <label  class="mt-3">Name Brand</label>
                    <input required  type="text" class="form-control"  placeholder="Name brand" name="txt_brand_name" value="<?= $row['brand_name']?? " " ; ?>">
                    <label  class="mt-3">Link Image address</label>
                    <input required  type="text" class="form-control"  placeholder="Link Image address" name="txt_brand_logo" value="<?= $row['brand_logo']?? " " ; ?>">
                        <br><br>
                        <div <?php echo $fetch_info['deletes'] ?>>
                            <a href="../admin/backend/delete_brand.php?brand_id=<?=$row['brand_id']?>"class="btn btn-danger form-control">
                            Delete
                        </a>
                        </div>
                </form>

                </div>
                <br class="m-1">
              </div>
            </div>
          </div>
<!-- End Modal HTML -->

<?php
                        
                    }
                    ?>