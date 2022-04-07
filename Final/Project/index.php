<?php
session_start();
include "db/db.php";

if (isset($_SESSION["uid"])) {
	header("location:customer/profile.php");
}else if (isset($_SESSION["sid"])) {
	header("location:seller/profile.php");
}else if (isset($_SESSION["tid"])) {
	header("location:technician/profile.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
</head>

<body>

<?php include "navbar.php"; ?>

	<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item filter active">
					<img class="d-block w-100" src="images/homeslider_3.jpg" alt="First slide" style="height: 768px;">
					<div class="carousel-caption">
						<h1 class="h1">Welcome to Your PC solutions</h1>
						<p class="p">You can get more services from us if you are a registered user</p>
						<p class="p">You can join with us</p>
						<p><a class="btn btn-lg btn-primary" href="customer/customer_register.php" role="button">Sign Up Now</a></p>
					</div>
				</div>

				<div class="carousel-item filter">
					<img class="d-block w-100" src="images/homeslider_2.jpg" alt="Second slide" style="height: 768px;">
					<div class="carousel-caption">
						<h1 class="h1">Welcome to Your PC solutions</h1>
						<p class="p">You can get more services from us if you are a registered user</p>
						<p class="p">You can join with us</p>
						<p><a class="btn btn-lg btn-primary" href="customer/customer_register.php" role="button">Sign Up Now</a></p>
					</div>
				</div>

				<div class="carousel-item filter">
					<img class="d-block w-100" src="images/homeslider_1.jpg" alt="Third slide" style="height: 768px;">
					<div class="carousel-caption">
						<h1 class="h1">Welcome to Your PC solutions</h1>
						<p class="p">You can get more services from us if you are a registered user</p>
						<p class="p">You can join with us</p>
						<p><a class="btn btn-lg btn-primary" href="customer/customer_register.php" role="button">Sign Up Now</a></p>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


	</div>
	<center>
		<div class="row" style="margin-top: 120px; margin-left: 70px;">
			<div class="column" style="margin-left: 120px;">
				<div class="card">
					<img src="images/computer.jpg" height="200" width="200">
					<div class="card-txt">
						<a href="computers.php">
							<h3> Computers </h3>
						</a>
					</div>
				</div>
			</div>
			<div class="column" style="margin-left: 120px;">
				<div class="card">
					<img src="images/laptop.jpg" height="200" width="200">
					<div class="card-txt">
						<a href="laptops.php">
							<h3> Laptops </h3>
						</a>
					</div>
				</div>
			</div>
			<div class="column" style="margin-left: 120px;">
				<div class="card">
					<img src="images/accessories.jpg" height="200" width="200">
					<div class="card-txt">
						<a href="accessories.php">
							<h3> Accessories </h3>
						</a>
					</div>
				</div>
			</div>
			<div class="column" style="margin-left: 120px;">
				<div class="card">
					<img src="images/parts.jpg" height="200" width="200">
					<div class="card-txt">
						<a href="parts.php">
							<h3> Parts </h3>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="background" style="margin-top: 120px; padding: 50px;">
			<h2>Happy Customers</h2>
			<div class="uline"></div>
			<div class="row" style="margin-top: 30px;">
			<?php 
				$comments = "SELECT * FROM sitereviews  ORDER BY id DESC LIMIT 3";
				$runquerycomments = mysqli_query($conn,$comments);
				while($getcomments = mysqli_fetch_array($runquerycomments)){

				$senderid = $getcomments["customer"];

				$customer = "SELECT * FROM customer WHERE id = '$senderid'";
				$runquerycustomers = mysqli_query($conn,$customer);
				$getcus = mysqli_fetch_array($runquerycustomers);
			?>

				<div class="col" style="width: 5%;">
					<div class="testominal">
						<img src="images/hacking-hackers-computer-anonymous-wallpaper-preview.jpg" alt="" style="width: 60px; height: 60px;border-radius: 30px;">
						<h4><?php echo $getcus["fname"]." ".$getcus["lname"]; ?></h4>
						<div class="msg">
							<?php echo $getcomments["comment"]; ?> 
						</div>
					</div>
				</div>

				<?php 
				}
				 ?>
			</div>
		</div>

	</center>

	</div>
	<?php include "footer.php"; ?>
</body>

</html>