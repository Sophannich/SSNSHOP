<?php $home=1; include('header.php') ?>
    

<?php 
    include('../template/_branner-carousel-top.php');
    
?>
<p class="border-bottom font-siemreap mr-3 ml-3" style="font-size: 20px;">Brands &nbsp;<i class="fa fa-tags" aria-hidden="true"></i></p>
<?php
    include('../template/_brand_show.php');
?>



<!-- Start Products -->
    <section id="product" >
              <br>
        <p class="border-bottom font-siemreap " style="font-size: 20px;">Products <i class="fas fa-bolt"> </i></p>

        <?php foreach ($resultproduct as $row){
             include('button.php');
                $row['favorite_status']=0;
                include('_prosearch.php');
                

         } ?>

    </section>
<!-- End Products -->


      <div style="height: 200px;">
      </div>

<?php    
    include('../template/_brand-carousel.php');
 ?>


        <div style="height: 50px;">
        </div>
        
<?php 
    
    //Include footer.php file
    include("../footer.php");

 ?>
