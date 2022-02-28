<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSN-Admin</title>
    <link rel="shortcut icon" type="image/png" href="https://www.iconpacks.net/icons/2/free-mobile-phone-icon-2636-thumb.png">


<!-- Bootstrap CDM -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Font Awwsome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS File  -->
<link rel="stylesheet" href="../style.css">

<!-- google icons -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Query search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<?php 
	
	//Require MySQL Connection
		require('../backend/DBController.php');
    include('../admin/backend/count.php');
    include('../admin/menu.php');
    include('./backend/count.php');
    include('./backend/select_product.php');
    include('./backend/banner_area.php');

    

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
                    // document.body.scrollTop = 0;
                    // document.documentElement.scrollTop = 0;
                    window.scrollTo({top: 0, behavior: 'smooth'});
                  }
            </script>
      <!-- End Go Top -->
      