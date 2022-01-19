<?php 
	include './backend/DBController.php';
	$output='';

	if (isset($_POST['query'])) {
		// code...
		$search=$_POST['query'];
		$stmt=$conn->prepare("SELECT * FROM `product`  WHERE pro_brand LIKE CONCAT('%',?,'%') OR detail LIKE CONCAT('%',?,'%')");
		$stmt->bind_param("ss",$search,$search);
	}else{
		$stmt=$conn->prepare("SELECT * FROM `product` ");

	}


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