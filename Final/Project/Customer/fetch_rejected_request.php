<?php
    include "../db/db.php";

    $id = $_POST["id"];
    $output = "";

    $fetch_pending_request = "SELECT * FROM requests WHERE cus_id=$id AND status = 2";
    $run = mysqli_query($conn, $fetch_pending_request);

    $output .= '<div class="row" style="margin-top: 30px;">';
    
    while($row = mysqli_fetch_array($run)){

        $sel_id = $row["seller_id"];
        $q1 = "SELECT * FROM sellers WHERE id=$sel_id";
        $rs1 = mysqli_query($conn, $q1);
        $r1 = mysqli_fetch_array($rs1);

        

        $sel = $r1["shopname"];
        $cat = $row["type"];
        $itm = $row["item_id"];

        if($row["type"] === "computers"){
            $get_det = "SELECT * FROM builds WHERE id = $itm";
        $rs2 = mysqli_query($conn, $get_det);
        $r2 = mysqli_fetch_array($rs2);  

        $output .= '<div class="column">
                        <div class="testominal" style="margin: 40px;">
                        <img src="../images/uploads/'.$cat.'/'.$r2['image'].'" alt="" style="width: 60px; height: 60px;border-radius: 30px;">
                            <h4 style="color:#014B70;">Rs. '.number_format($r2['price'], 2).'</h4>
                            <div class="msg">'.$sel.'</div>
                        </div>
                    </div>';
            
        }else{
            $get_det = "SELECT * FROM $cat WHERE id = $itm";
        $rs2 = mysqli_query($conn, $get_det);
        $r2 = mysqli_fetch_array($rs2);  

        $output .= '<div class="column"">
                        <div class="testominal" style="margin: 40px;">
                        <img src="../images/uploads/'.$cat.'/'.$r2['image'].'" alt="" style="width: 60px; height: 60px;border-radius: 30px;">
                            <h4 style="color:#014B70;">Rs. '.number_format($r2['price'], 2).'</h4>
                            <div class="msg">'.$sel.'</div>
                        </div>
                    </div>';
        }

        

    }
    $output .= '</div>';

    echo $output;


?>