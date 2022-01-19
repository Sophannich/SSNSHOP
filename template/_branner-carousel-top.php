<?php 
	
	//Require brand-carousel-top Class
		require('./backend/brand-carousel-top.php');


 ?>
    
       
       <!-- Start Carousel Top -->
        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel" style="margin-top: -5px; position: relative;">
                    <ol class="carousel-indicators">
                                <?php

                                $i=0;
                                foreach ($result as $row){
                                    $actives=' ';

                                    if ($i == 0){
                                        $actives = 'active';
                                    }
                                ?>
                  <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

                                    <?php
                                    $i++; 
                                    }
                                    ?>

                    </ol>


                    <div class="carousel-inner ">
                                    <?php

                                    $i=0;


                                    foreach ($result as $row){
                                        $actives=' ';

                                        if ($i == 0){
                                            $actives = 'active';
                                        }
                                    ?>                       
                        <div class="carousel-item <?= $actives; ?>">
                            <img src="<?= $row['banner_img'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p> -->
                            </div>
                        </div>  
      
                                    <?php
                                    $i++; 
                                    }
                                    ?>                        
                    </div>
        </div>
    
              <br>
          <!-- End Carousel Top -->