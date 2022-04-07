<?php
	session_start();
	include "db/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Here</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	<?php
		if(isset($_SESSION["login_status"])){
			if($_SESSION["login_status"] == 1){
				?>
				<script> swal("Invalid Login..!", "Please enter the correct password", "warning"); </script>
				<?php
				unset($_SESSION["login_status"]);
			}
		}

		if(isset($_SESSION["register_status"])){
			if($_SESSION["register_status"] == 1){
				?>
				<script> swal("Sign-up Completed", "Welcome to youtPC solutions", "success"); </script>
				<?php
				unset($_SESSION["register_status"]);
			}
		}
	?>

<?php include "navbar.php"; ?>

	<div class="container-fluid">

		<div class="login" style="margin-top: 100px;">
 			<div class="loginheader">
   				<h1> Sign in </h1>
 			</div>
	
 				 <form method="post" action="login.php">
 				   	<label class="info">
 				   	<i class="fa fa-user"></i>
 				   	<input type="email" name="email" placeholder="E mail" required />
 				   	</label>
 				   	<label class="info">
 				   	<i class="fa fa-key"></i>
 				   	<input type="password" name="password" placeholder="password" required />
 				   	</label>
 				   	<input type="submit" value='Login' name="submit" class='btnlogin'>
 				 </form>
   			<div class='loginfooter'>
    			<span>Don't have an account? <a href="seller_register.php">Sign up</a></span> <br/>
   			</div> 
  	
			</div>
	
		</div>

		<?php include "footer.php"; ?>

</body>
</html>