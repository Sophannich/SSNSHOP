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
    include('../admin/template/_txt_pro_cus_search.php')
?>
</div>

<br><br>
                    <div class="col-12">
                            <h5 style="color: #5D6D7E;">Customer's Products (<?= $count_all_pro_cus?>)</h5>
                            <hr>
                            
                    </div>

<section id="pro_all_cus" >
    
    <?php

        include('../admin/template/_customer_products.php');
        

    ?>
</section>







<?php
include('../footer.php');
?>


<div style="height: 200px;">
</div>