<?php $home=1; include('header.php') ?>
    

<?php 

    include('../template/_branner-carousel-top.php');
    include('../template/_brand-carousel.php');
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
    
    //Include footer.php file
    include("../footer.php");

 ?>
