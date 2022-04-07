<?php 
include "db/db.php";
$id = $_POST["id"];
$query = "UPDATE requests SET status = 1 WHERE id = $id";
$run = mysqli_query($conn, $query);
$row = mysqli_fetch_array($run);

$cus_id = $row["cus_id"];
$sel_id = $row["seller_id"];

$q1 = "SELECT * FROM customer WHERE id = $cus_id";
$rs1 = mysqli_query($conn, $q1);
$r1 = mysqli_fetch_array($rs1);

$q2 = "SELECT * FROM sellers WHERE id = $sel_id";
$rs2 = mysqli_query($conn, $q2);
$r2 = mysqli_fetch_array($rs2);

    $mail = $r1['email'];
    $seller = $r2["shopname"];
    $cusname = $r1["fname"];

    try {

        $to      = $mail;
        $subject = 'Request Accepted';
        $message = 'Dear '.$cusname.', '.$seller.' had accepted your request. Thank you for join with us.... Have a nice Day.';
        $headers = 'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>