
    <!-- Start Header -->
      <header id="header">
        <table class="table text-center table-borderless">
          <thead></thead>
          <tbody>




          
            <tr>
              <td>

                <div class=" d-flex" > 
                  
                <?php
                                
                                if($home==1){
                                  echo '

                                  <a href="#mainmenu" data-toggle="modal"><i class="material-icons color-item" id="#mainmenu" style="font-size: 26px; cursor: pointer;" >menu</i></a>

                                  ';
                                }elseif($home==0){
                                  echo '
                                  
                                  <a href="#" onclick="goBack()" <i class="material-icons color-item" style="font-size: 26px; cursor: pointer; text-decoration: none;" >keyboard_backspace</i></a>
                                  <span class="header-title " ></span>
                                  
                                  <script>
                                    function goBack() {
                                    window.history.back();
                                    }
                                  </script>
                                
                                  ';
                                }
                            ?>

                  
                
                </div>

              </td>
              <td><a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="logo"></a> </td>

              <td class="text-right py-2"  style="width: 400px;">

                   

              
              </td>

              
            </tr>

    

          </tbody>
        </table>
      </header>
      <!-- End Header -->



