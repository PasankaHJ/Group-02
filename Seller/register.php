<?php
session_start();
include "db/db.php";

if(isset($_POST["register"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $address = $_POST["address"];
        $shop_name = $_POST["shop_name"];
        $image = $_POST["image_name"];
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $mobile = $_POST["mobile"];
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $reenterpw = mysqli_real_escape_string($conn,$_POST["reenterpw"]);


        $sql = "SELECT * FROM sellers WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count>0){
            $_SESSION["register_status"] = 2;
            header("location:seller_register.php");
        }else{
            

        if($password == $reenterpw){

            $query = "INSERT INTO sellers (fname,lname,email,mobile,psswrd,district,logo,shopname,address) VALUES ('$fname','$lname','$email','$mobile','$password','$city','$image','$shop_name','$address')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["register_status"] = 1;
                header("location:seller_login.php");
            }else{
                $_SESSION["register_status"] = 0;
                header("location:seller_register.php");
            }
        }else{
            $_SESSION["register_status"] = 3;
            header("location:seller_register.php");
        }
    }
}
?>