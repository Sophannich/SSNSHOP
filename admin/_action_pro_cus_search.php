<?php require_once "./login/controllerUserData.php"; ?>
<?php 

$email = $_SESSION['email_admin'];
$password = $_SESSION['password_admin'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admintable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
    }
}else{

    header('Location: ./login/login-user.php');
}
?>

<?php 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ssnshop";

// $conn = new mysqli($servername,$username,$password,$dbname);


include('../backend/DBController.php');

	$output='';

	if (isset($_POST['query'])) {
		// code...
		$search=$_POST['query'];
		$stmt=$conn->prepare("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id WHERE `cart`.`user_id` LIKE CONCAT('%',?,'%') OR cart.order_id LIKE CONCAT('%',?,'%') ");
		$stmt->bind_param("ss",$search,$search);
	}else{
		$stmt=$conn->prepare("SELECT * FROM cart INNER JOIN product ON cart.pro_id = product.pro_id INNER JOIN usertable ON cart.user_id=usertable.user_id ");

	}


	$stmt->execute();
	$result=$stmt->get_result();

	if ($result->num_rows>0) {
		// code...

  		 	while($row=$result->fetch_assoc()){
	
					if($row['cart_status']=="Completed"){
						$output =include('../admin/template/card/card_completed.php');
					}elseif($row['cart_status']=="Confirmed"){
						$output =include('../admin/template/card/card_confirmed.php');
					}elseif($row['cart_status']=="Requested"){
						$output =include('../admin/template/card/card_order.php');
					}elseif($row['cart_status']=="Rejected"){
						$output =include('../admin/template/card/card_cancel.php');
					}	
  		 	}
  	
	}else{
		$output =include('../admin/template/_not_found.php');
		
	};
 ?>