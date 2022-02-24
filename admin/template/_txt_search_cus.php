<br>
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

              <br>
            </div>
                        <script type="text/javascript">
                                $(document).ready(function(){
                                    $("#search_text").keyup(function(){
                                        var	search=$(this).val();
                                        $.ajax({
                                            url:'./_action_search_cus.php',
                                            method:'post',
                                            data: {query:search},
                                            success:function(response){
                                                $("#all_cus").html(response);
                                            }
                                        });
                                    });
                                });
                        </script>

