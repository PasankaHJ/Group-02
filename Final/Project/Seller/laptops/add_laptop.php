<?php
session_start();
include "../../db/db.php";

if(isset($_POST["add"])) {

        $processor = $_POST["processor"];
        $title = $_POST["title"];
        $ram = $_POST["ram"];
        $vga = $_POST["vga"];
        $hdd = $_POST["storage"];
        $description = $_POST["descroption"];
        $price = $_POST["price"];
        $image = $_POST["image_name"];
         

            $query = "INSERT INTO laptops (processor,title,ram,gpu,storage,description,image,price) VALUES ('$processor','$title','$ram','$vga','$hdd','$description','$image','$price')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["adding_status"] = 1;
                header("location:laptops.php");
            }else{
                $_SESSION["adding_status"] = 0;
                header("location:add_laptop_form.php");
            }

    }

?>