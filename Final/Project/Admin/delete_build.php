<?PHP 

session_start();
include "../db/db.php";

    $id = $_POST["delete_id"];
    $delete_customer = "DELETE FROM builds WHERE id='$id'";

    if (mysqli_query($conn, $delete_customer)){
          header("location:builds.php");
    }else{
          header("location:builds.php");
    }


?>