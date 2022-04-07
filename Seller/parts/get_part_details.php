<?php
session_start();
include "../db/db.php";

    $id = $_SESSION['sid'];
    $output = "";
    $get_part_details = "SELECT * FROM parts WHERE seller_id='$id' ORDER BY id DESC";
    $run = mysqli_query($conn, $get_part_details);

    $output .= "<div class='row'>
    <div class='column'>
    <div class='row'>
    <div class='column'>
    <a href='add_part_form.php' style='text-decoration: none; color: black;'>
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
        $cat = $row["type_id"];
        $qqq = "SELECT * FROM part_type WHERE id = $cat";
        $rere = mysqli_query($conn, $qqq);
        $rrr = mysqli_fetch_array($rere);

        $output .= "
        
                <div class='column'>
                <div class='row'>
                <div class='column'>
                <a href='view_part.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                    <div class='card-div'>        
                        <div class='gow-img-div img-div'>
                            <img src='../images/uploads/parts/".$row["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                        </div>
                        <div class='text-container'>
                            <h2 class='item-name'>" . $row["title"] . "</h2>
                            <p class='date'> " . $rrr["title"] . " </p>
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
                 <a href='edit_part.php?id=".$row["id"]."'><button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 30px; '><i class='fa fa-pencil' style='color: white;'></i></button><br></a>
                 <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 15px; background-color: #ae2012;' onclick='deletepart(".$row["id"].")'><i class='fa fa-trash' style='color: white;'></i></button></div>
                 </div>
                 </div>
                 ";
    }

    $output .= "</div>";
    echo $output;

    ?>
