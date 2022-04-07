<?php
	session_start();
	include "../db/db.php";

	if(isset($_POST["submit"])) {
		if(isset($_POST["email"]) && isset($_POST["password"])){

		$entered_email = mysqli_real_escape_string($conn,$_POST["email"]);
		$entered_pw = mysqli_real_escape_string($conn,$_POST["password"]);

		//echo $entered_email.$entered_pw;

		$query = "SELECT * FROM admins WHERE email = '$entered_email'";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);

		if($count == 1) {

			$row = mysqli_fetch_array($result);
			$pass = $row["password"];

			if ($entered_pw == $pass) {

				$id = $row["id"];
				$name = $row["fname"];

				$_SESSION["aid"] = $id;
				$_SESSION["aname"] = $name;
                $_SESSION["login_status"] = 0;

				header("location:profile.php");
			}else {
				$_SESSION["login_status"] = 2 ;
				header("location:index.php");
			}
		}else{
			$_SESSION["login_status"] = 1;
            header("location:index.php");
		}

		}
	}

?>