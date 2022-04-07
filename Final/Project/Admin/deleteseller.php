<?PHP 

include "../db/db.php";

    $id = $_POST["delete_id"];
    $delete_seller = "DELETE FROM sellers WHERE id='$id'";

    if (mysqli_query($conn, $delete_seller)){
          header("location:sellers.php");
    }else{
          header("location:sellers.php");
    }


?>