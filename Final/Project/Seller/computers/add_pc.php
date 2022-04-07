<?php
session_start();
include "../../db/db.php";

if(isset($_POST["add"])) {

        $id = $_SESSION["sid"];
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
        $image = $_POST["image_name"];
         

            $query = "INSERT INTO builds (processor,motherboard,ram,graphics_card,storage,psu,casing,description,image,price,purpose,seller_id) VALUES ('$processor','$mb','$ram','$vga','$hdd','$psu','$casing','$description','$image','$price','$purpose','$id')";
            
            if(mysqli_query($conn,$query)) {
                $_SESSION["adding_status"] = 1;
                header("location:computers.php");
            }else{
                $_SESSION["adding_status"] = 0;
                header("location:add_pc_form.php");
            }

    }

?>