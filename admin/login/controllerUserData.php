<?php 
session_start();
// require "connection.php";

include('../../backend/DBController.php');
$email = "";
$name = "";
$errors = array();

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email_admin']);
        $password = mysqli_real_escape_string($conn, $_POST['password_admin']);
        $check_email = "SELECT * FROM admintable WHERE email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email_admin'] = $email;
                $status = $fetch['status'];
                $_SESSION['email_admin'] = $email;
                $_SESSION['password_admin'] = $password;
                header('location: ../index.php');
                
            }else{
                $errors['email_admin'] = "Incorrect email or password!";
            }
        }else{
            $errors['email_admin'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
    

?>