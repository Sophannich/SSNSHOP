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
		$stmt=$conn->prepare("SELECT * FROM `product`  WHERE pro_name LIKE CONCAT('%',?,'%') OR pro_id LIKE CONCAT('%',?,'%') OR category LIKE CONCAT('%',?,'%') ");
		$stmt->bind_param("sss",$search,$search,$search);
	}else{
		$stmt=$conn->prepare("SELECT * FROM `product` ");

	}


	$stmt->execute();
	$result=$stmt->get_result();

	if ($result->num_rows>0) {
		// code...

  		 	while($row=$result->fetch_assoc()){
				   
  		 		$output =include('../admin/template/_product.php');
	
  		 	}
  	
	}else{
		$output =include('../admin/template/_not_found.php');

	};
 ?>