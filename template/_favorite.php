
    <?php
require('./backend/favorite.php');


?>
    
    <!-- Start Products -->
    <section id="product" >
              <br>
        <p class="border-bottom font-siemreap " style="font-size: 20px;">Products <i class="fas fa-bolt"> </i></p>
        <?php foreach ($resultfavorite as $row){

             /* include  _ptoduct.php */ 
             include("./template/_prosearch.php");
             /* !include _ptoduct.php */ 


        } ?>  
        
    </section>
      <!-- End Products -->