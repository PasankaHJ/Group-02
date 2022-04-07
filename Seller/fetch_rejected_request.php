<?php
    session_start();
    include "db/db.php";

    $id = $_SESSION["sid"];
    $output = "";

    $fetch_pending_request = "SELECT * FROM requests WHERE seller_id=$id AND status = 2";
    $run = mysqli_query($conn, $fetch_pending_request);

    $output .= "<div class='row'>";
    
    while($row = mysqli_fetch_array($run)){

        $cus_id = $row["cus_id"];

        $q1 = "SELECT * FROM customer WHERE id=$cus_id";
        $rs1 = mysqli_query($conn, $q1);
        $r1 = mysqli_fetch_array($rs1);  

        $cus_fname = $r1["fname"];
        $cus_lname = $r1["lname"];
        $cus_email = $r1["email"];
        $cat = $row["type"];
        $itm = $row["item_id"];

        if($row["type"] === "computers"){
            $get_det = "SELECT * FROM builds WHERE id = $itm";
        $rs2 = mysqli_query($conn, $get_det);
        $r2 = mysqli_fetch_array($rs2);  

        $output .= "
        
                <div class='column'>
                <div class='row'>
                <div class='column'>
                    <div class='card-div'>        
                        <div class='gow-img-div img-div'>
                            <img src='images/uploads/computers/".$r2["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                        </div>
                        <div class='text-container'>
                            <h2 class='item-name'>" . $cus_fname . " " . $cus_lname . "</h2>
                            <p class='date'> " . $cus_email . " </p>
                            <div class='pricing-and-cart'>  
                                <div class='pricing'>
                                    <p class='current-price'> Rs." . number_format($r2["price"], 2) . "</p>
                                </div>
                            </div>
                        </div>
                 </div>
                 </div>
                 <div class='column' style='margin-left: 0px;'>
                 <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 30px; ' onclick='accept(".$row["id"].")'><i class='fa fa-check-square' style='color: white;'></i></button><br>
                 <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 15px; background-color: #ae2012;' onclick='reject(".$row["id"].")'><i class='fa fa-window-close' style='color: white;'></i></button></div>
                 </div>
                 </div>
                 ";
            
        }else{
            $get_det = "SELECT * FROM $cat WHERE id = $itm";
        $rs2 = mysqli_query($conn, $get_det);
        $r2 = mysqli_fetch_array($rs2);  

        $output .= "
        
        <div class='column'>
        <div class='row'>
        <div class='column'>
            <div class='card-div'>        
                <div class='gow-img-div img-div'>
                    <img src='images/uploads/".$cat."/".$r2["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                </div>
                <div class='text-container'>
                    <h2 class='item-name'>" . $cus_fname . " " . $cus_lname . "</h2>
                    <p class='date'> " . $cus_email . " </p>
                    <div class='pricing-and-cart'>  
                        <div class='pricing'>
                            <p class='current-price'> Rs." . number_format($r2["price"], 2) . "</p>
                        </div>
                    </div>
                </div>
         </div>
         </div>
         <div class='column' style='margin-left: 0px;'>
         <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 30px; ' onclick='accept(".$row["id"].")'><i class='fa fa-check-square' style='color: white;'></i></button><br>
         <button class='btnlogin' style='margin-left: -65px; height: 50px; width: 50px; border-radius: 25px; margin-top: 15px; background-color: #ae2012;' onclick='reject(".$row["id"].")'><i class='fa fa-window-close' style='color: white;'></i></button></div>
         </div>
         </div>
                 ";
        }

        

    }
    $output .= '</div>';

    echo $output;


?>