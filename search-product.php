<?php 
    ob_start();
    //Include header.php file
    include("header.php");

 ?>

<?php
require('./backend/product.php');

include("./template/_header-search.php");
?>
    


    <!-- Start Products -->
    <section id="product" >
    

            <?php

    
                $pro_detail=$_GET['pro_detail'] ?? "#";


                if (isset($_GET['pro_detail'])) {
                    // code...
                    $search=$_GET['pro_detail'];
                    $stmt=$conn->prepare("SELECT * FROM `product`  WHERE pro_brand LIKE CONCAT('%',?,'%') OR detail LIKE CONCAT('%',?,'%') OR category LIKE CONCAT('%',?,'%') ");
                    $stmt->bind_param("sss",$search,$search,$search);
                }else{
                    $stmt=$conn->prepare("SELECT * FROM `product` ");

                }
                $row['favorite_status']=0;

                $stmt->execute();
                $result=$stmt->get_result();

                if ($result->num_rows>0) {
                    // code...

                    echo '
                        <br>
                        <p class="border-bottom font-siemreap " style="font-size: 20px;">Products <i class="fas fa-bolt"> </i></p>
                    ';


                        while($row=$result->fetch_assoc()){
                            
                            $output =include("template/_prosearch.php");

                            
                        }
                
                }else{
                    $output =include("template/_not-found.php");
                };


            ?>
                    

    </section>
      <!-- End Products -->




<div style="height: 2000px;">

</div>


<?php 
    
    //Include footer.php file
    include("footer.php");

 ?>