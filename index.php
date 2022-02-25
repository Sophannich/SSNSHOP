<?php 
require './backend/DBController.php';
require_once "./login/controllerUserData.php"; ?>


<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);

        header('Location: ./for_user.php');
        
    }
}else{
   
    header('Location: ./no_user/index.php');
}


?>
