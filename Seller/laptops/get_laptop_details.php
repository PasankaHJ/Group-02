<?php
session_start();
include "../../db/db.php";

    $id = $_SESSION['sid'];
    $output = "";
    $get_laptop_details = "SELECT * FROM laptops WHERE seller_id='$id' ORDER BY id DESC";
    $run = mysqli_query($conn, $get_laptop_details);

    $output .= "<div class='row'>
    <div class='column'>
    <div class='row'>
    <div class='column'>
    <a href='add_laptop_form.php' style='text-decoration: none; color: black;'>
        <div class='card-div' style='padding: 50px; margin-right: 40px;'>
            <center>
                <br><br><h1><i class='fa fa-plus' style='font-size: 110px;'></i></h1><br><br>
                <h1>Add New</h1>
        </center>
     </div>
     </a>
     </div>
     </div>
     </div>
                
                ";

    while ($row = mysqli_fetch_array($run)) {

        $output .= "
        
                <div class='column'>
                <div class='row'>
                <div class='column'>
                <a href='view_laptop.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                    <div class='card-div'>        
                        <div class='gow-img-div img-div'>
                            <img src='../../images/uploads/laptops/".$row["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                        </div>
                        <div class='text-container'>
                            <h2 class='item-name'>" . $row["title"] . "</h2>
                            <p class='date'> " . $row["processor"] . " </p>
                            <p class='date'> " . $row["gpu"] . " </p>
                            <p class='date'> " . $row["ram"] . " </p>
                            <div class='pricing-and-cart'>
                                <div class='pricing'>
                                    <p class='current-price'> Rs." . number_format($row["price"], 2) . "</p>
                                </div>
                            </div>
                        </div>
                 </div>
                 </a>
                 </div>
                 <div class='column' style='margin-left: 0px;'>
                 <a href='edit_laptop.php?id=".$row["id"]."'><button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 30px; '><i class='fa fa-pencil' style='color: white;'></i></button><br></a>
                 <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 15px; background-color: #ae2012;' onclick='deletelaptop(".$row["id"].")'><i class='fa fa-trash' style='color: white;'></i></button></div>
                 </div>
                 </div>
                 ";
    }

    $output .= "</div>";
    echo $output;

    ?>
