
      <!-- Start Modal HTML -->

        <div id="delete_product<?= $row['pro_id']; ?>" class="modal fade" >
            <div class="modal-dialog">
              <div class="modal-content">

              <div class="menu-header">
                  <a href="./index.php"><img src="../assets/logos/ssnshop.gif" class="m-2 " style="width: 100px;"></a>          
                    <button type="button" class="close pr-2 pt-1" data-dismiss="modal"><i class="material-icons">close</i></button>    
                </div>
                <br><br><br>

                <div class="container">
                <h5 class="text-danger text-center">Do you want delete this product ? #ID (<?= $row['pro_id']?>)</h5>
                <br><br>
                <div class="w-50">
                <img src=" <?= $row['img1']?>" alt="" class="img-brand ">
                </div>

<br><br><br><hr>

                <div class="text-right ">
                  <button type="button" class="btn btn-add" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove "></span> Cancel
                   </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./../admin/backend/delete_product.php?pro_id=<?= $row['pro_id']?>" class="btn btn-de ">Delete</a>
                </div>
                </div>
                
                
              
                <br class="m-1">
              </div>
            </div>
          </div>
        <!-- End Modal HTML -->

        