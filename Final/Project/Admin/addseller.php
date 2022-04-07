<?php
session_start();
include "../db/db.php";

if(isset($_POST["add"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $bname = $_POST["bname"];
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $address = mysqli_real_escape_string($conn,$_POST["address"]);
        $mobile = $_POST["mobile"];
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $reenterpw = mysqli_real_escape_string($conn,$_POST["reenterpw"]);


        $sql = "SELECT * FROM sellers WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count>0){
            $_SESSION["adding_status"] = 2;
            header("location:addseller_form.php");
        }else{
         
            
            echo $fname.$lname.$city.$mobile;

        if($password == $reenterpw){

            $query = "INSERT INTO sellers (fname,lname,shopname,email,psswrd,mobile,address,district) VALUES ('$fname','$lname','$bname','$email','$password','$mobile','$address','$city')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["adding_status"] = 1;
                header("location:addseller_form.php");
            }else{
                $_SESSION["adding_status"] = 0;
                header("location:addseller_form.php");
            }
        }else{
            $_SESSION["adding_status"] = 3;
            header("location:addseller_form.php");
        }
    }
    }

?>