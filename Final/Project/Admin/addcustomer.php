<?php 
session_start();
include "../db/db.php";

if(isset($_POST["add"])){
    $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $district = $_POST["district"];
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $mobile = $_POST["mobile"];
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $reenterpw = mysqli_real_escape_string($conn,$_POST["reenterpw"]);


        $sql = "SELECT * FROM customer WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count>0){
            $_SESSION["add_status"] = 2;
            header("location:add_customer_form.php");
        }else{
            

        if($password == $reenterpw){

            $query = "INSERT INTO customer (fname,lname,email,pswrd,mobile,district) VALUES ('$fname','$lname','$email','$password','$mobile','$district')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["add_status"] = 1;
                header("location:add_customer_form.php");
            }else{
                $_SESSION["add_status"] = 0;
                header("location:add_customer_form.php");
            }
        }else{
            $_SESSION["add_status"] = 3;
            header("location:add_customer_form.php");
        }
    }


}

?>