<?PHP 

session_start();
include "../../db/db.php";

    $id = $_POST["delete_id"];
    $delete_laptop = "DELETE FROM laptops WHERE id='$id'";

    if (mysqli_query($conn, $delete_laptop)){
          header("location:laptops.php");
    }else{
          header("location:laptops.php");
    }


?>