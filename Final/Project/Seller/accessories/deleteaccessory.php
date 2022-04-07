<?PHP 

session_start();
include "../../db/db.php";

    $id = $_POST["delete_id"];
    $delete_customer = "DELETE FROM accessories WHERE id='$id'";

    if (mysqli_query($conn, $delete_customer)){
          header("location:accessories.php");
    }else{
          header("location:accessories.php");
    }


?>