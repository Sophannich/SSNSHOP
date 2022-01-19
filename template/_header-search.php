<!-- Start Header -->
<header id="header">
  <table class="table text-center table-borderless">
    <thead></thead>
    <tbody>
      <tr>
        <td>

          <div class=" d-flex" > 
            
            <a href="#" onclick="goBack()" <i class="material-icons color-item" style="font-size: 26px; cursor: pointer; text-decoration: none;" >keyboard_backspace</i></a>
            <script>
              function goBack() {
              window.history.back();
              }
            </script>
          </div>

        </td>

        <td>

            <div class="wrapper">
                <div class="search-input ">
                  <a href="" target="_blank" hidden></a>
                  <input type="text" name="search" id="search_text" placeholder="SSN search.." autofocus value="<?= $_GET['pro_detail']?? "" ; ?>">
                  <div class="autocom-box">
                    <!-- here list are inserted from javascript -->
                </div>
                <!-- <div class="icon"><i class="material-icons icon" >search</i></div> -->
                    <!-- Start Category -->
                    <a href="#" class="icon"><i class="material-icons icon" >search</i></a>
                   <!-- End Category -->
                
              </div>
            </div>

  
        </td>

        <td class="text-right py-2" >

            <a href="./cart.php">
                    <button class="btn_icon">
                      <i class="material-icons color-item" style="font-size: 22px;" >shopping_bag</i>
                      <?php
                        include('./backend/count-cart.php');
                            if($count_cart>0){
                              echo '<div class="menu_number" >
                              <b>'.$count_cart.'</b>
                              </div>';
                            }else{
                              echo '<div class="" >
                              <b></b>
                              </div>';
                            }
                        ?>
                    </button>
            </a>

        </td>

        
      </tr>
      
    </tbody>
  </table>

</header>
<!-- End Header -->

<!-- Category-->
    <div class="">
        <section id="category" >
          <div id="search_brand" class="owl-carousel container">

          <?php foreach ($resultbrand as $row){ ?>


            <div>
                <a href="./search-product.php?pro_detail=<?= $row['pro_brand']?? " " ; ?>">
                    <div class=" font-rale " >
                        <button class="color-second item  border-0" ><?= $row['pro_brand']?? " " ; ?></button>
                    </div> 
                </a>                                     
            </div>


      <?php   } ?> 
      
      <?php foreach ($resultcategory as $row){ ?>


            <div>
                <a href="./search-product.php?pro_detail=<?= $row['category']?? " " ; ?>">
                    <div class=" font-rale " >
                        <button class="color-second item  border-0" ><?= $row['category']?? " " ; ?></button>
                    </div> 
                </a>                                     
            </div>


    <?php   } ?>  


              
        </section>  
    </div>                       
<!-- Category -->



<script type="text/javascript">


        $(document).ready(function(){
            $("#search_text").keyup(function(){
                var	search=$(this).val();


                $.ajax({
                    url:'action.php',
                    method:'post',
                    data: {query:search},
                    success:function(response){
                        $("#product").html(response);
                    }
                });
            });
        });
</script>
