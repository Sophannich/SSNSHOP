

    <!-- Start Products -->
    <section id="product" >
              <br>
        <p class="border-bottom font-siemreap " style="font-size: 20px;">Products <i class="fas fa-bolt"> </i></p>



       <?php foreach ($resultproduct as $row){


/* include  _ptoduct.php */
    $row['favorite_status']=0;
    include("./template/_prosearch.php");
/* !include _ptoduct.php */



} ?>






    </section>
      <!-- End Products -->


      <div style="height: 200px;">
      </div>
