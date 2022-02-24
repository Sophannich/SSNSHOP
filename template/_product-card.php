<button class="border-0" style="background: transparent;" >

<a href="./product-detail.php?pro_id=<?= $row['pro_id']?? "#" ; ?>" style="text-decoration: none; " class="btnhover" >

    <div id="prosearch" class="procard" >
        <div class="protopcard" >
            <div class="proimgnew">


                        <?php

                            if ( $row['status'] == "Just Arrived") {
                                echo '<img src="https://th.bing.com/th/id/R.8818bd62c9305c4a3beeaa747307d5a6?rik=rod9HGqUSFst6w&riu=http%3a%2f%2fgifimage.net%2fwp-content%2fuploads%2f2017%2f09%2fblinking-new-gif-9.gif&ehk=FtaTD5Z%2fH1i23m9nx0rFkmZ6N%2b0FcRNHWIYvwnWe9pU%3d&risl=&pid=ImgRaw&r=0" class="img-new">';

                            } elseif ( $row['status'] == "New") {

                                echo '<span></span> ';
                            }else {

                                echo ' ';
                            };

                        ?>
            </div>



        </div>

        <div class="proimg">
            <img src="<?= $row['img1']?? "#" ; ?>" alt="Product1" class="img-fluid img-grid">
        </div>

        <div class="prodescription">
            <h6 class="proname"><?= $row['pro_name']?? "#" ; ?></h6>
            <div class="row">
                    <div class="col-5">
                        <b class="proprice">$<?= $row['total']?? "#" ; ?></b>
                    </div>
                    <div class="col-7">
                        <h6 class="po_price_dis d-flex text-black-50"><strike ><h6>$<?= $row['price']?? "#" ; ?></h6></strike> | <p style="color: red;"><?= $row['discount']?? "#" ; ?>%</p></h6>
                    </div>
            </div>

            <div class="prodetail">
                <p class="protextdetail multi-line"><i class="fas fa-info-circle"> </i> <?= $row['detail']?? "#" ; ?></p>
            </div>

        </div>

        <div class="prostock">
            <b class="text-black-50">
                                                        <?php



                                                            if ( $row['stock'] == "IN STOCK") {
                                                                echo '

                                                                '. $row['stock'] ?? "#" ;'

                                                                ';
                                                            } else {

                                                                echo '
                                                                <span class="text-danger border" style="border-radius: 5px;">&nbsp; OUT STOCK</span>
                                                                ';
                                                            };

                                                    ?>
                                                    &nbsp;
            </b>
        </div>

        <?php

                                  if ( $row['pro_rate'] >=500) {
                                      echo '

                                      <div class="text-warning  prorate">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                      </div>

                                      ';
                                  }elseif ( $row['pro_rate'] >= 400){

                                    echo '

                                    <div class="text-warning  prorate">
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="far fa-star"></i></span>
                                    </div>

                                    ';
                                }elseif ( $row['pro_rate'] >= 300){

                                  echo '

                                  <div class="text-warning  prorate">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>

                                  ';
                              }elseif ( $row['pro_rate'] >= 200){

                                echo '

                                <div class="text-warning  prorate">
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                                  <span><i class="far fa-star"></i></span>
                                </div>

                                ';
                            }elseif ( $row['pro_rate'] >= 100){

                              echo '

                              <div class="text-warning  prorate">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>

                              ';
                          }elseif ( $row['pro_rate'] >0){

                            echo '

                            <div class="text-warning  prorate">
                              <span><i class="fas fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                              <span><i class="far fa-star"></i></span>
                            </div>

                            ';
                        } else {

                                      echo '

                                      <div class="text-warning  prorate">
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>

                                      ';
                                  };

        ?>

        <br>
    </div>

</a>

</button>
<a href="#addaa<?php echo $row['pro_id']; ?>" data-toggle="modal" class="add-fa icon_favorite">
                            <i class="material-icons color-item" style="font-size: 26px;" >favorite_border</i>
						</a>


<?php
    if ($row['favorite_status'] ?? "0" == "1") {
        include('./template/btnfa.php');
        
    } else {
    
         include('./template/btnfa-bor.php');
    };
?>

                                    <?php 
                                                

                                                if ( $row['stock'] == "IN STOCK" and $row['total']>0) {
                                                    include('./template/btncart.php');
                                                } else {
                                                    
                                                    echo '
                                                   
                                                    ';
                                                };

                                    ?> 






                 
<div id="addaa" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="menu-header">
                  <a href="./index.php"><img src="./assets/logos/ssnshop.gif" class="logo"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>

                <div class="menu-profile">

                </div>
                

                <br class="m-1">
              </div>
            </div>
          </div>
