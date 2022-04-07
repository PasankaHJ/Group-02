<?php 
session_start();
include "../db/db.php";

$id = $_POST["pc_id"];

$query = "SELECT * FROM laptops WHERE id = $id";
$run = mysqli_query($conn, $query);
$r = mysqli_fetch_array($run);

$sel_id = $r["seller_id"];

$sql = "SELECT * FROM  sellers WHERE id = $sel_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$cus_id = $_SESSION["uid"];
$sel_name = $row["fname"];

$qq = "SELECT * FROM customer WHERE id = $cus_id";
$resres = mysqli_query($conn, $qq);
$rrr = mysqli_fetch_array($resres);

    $mail = $row['email'];
    $cus_mail = $rrr["email"];
    $cus_fname = $rrr["fname"];
    $cus_lname = $rrr["lname"];
    $cus_mobile = $rrr["mobile"];

    try {

        $type = "laptops";
        $insert_request = "INSERT INTO requests (seller_id,item_id,type,cus_id) VALUES ($sel_id,$id,'$type',$cus_id)";
        $run_insert_request = mysqli_query($conn, $insert_request);

        $to      = $mail;
        $subject = 'New request For a Laptop';
        $message = 'Dear '.$sel_name.', Mr/Mrs '.$cus_fname.' '.$cus_lname.' is asking for a Laptop( Laptop ID = '.$id.') from your shop. Contact the customer( email address = '.$cus_mail.' / Telephone = '.$cus_mobile.' ) to keep the business going. Thank you.... Have a nice Day.';
        $headers = 'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        

    } catch (Exception $e) {
        echo $e->getMessage();
    }


?>