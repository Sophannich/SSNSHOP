<?php 
//Require brand-carousel-top Class
require('./backend/product.php');

  ?>      
        
           



<?php 
$pro_id=$_GET['pro_id'] ?? "#";
foreach ($result1 as $row){
  if($row['pro_id']==$pro_id):
  
  ?>


<!-- Start Process Buy || Add to Cart -->
<div id="btn-process" class="container border">
                <div class="row justify-content-md-center">

                  <div class="col-md-auto bg-process">

                    <div class="form-row font-size-16 font-baloo mt-3">
                      <div class="col">
                      <form  method="POST" action="./backend/add-buy.php" >

                                <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                                <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                                <input type="text"  name="txtqty" value="1" hidden data-id="<?= $row['pro_id']?? "N/A" ; ?>" class="qty_input border px-1 bg-light text-center">
                                <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>              
                                <input type="text"  name="txtphone" value="<?php echo $fetch_info['phone_number'] ?>" hidden>

                          <button type="submit" class="btn btn-danger form-control">
                            Buy 
                          </button>

                          </form>
                        
                      </div>

                      <div class="col">

                      <form method="POST" action="./backend/add-cart.php" >

                                <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                                <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                                <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                                <input type="text"  name="txtqty" value="1" hidden data-id="<?= $row['pro_id']?? "N/A" ; ?>" class="qty_input border px-1 bg-light text-center">
                                <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>

                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
 
                            </form>

                        
                        
                      </div>

                    </div>
                    
                  </div>
            
                
                </div>
              </div>
        <!-- End Process Buy || Add to Cart -->     




        <!-- Start Product -->
            <section id="product-detail">
                <div class="container">
                  <div class="row">
    
                    <!-- Start Image Product  -->
                      <div class="col-sm-6 bg-img"> 
                        <br>    <br>                    
                        <div class="box-product"> 
                          <div class="box-img1">
                            <div class="mySlides box-img1">
                              <div class="numbertext">1 / 6</div>
                              <img src="<?= $row['img1']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                        
                            <div class="mySlides box-img1">
                              <div class="numbertext">2 / 6</div>
                              <img src="<?= $row['img2']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                        
                            <div class="mySlides box-img1">
                              <div class="numbertext">3 / 6</div>
                              <img src="<?= $row['img3']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                              
                            <div class="mySlides box-img1">
                              <div class="numbertext">4 / 6</div>
                              <img src="<?= $row['img4']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                          
                            <div class="mySlides box-img1">
                              <div class="numbertext">5 / 6</div>
                              <img src="<?= $row['img5']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                              
                            <div class="mySlides box-img1">
                              <div class="numbertext">6 / 6</div>
                              <img src="<?= $row['img6']?? "#" ; ?>" alt="" class="img-fluid img-grid">
                            </div>
                              
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                          
                            <div class="caption-container">
                              <p id="caption"></p>
                            </div>
                           
                          </div>
                          <br>
                          <hr class="m-1">
                          <br>
                          <div class="box-img2">
                            <div class="row center">

                              <div class="column ">
                              <img src="<?= $row['img1']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(1)">
                              </div>

                              <div class="column">
                              <img src="<?= $row['img2']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(2)">
                              </div>

                              <div class="column">
                              <img src="<?= $row['img3']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(3)">
                              </div>

                              <div class="column">
                              <img src="<?= $row['img4']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(4)">
                              </div>

                              <div class="column">
                              <img src="<?= $row['img5']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(5)">
                              </div>

                              <div class="column">
                              <img src="<?= $row['img6']?? "#" ; ?>" alt="" class="img-fluid img-grid" onclick="currentSlide(6)">
                              </div>

                            </div>
                          </div>
                        </div>

                          <br>
                        
                        <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("demo");
                          var captionText = document.getElementById("caption");
                          if (n > slides.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                              slides[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                              dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " active";
                          captionText.innerHTML = dots[slideIndex-1].alt;
                        }
                        </script> 

                      </div>
                    <!-- End Image Product  -->
                    
                    <!-- Start Detail Product -->
                      <div class="col-sm-6 bg-detail">
                        <br>

                          <div class="row">
                            <div class="col-9"><h5><?= $row['pro_name']?? "#" ; ?></h5></div>

                            <!-- <div class="col-3 btn-favorite text-right"><i class="material-icons color-item">favorite_border</i></div>     -->
                            
                            <form method="POST" action="./backend/add-fa.php" >

                                <input type="text"  name="txtuserid" value="<?php echo $fetch_info['user_id'] ?>" hidden>
                                <input type="text"  name="txtproid" value="<?= $row['pro_id']; ?>" hidden>
                                
                                <input type="text"  name="txtname" value="<?= $row['pro_name']; ?>" hidden>



                                  <button class="border-0" style="background: transparent;">
                                      <div class="col-3 btn-favorite text-right"><i class="material-icons color-item">favorite_border</i></div>                            
                                  </button>
 
                            </form>

                            


                          </div>

                            <?php 

                                                  if ( $row['pro_rate'] >=500) {
                                                      echo '
                                                      
                                                      <div class="rating text-warning font-size-12">
                                                            <span><i class="fas fa-star"></i></span>
                                                            <span><i class="fas fa-star"></i></span>
                                                            <span><i class="fas fa-star"></i></span>
                                                            <span><i class="fas fa-star"></i></span>
                                                            <span><i class="fas fa-star"></i></span>
                                                      </div>

                                                      ';
                                                  }elseif ( $row['pro_rate'] >= 400){
                                                      
                                                    echo '
                                                    
                                                    <div class="rating text-warning font-size-12">
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="far fa-star"></i></span>
                                                    </div>

                                                    ';
                                                }elseif ( $row['pro_rate'] >= 300){
                                                      
                                                  echo '
                                                  
                                                  <div class="rating text-warning font-size-12">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                  </div>

                                                  ';
                                              }elseif ( $row['pro_rate'] >= 200){
                                                      
                                                echo '
                                                
                                                <div class="rating text-warning font-size-12">
                                                  <span><i class="fas fa-star"></i></span>
                                                  <span><i class="fas fa-star"></i></span>
                                                  <span><i class="far fa-star"></i></span>
                                                  <span><i class="far fa-star"></i></span>
                                                  <span><i class="far fa-star"></i></span>
                                                </div>

                                                ';
                                            }elseif ( $row['pro_rate'] >= 100){
                                                      
                                              echo '
                                              
                                              <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                              </div>

                                              ';
                                          }elseif ( $row['pro_rate'] >0){
                                                      
                                            echo '
                                            
                                            <div class="rating text-warning font-size-12">
                                              <span><i class="fas fa-star"></i></span>
                                              <span><i class="far fa-star"></i></span>
                                              <span><i class="far fa-star"></i></span>
                                              <span><i class="far fa-star"></i></span>
                                              <span><i class="far fa-star"></i></span>
                                            </div>

                                            ';
                                        } else {
                                                      
                                                      echo '
                                                      
                                                      <div class="rating text-warning font-size-12">
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>

                                                      ';
                                                  };

                            ?>      


                          <hr class="mt-2 mr-2">

                          <!-- Price -->
                            <div class="d-flex">
                            <b class="pro-price">$<?= $row['total']?? "N/A" ; ?></b>
                            <h6 class="font-size-14 d-flex ml-3"><strike><h6 class="font-size-14 text-black-50">$<?= $row['price']?? "N/A" ; ?> </h6></strike> | <p style="color: red;"><?= $row['discount']?? "#" ; ?>%</p></h6> 
                            </div>
                          <!-- !Price -->

                          <!-- Product Qty -->
                            <div id="qty-pro" class="qty my-3">
                                  <div class="control-qty">
                                    <h6 class="mr-3">Qty : </h6>
                                    <button disabled data-id="<?= $row['pro_id']?? "N/A" ; ?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="<?= $row['pro_id']?? "N/A" ; ?>" class="qty_input border px-1 bg-light text-center"  disabled value="1" placeholder="1">
                                    <button disabled data-id="<?= $row['pro_id']?? "N/A" ; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i> </button>
                                    &nbsp;
                                    <span class="qty-down btn border" ><i class="fas fa-mobile"></i> </span>                                 
                                  </div>
                            </div>
                          <!-- !Product Qty -->  
                        
                          <!-- Contact -->
                            <div>
                              <span class="font-italic">Shop : &nbsp; <a href="tel:+855-10401191">SSN Electronic Shop </a></span>
                              <br> <br>
                              <span class="font-italic"><i class="fas fa-phone">&nbsp; &nbsp; </i>Tel 1 : &nbsp; <a href="tel:+855-10401191">010 401 191</a></span>
                              <br>
                              <span class="font-italic"><i class="fas fa-phone">&nbsp; &nbsp; </i>Tel 2 : &nbsp; <a href="tel:+855-966849436">096 684 9436</a></span>
                              <br>
                              <span class="font-italic"><i class="fas fa-phone">&nbsp; &nbsp; </i>Tel 3 : &nbsp; <a href="tel:+855-965553965">096 555 3965</a></span>

                              <br>
                              <!-- <span><a href="#">Add to Wishlist</a></span>
                              <span class="ml-5"><a href="#">Add to Favorites</a></span> -->
                              <br><br>
                              <hr class="mt-3 mb-3">
                              <br>
                            </div>
                          <!-- !Contact -->

                          <!-- Warranty -->
                            <div id="warranty" class="text-center">
                            <div class="row">
                              <div class="col">
                                <i class="material-icons icon-pro">verified_user</i>
                                <br>
                                <span class="font-size-14 font-siemreap"><span><?= $row['warranty']?? "N/A" ; ?> 
                              </div>
                              <div class="col">
                                <i class="material-icons icon-pro">redeem</i>
                                <br>
                                <span class="font-size-14 font-siemreap"><?= $row['gift']?? "N/A" ; ?></span>
                              </div>
                              <div class="col">
                                <i class="material-icons icon-pro">done_all</i>
                                <br>
                                <span class="font-size-14 font-siemreap">
                                                  <?php 
                                                

                                                              if ( $row['status'] == "New") {
                                                                  echo 'New';
                                                              }elseif ( $row['status'] == "NEW") {
                                                                  
                                                                echo 'New';
                                                            }elseif ( $row['status'] == "Second") {
                                                                  
                                                              echo 'Second hand';
                                                          } else {
                                                                  
                                                                  echo '';
                                                              };

                                                  ?>
                                  </span>
                              </div>
                            </div>
                            <br>
                            </div>
                          <!-- !Warranty -->

                          <br>

                          <!-- Detail -->
                          <div id="detail">
                            <h6>Details</h6>
                            <hr class="mt-1 mb-1">
                            <br>
                            <span><i class="fas fa-info-circle"> </i> <?= $row['detail']?? "N/A" ; ?></span>
                            <br><br>
                          </div>
                            
                            

                        
                                                                
                    


                        </div>
                        
                        <br>
                      </div>
                    <!-- End Detail Product -->

                            
                  </div>
                </div>
            </section>
            
        <!-- End Product -->     

                                                              
                                          <?php 

                                                

                                                          if ( $row['description'] == "On") {
                                                              
                                                          } else {
                                                              
                                                              echo '
                                                              <div style="height: 200px;"></div>
                                                              ';
                                                              break;
                                                          };

                                                  ?>



        <!-- Description -->
          <div id="description" class="container">
            <br><br> <br><br>
            <h5 class="text-center">Description</h5>
            
            
            <table class="table  table-bordered" style="font-size: 14px;">

              <!-- NETWORK -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">NETWORK</h5></th>
                  </tr>

                  <tr>
                    <td >Technology</td>
                    <td class="text-center">:</td>
                    <td><?= $row['technology']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Speed</td>
                    <td class="text-center">:</td>
                    <td><?= $row['speed']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- LAUNCH -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">LAUNCH</h5></th>
                  </tr>

                  <tr>
                    <td >Announced</td>
                    <td class="text-center">:</td>
                    <td><?= $row['announced']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Status</td>
                    <td class="text-center">:</td>
                    <td><?= $row['statuss']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- BODY -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">BODY</h5></th>
                  </tr>

                  <tr>
                    <td >Dimensions</td>
                    <td class="text-center">:</td>
                    <td><?= $row['dimensions']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Weight</td>
                    <td class="text-center">:</td>
                    <td><?= $row['weight']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td>SIM</td>
                    <td class="text-center">:</td>
                    <td><?= $row['sim']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- DISPLAY -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">DISPLAY</h5></th>
                  </tr>

                  <tr>
                    <td >Type</td>
                    <td class="text-center">:</td>
                    <td><?= $row['type']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Size</td>
                    <td class="text-center">:</td>
                    <td><?= $row['size']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td >Resolution</td>
                    <td class="text-center">:</td>
                    <td><?= $row['resolution']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Protection</td>
                    <td class="text-center">:</td>
                    <td><?= $row['protection']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- PLATFORM -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">PLATFORM</h5></th>
                  </tr>

                  <tr>
                    <td >OS / Android / Windows</td>
                    <td class="text-center">:</td>
                    <td><?= $row['os']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Chipset</td>
                    <td class="text-center">:</td>
                    <td><?= $row['chipset']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td >CPU</td>
                    <td class="text-center">:</td>
                    <td><?= $row['cpu']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>GPU</td>
                    <td class="text-center">:</td>
                    <td><?= $row['gpu']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- MEMORY -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">MEMORY</h5></th>
                  </tr>

                  <tr>
                    <td >Card Slot</td>
                    <td class="text-center">:</td>
                    <td><?= $row['card_slot']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Internal</td>
                    <td class="text-center">:</td>
                    <td><?= $row['internal']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- CAMERA -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">CAMERA</h5></th>
                  </tr>

                  <tr>
                    <td >Primary</td>
                    <td class="text-center">:</td>
                    <td><?= $row['primary']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Features</td>
                    <td class="text-center">:</td>
                    <td><?= $row['features']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td >Video</td>
                    <td class="text-center">:</td>
                    <td><?= $row['video']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Secondary</td>
                    <td class="text-center">:</td>
                    <td><?= $row['secondary']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- SOUND -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">SOUND</h5></th>
                  </tr>

                  <tr>
                    <td >Loudspeaker</td>
                    <td class="text-center">:</td>
                    <td><?= $row['loudspeaker']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>3.5mm jack</td>
                    <td class="text-center">:</td>
                    <td><?= $row['mm_jack']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- COMMS -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">COMMS</h5></th>
                  </tr>

                  <tr>
                    <td >WLAN</td>
                    <td class="text-center">:</td>
                    <td><?= $row['wlan']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Bluetooth</td>
                    <td class="text-center">:</td>
                    <td><?= $row['bluetooth']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td >GPS</td>
                    <td class="text-center">:</td>
                    <td><?= $row['gps']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>NFC</td>
                    <td class="text-center">:</td>
                    <td><?= $row['nfc']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td >Radio</td>
                    <td class="text-center">:</td>
                    <td><?= $row['radio']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>USB</td>
                    <td class="text-center">:</td>
                    <td><?= $row['usb']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- FEATURES -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">FEATURES</h5></th>
                  </tr>

                  <tr>
                    <td >Sensors</td>
                    <td class="text-center">:</td>
                    <td><?= $row['sensors']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- BATTERY -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">BATTERY</h5></th>
                  </tr>

                  <tr>
                    <td >Battery</td>
                    <td class="text-center">:</td>
                    <td><?= $row['battery']?? "N/A" ; ?></td>
                  </tr>
  
                  <tr>
                    <td>Stand-by</td>
                    <td class="text-center">:</td>
                    <td><?= $row['stand_by']?? "N/A" ; ?></td>
                  </tr>

                  <tr>
                    <td>Music Play</td>
                    <td class="text-center">:</td>
                    <td><?= $row['music_play']?? "N/A" ; ?></td>
                  </tr>
                  
                </tbody>
              </div>

              <!-- MISC -->
              <div>
                <thead> </thead>
                <tbody>
                  <tr>
                    <th scope="row" colspan="3"><h5 class="color-item">MISC</h5></th>
                  </tr>

                  <tr>
                    <td >Colors</td>
                    <td class="text-center">:</td>
                    <td><?= $row['colors']?? "N/A" ; ?></td>
                  </tr>

                </tbody>
              </div>

            </table>
            <br>
            <h6>We can not guarantee that the information on this page is 100% correct.</h6>
            <p>Source : <span class="font-weight-bold"><?= $row['source']?? "N/A" ; ?></span><p>

            <br>
          </div>
        <!-- !Description -->

<?php

endif;
                      }
                      ?>



