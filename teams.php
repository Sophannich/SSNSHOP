
<?php 

/* include _header.php */ 
include("./header.php");
/* !include _header.php */ 

?>


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
                        <div class="menu_number" >
                        <b>12</b>
                        </div>
                        </button>
                    </a>

                </td>

                
                </tr>

            </tbody>
            </table>
        </header>
      <!-- End Header -->

<?php 

/* include _footer.php */ 
include("template/_footer.php");
/* !include _footer.php */ 

/* include footer.php */ 
include("./footer.php");
/* !include footer.php */ 

?>