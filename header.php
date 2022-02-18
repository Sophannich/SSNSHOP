<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSN Electronic Shop</title>


<!-- Bootstrap CDM -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Font Awwsome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS File  -->
<link rel="stylesheet" href="style.css">

<!-- google icons -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Query search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<?php 
	
	//Require MySQL Connection
		require('./backend/DBController.php');
 

 ?>



</head>
<body>

      <!-- Start Go Top -->
      <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="material-icons" style="font-size: 18px;" >north</i></button>
            <script>
                  //Get the button
                  var mybutton = document.getElementById("myBtn");
                  
                  // When the user scrolls down 20px from the top of the document, show the button
                  window.onscroll = function() {scrollFunction()};
                  
                  function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                      mybutton.style.display = "block";
                    } else {
                      mybutton.style.display = "none";
                    }
                  }
                  
                  // When the user clicks on the button, scroll to the top of the document
                  function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                  }
            </script>
      <!-- End Go Top -->


      
<?php require_once "./login/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ./login/reset-code.php');
                
            }
        }else{
            // header('Location: ./user-otp.php');
            header('Location: ./login/login-user.php');
            
        }
    }
}else{
    header('Location: ./login/login-user.php');
    
}
?>

    <!-- <a class="navbar-brand" href="#"><?php echo $fetch_info['name'] ?></a>
    <a class="navbar-brand" href="#"><?php echo $fetch_info['user_id'] ?></a> -->
    <!-- <button type="button" class="btn btn-light"><a href="./login/logout-user.php">Logout</a></button> -->
                                        <?php 
										// include('./template/button.php'); 
										?>