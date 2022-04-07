<?php
	session_start();
	include "../db/db.php";

	if(isset($_POST["submit"])) {
		if(isset($_POST["email"]) && isset($_POST["password"])){

		$entered_email = mysqli_real_escape_string($conn,$_POST["email"]);
		$entered_pw = mysqli_real_escape_string($conn,$_POST["password"]);

		//echo $entered_email.$entered_pw;

		$query = "SELECT * FROM sellers WHERE email = '$entered_email' AND psswrd = '$entered_pw'";
		$result = mysqli_query($conn,$query);

		$count = mysqli_num_rows($result);

		if($count == 1) {

			$row = mysqli_fetch_array($result);

				$id = $row["id"];
				$name = $row["fname"];

				$_SESSION["sid"] = $id;
				$_SESSION["sname"] = $name;
                $_SESSION["login_status"] = 0;

				header("location:profile.php");
		}else{
			$_SESSION["login_status"] = 1;
            header("location:seller_login.php");
		}

		}
	}

?>