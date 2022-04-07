<?php  
include "db/db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$query = "INSERT INTO mails (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn, $query);

?>