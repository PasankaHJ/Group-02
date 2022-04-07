<?php
session_start();
include "../db/db.php";

if(isset($_POST["add"])) {

        $processor = $_POST["processor"];
        $mb = $_POST["motherboard"];
        $ram = $_POST["ram"];
        $vga = $_POST["vga"];
        $hdd = $_POST["storage"];
        $psu = $_POST["psu"];
        $casing = $_POST["casing"];
        $description = $_POST["descroption"];
        $price = $_POST["price"];
        $purpose = $_POST["purpose"];
         

            $query = "INSERT INTO builds (processor,motherboard,ram,graphics_card,storage,psu,casing,description,price,purpose) VALUES ('$processor','$mb','$ram','$vga','$hdd','$psu','$casing','$description','$price','$purpose')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["adding_status"] = 1;
                header("location:addbuild_form.php");
            }else{
                $_SESSION["adding_status"] = 0;
                header("location:addbuild_form.php");
            }

    }

?>