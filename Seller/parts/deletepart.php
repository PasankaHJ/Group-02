<?PHP 

session_start();
include "../db/db.php";

    $id = $_POST["delete_id"];
    $delete_customer = "DELETE FROM parts WHERE id='$id'";

    if (mysqli_query($conn, $delete_customer)){
          header("location:parts.php");
    }else{
          header("location:parts.php");
    }


?>