<?php 
session_start();
include "db/db.php";

if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
    $senderid = $_POST["id"];

   $addcomment = "INSERT INTO sitereviews (customer,comment) VALUES ('$senderid','$comment')"; 

   if(mysqli_query($conn,$addcomment)){
       echo "ok";
   }else{
    echo "ok";
   }
}

?>