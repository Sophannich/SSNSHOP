<?php 

/* include _header.php */ 
include("./header.php");
/* !include _header.php */ 
require('./backend/favorite.php');

?>
  
<!-- Start Header -->
<header id="header">
  <table class="table text-center table-borderless">
    <thead></thead>
    <tbody>
      <tr>
        <td>

          <div class=" d-flex"> 
            <a href="#" onclick="goBack()" <i class="material-icons color-item" style="font-size: 26px; cursor: pointer; text-decoration: none;" >keyboard_backspace</i></a>
            <span class="header-title">Favorites</span>
            
            <script>
              function goBack() {
              window.history.back();
              }
            </script>
            
          </div>
        </td>
        

        <td class="text-right py-2">

            <a href="./search.php">
                  <button class="btn_icon">
                  <i class="material-icons color-item" style="font-size: 22px;" >search</i>
                </button>
            </a>

                <a href="./index.php">
                    <button class="btn_icon">
                    <i class="material-icons color-item" style="font-size: 22px;" >home</i>
                  </button>
                </a>
                  
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


    <?php

   /* include  _ptoduct.php */ 
   include("./template/_favorite.php");
   /* !include _ptoduct.php */ 

    ?>




        <div style="height: 200px;">

        </div>



<?php 
    
    //Include footer.php file
    include("footer.php");

 ?>    