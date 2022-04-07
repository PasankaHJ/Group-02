<?php
session_start();
include "../../db/db.php";

if(isset($_POST["add"])) {

        $seller_id = $_SESSION["sid"];
        $title = $_POST["title"];
        $description = $_POST["descroption"];
        $price = $_POST["price"];
        $image = $_POST["image_name"];
        $type_id = $_POST["category"];
         

            $query = "INSERT INTO parts (title,seller_id,description,image,price,type_id) VALUES ('$title','$seller_id','$description','$image','$price','$type_id')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["adding_status"] = 1;
                header("location:parts.php");
            }else{
                $_SESSION["adding_status"] = 0;
                header("location:add_part_form.php");
            }

    }

?>