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
		$stmt=$conn->prepare("SELECT * FROM `usertable`  WHERE user_id LIKE CONCAT('%',?,'%') OR name LIKE CONCAT('%',?,'%') OR email LIKE CONCAT('%',?,'%') ");
		$stmt->bind_param("sss",$search,$search,$search);
	}else{
		$stmt=$conn->prepare("SELECT * FROM `usertable` ");

	}


	$stmt->execute();
	$result=$stmt->get_result();

	if ($result->num_rows>0) {
		// code...

  		 	while($row=$result->fetch_assoc()){
				   
  		 		$output =include('../admin/template/card/card_customers.php');
	
  		 	}
  	
	}else{
		$output =include('../admin/template/_not_found.php');

	};
 ?>