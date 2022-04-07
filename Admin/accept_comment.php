<?PHP 

session_start();
include "../db/db.php";

    $id = $_POST["accept_id"];
    $delete_customer = "UPDATE sitereviews SET status = 1 WHERE id = $id";

    if (mysqli_query($conn, $delete_customer)){
    }else{
    }


?>