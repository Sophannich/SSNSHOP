<?php 

/* include _menu.php */ 
include("template/_menu.php");
include("template/_address.php");

/* !include _menu.php */ 

?>
     
     
     
     
     
     <!-- Start Header -->
      <header id="header">
        <table class="table text-center table-borderless">
          <thead></thead>
          <tbody>
            <tr>
              <td>

                <div class=" d-flex" > 
                  
                  <a href="#addEmployeeModal" data-toggle="modal"><i class="material-icons color-item" id="#addEmployeeModal" style="font-size: 26px; cursor: pointer;" >menu</i></a>
                </div>

              </td>
              <td><a href="./index.php"><img src="./assets/logos/ssnshop.gif" class="logo"></a> </td>

              <td class="text-right py-2"  style="width: 400px;">

                <a href="./search.php">
                  <button class="btn_icon">
                  <i class="material-icons color-item" style="font-size: 22px;" >search</i>
                </button></a>

                <a href="./favorite.php">
                    <button class="btn_icon">
                    <i class="material-icons color-item" style="font-size: 22px;" >favorite_border</i>
                  </button></a>
                  
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




<!-- Start Main -->
    <main class="main-site">




