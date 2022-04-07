<?php
session_start();
include "../db/db.php";

if(isset($_POST["register"])) {

    if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["city"]) && isset($_POST["mobile"]) && isset($_POST["password"]) && isset($_POST["reenterpw"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $mobile = $_POST["mobile"];
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $reenterpw = mysqli_real_escape_string($conn,$_POST["reenterpw"]);


        $sql = "SELECT * FROM customer WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count>0){
            $_SESSION["register_status"] = 2;
            header("location:customer_register.php");
        }else{
            

        if($password == $reenterpw){

            $query = "INSERT INTO customer (fname,lname,email,pswrd,mobile,district) VALUES ('$fname','$lname','$email','$password','$mobile','$city')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["register_status"] = 1;
                header("location:customer_login.php");
            }else{
                $_SESSION["register_status"] = 0;
                header("location:customer_register.php");
            }
        }else{
            $_SESSION["register_status"] = 3;
            header("location:customer_register.php");
        }
    }
    }
}
?>