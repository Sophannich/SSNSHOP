<?php

    require_once("./backend/DBController.php");

    if(isset($_GET["user_id"])){
        $user_id=$_GET["user_id"];
        $pro_id=$_GET["pro_id"];


        $select=$conn->prepare("SELECT * FROM favorite WHERE user_id=?");
        $select->execute([$user_id]);
        $number->$select ->rowCount();

        if($number>0){
            $delete=$conn->prepare("DELETE FROM favorite WHERE pro_id=?");
            $delete->execute([$pro_id]);
        }else{
            $insert=$conn->prepare("INSERT INTO favorite (user_id, pro_id) VALUES (?, ?)");
            $insert->execute([$user_id, $pro_id]);
        }
    
    }


?>