<html>
  <head>

  <meta charset="utf-8">
	<title>Login Here</title>
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
	if(isset($_SESSION["login_status"])){
		if($_SESSION["login_status"] == 1){ 
			?>
		<script>
			swal({
  				title: "Invalid Login",
  				text: "Email address not registered",
  				icon: "error",
				});
		</script>
		<?php
		unset($_SESSION["login_status"]);
		}else if($_SESSION["login_status"] == 2){
			?>
		<script>
			swal({
  				title: "Incorrect Password",
  				text: "Please enter the correct password",
  				icon: "warning",
				});
		</script>
		<?php
		unset($_SESSION["login_status"]);
		}
	}
	
?>	

  <div class="login" style="margin-top: 150px;">
 			<div class="loginheader">
   				<h1> Login </h1>
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
  	
			</div>
	
  
  </body>
</html>