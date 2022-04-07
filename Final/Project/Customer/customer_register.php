<?php

	session_start();
	include "../db/db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
	if(isset($_SESSION["register_status"])){
		if($_SESSION["register_status"] == 0){ 
			?>
		<script>
			swal({
  				title: "Something went wrong",
  				text: "Please Contact admins..",
  				icon: "error",
				});
		</script>
		<?php
		unset($_SESSION["register_status"]);
		}else if($_SESSION["register_status"] == 3){
			?>
		<script>
			swal({
  				title: "Password not matching",
  				text: "Password confirmation failed...",
  				icon: "warning",
				});
		</script>
		<?php
		unset($_SESSION["register_status"]);
		}else if($_SESSION["register_status"] == 2){
			?>
		<script>
			swal({
  				title: "Try again",
  				text: "Email address already in use...",
  				icon: "error",
				});
		</script>
		<?php
		}
		unset($_SESSION["register_status"]);
	}
	
?>	
	
	<?php include "navbar.php" ?>
		<div class="container-fluid">

		<div class="login">
 			<div class="loginheader">
   				<h1> Sign in </h1>
 			</div>
	
 				 <form method="post" action="register.php">
 				 	<label class="info">
 				   	<input type="text" name="fname" placeholder="First Name" required />
 				   	</label>
 				   	<label class="info">
 				   	<input type="text" name="lname" placeholder="Last Name" required />
 				   	</label>
 				   	<label class="info">
 				   	<input type="email" name="email" placeholder="Email" required />
 				   	</label>
					<label class="info">
 				   	<select name="city" placeholder="District" required>
							<option value="" checked>District</option>
							<?php 
								$getdistrict = "SELECT * FROM districts";
								$rundisquery = mysqli_query($conn, $getdistrict);
								while ($districts = mysqli_fetch_assoc($rundisquery)){
							?>
							<option value="<?php echo $districts['title']; ?>"><?php echo $districts['title']; ?></option>
							<?php 
							}
							?>
						</select>
 				   	</label>
 				   	<label class="info">
 				   	<input type="number" name="mobile" placeholder="Contact Number" required />
 				   	</label>
					<label class="info">
 				   	<input type="password" name="password" placeholder="Password" required />
 				   	</label>
					<label class="info">
 				   	<input type="password" name="reenterpw" placeholder="Confirm Password" required />
 				   	</label>
					<!-- <label class="info">
 				   	<input type="file" name="picture" placeholder="Profile Picture"/>.
 				   	</label> -->

 				   	<input type="submit" value='Register' name="register" class='btnlogin'>
 				 </form>
   			<div class='loginfooter'>
    			
   			</div> 
  	
			</div>

			


	</div>
	<?php include "footer.php" ?>

</body>
</html>