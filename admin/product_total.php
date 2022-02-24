
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

                        <?php
                            include('../admin/template/_txt_search.php')
                        ?>
                    </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                <h5 style="color: #5D6D7E;">Product Total (<?= $count_pro?>) </h5>
                                </div>
                                <div class="col text-right" <?php echo $fetch_info['adds'] ?>>
                                    <a href="./add_product.php">
                                        <button type="button" class="btn btn-add btn-sm">Add New </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>

                            


<section id="pro_card">
    <?php

    include('../admin/template/_product_total.php');

    ?>
</section>


<?php
include('../footer.php');
?>


<div style="height: 200px;">
</div>