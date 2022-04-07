<?PHP 

session_start();
include "../db/db.php";

    $id = $_POST["delete_id"];
    $delete_customer = "DELETE FROM customer WHERE id='$id'";

    if (mysqli_query($conn, $delete_customer)){
          header("location:viewcustomers.php");
    }else{
          header("location:viewcustomers.php");
    }


?>