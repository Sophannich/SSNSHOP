


<?php 
    ob_start();
    //Include header.php file
    include("header.php");
    include("./template/_header.php");

     
 ?>


<?php 
        
        
    
    /* include brand-carousel-top */ 
        include("./template/_branner-carousel-top.php");
    /* !include brand-carousel-top*/ 

    $sayhi=greeting();
    echo '

         <h class="m-3 font-siemreap" style="font-size: 16px;">'. $sayhi.'  <h style="font-size: 20px; color: #00A5C4;;">  '. $fetch_info['name'] .'</h></h>

         <br>
        <br>
    ';


?>

<p class="border-bottom font-siemreap mr-3 ml-3" style="font-size: 20px;">Brands &nbsp;<i class="fa fa-tags" aria-hidden="true"></i></p>
<?php
    include('./template/_brand_show.php');
?>


  <?php    /* include  _ptoduct.php */ 
      include("./template/_product.php");
      /* !include _ptoduct.php */ 





    
 ?>

<?php

function greeting(){
    date_default_timezone_set('Asia/Bangkok');
    $timeOfDay = date('a');
    if($timeOfDay == 'am'){
        return '<i class="material-icons color-item" style="font-size: 25px;" >light_mode</i> Good Morning';
    }elseif($timeOfDay == 'pm'){
        return '<i class="material-icons color-item" style="font-size: 25px;" >brightness_5</i> Good Afternoon ';
    }else{

    }

}

?>
        <div style="height: 50px;">
        </div>


<?php    
    include('./template/_brand-carousel.php');
 ?>


        <div style="height: 50px;">
        </div>

<?php 
    
    //Include footer.php file
    include("footer.php");

 ?>