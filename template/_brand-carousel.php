
     <!-- Start Brand carousel -->
        <section id="brand">     
                <p class="border-bottom font-siemreap mr-3 ml-3" style="font-size: 20px;">Choose Brand &nbsp;<i class="fa fa-tags" aria-hidden="true"></i></p>
                <div class="owl-carousel owl-theme pl-3">
                            <?php

                                $i=0;
                                foreach ($resultbrand as $row){
        
                            ?>

                    <div class="font-rale  border btn box-brand" >                                               
                        <a href="./search-product.php?pro_detail=<?= $row['brand_name']?? " " ; ?>"><img src="<?= $row['brand_logo']?? " " ; ?>" alt="Product1" class="img-fluid img-brand "></a>
                    </div>

                                <?php
                    
                                    }
                                    ?>
                </div>
            </section>
        <!-- End Brand carousel -->

        <script type="text/javascript">
          $(document).ready(function(){

                // Start Brand carousel
                    $("#brand .owl-carousel").owlCarousel({
                        // loop: true,
                        nav: false,
                        dots: false,
                        responsive : {
                            0: {
                                // items: 2.5
                            },
                            600: {
                                // items: 4.5
                            },
                            1000 : {
                                loop: true,
                                items: 8.5
                            }
                        }
                    });
                // End Brand carousel
    

    
             });
        </script>