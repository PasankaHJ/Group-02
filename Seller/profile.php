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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		.seller_home_img {
			margin-top: 100px;
		}

		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;700;800;900&display=swap');

		body {
			width: 100%;
		}

		.container {
			margin-top: 80px;
			max-width: 100%;
			display: flex;
			justify-content: center;
			align-content: flex-start;
			min-height: 30em;
			box-sizing: border-box;
		}

		/* Card Styling */
		.card-div {
			width: 300px;
			min-height: 20em;
			height: 420px;
			justify-items: center;
			align-items: center;
			margin: 40px;
			box-sizing: border-box;
			border-radius: 10px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.12);
			transition: transform 0.2s ease-in-out;
			margin-left: 60px;
		}


		/* ======== General styling of all cards and heart divs ========== */
		.img-div {
			width: 100%;
			height: 8em;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding-top: 1rem;
			z-index: 1;
			border-radius: 0 0 10px 10px;
		}

		.img-div img {
			transform-origin: bottom;
			transform: translateY(7.5%);
			transition: transform 0.3s ease-in-out
		}

		/* God of war image and heart-background*/

		.gow-img-div img {
			margin-top: 10px;
			width: 65%;
			transform: translateY(7.5%);
		}

		/* ======== text Container Styling general ======== */

		.text-container {
			width: 100%;
			display: flex;
			flex-direction: column;
			padding: 0 1.5em;
			padding-top: 7em;
			padding-bottom: 1em;
			margin-top: -20px;
			box-sizing: border-box;
		}

		.text-container .item-name,
		.text-container .date {
			margin: 0.25em 0;
			text-align: center;
		}

		.text-container .item-name {
			color: #014B70;
			font-size: 1.2em;
			font-weight: var(--title-font-weight);
			color: var(--heading-color);
		}

		.text-container .date {
			font-size: 0.9em;
			font-weight: var(--date-font-weight);
			color: var(--date-text-color);
		}

		/* === Pricing and cart div  ===== */
		.pricing-and-cart {
			/* background-color: wheat; */
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: center;
			margin: 0.25em 0 1em 0;
			color: #014B70;
		}

		.pricing {
			display: flex;
			flex-direction: column;
			text-align: left;
		}

		.previous-price {
			font-size: 0.8rem;
			font-weight: var(--pricing-font-weight);
			color: var(--previous-price-text-color);
			text-decoration: line-through;
			/* background-color: whitesmoke; */
			text-align: left;
		}

		.current-price {
			color: var(--current-price-text-color);
			font-size: 30px;
			font-weight: var(--pricing-font-weight);
			width: 300px;
			height: 65px;
			padding: 10px;
			justify-content: center;
			padding-left: 60px;
			margin: 0;
			border-radius: 10px;
		}

		.pricing-and-cart {
			width: 100%;
		}

		.fa-shopping-cart {
			font-size: 1.3rem;
			top: 0;
			transform: translateY(50%);
		}
	</style>

</head>

<body>

	<?php include "navbar.php"; ?>


	<div class="container-fluid">

		<center>
			<div class="row" style="margin-top: 120px; margin-left: 70px;">
				<div class="column" style="margin-left: 120px;">
					<div class="card">
						<img src="../images/computer.jpg" height="200" width="200">
						<div class="card-txt">
							<a href="computers/computers.php">
								<h3> Computers </h3>

							</a>
						</div>
					</div>
				</div>
				<div class="column" style="margin-left: 120px;">
					<div class="card">
						<img src="../images/laptop.jpg" height="200" width="200">
						<div class="card-txt">
							<a href="laptops/laptops.php">
								<h3> Laptops </h3>
							</a>
						</div>
					</div>
				</div>
				<div class="column" style="margin-left: 120px;">
					<div class="card">
						<img src="../images/accessories.jpg" height="200" width="200">
						<div class="card-txt">
							<a href="accessories/accessories.php">
								<h3> Accessories </h3>
							</a>
						</div>
					</div>
				</div>
				<div class="column" style="margin-left: 120px;">
					<div class="card">
						<img src="../images/parts.jpg" height="200" width="200">
						<div class="card-txt">
							<a href="parts/parts.php">
								<h3> Parts </h3>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="seller_home_img">
				<div class="container-fluid">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" style="border-radius: 50px;">
							<div class="carousel-item filter active">
								<img class="d-block w-100" src="../images/homeslider_3.jpg" alt="First slide" style="height: 768px;">
								<div class="carousel-caption">
									<h1 class="h1">Welcome to Your PC solutions</h1>
								</div>
							</div>

							<div class="carousel-item filter" style="border-radius: 50px;">
								<img class="d-block w-100" src="../images/homeslider_2.jpg" alt="Second slide" style="height: 768px;">
								<div class="carousel-caption">
									<h1 class="h1">Welcome to Your PC solutions</h1>
								</div>
							</div>

							<div class="carousel-item filter" style="border-radius: 50px;">
								<img class="d-block w-100" src="../images/homeslider_1.jpg" alt="Third slide" style="height: 768px;">
								<div class="carousel-caption">
									<h1 class="h1">Welcome to Your PC solutions</h1>
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
			</div>
			<h1>Customer Requests</h1>
			<div class="uline" style="width: 400px;"></div>

			<div class="row" style="width: 100%; align-items: center; justify-content: center;">
				<div class="column" style="margin: 60px;">
					<h3 onclick="fetch_pending_request()">Pending Requests</h3>
					<div class="uline" id="pending" style="width: 300px;"></div>
				</div>
				<div class="column" style="margin: 60px;">
					<h3 onclick="fetch_accepted_request()">Accepted Requests</h3>
					<div class="uline" id="accepted" style="width: 300px;"></div>
				</div>
				<div class="column" style="margin: 60px;">
					<h3 onclick="fetch_rejected_request()">Rejected Requests</h3>
					<div class="uline" id="rejected" style="width: 300px;"></div>
				</div>
			</div>
			<div class="row">
				<div id="requests"></div>
			</div>

		</center>

	</div>

	<?php include "footer.php"; ?>
	<script>
		$(document).ready(function() {

			fetch_pending_request();

		});

		function fetch_pending_request() {
			document.getElementById("pending").style.display = "block";
			document.getElementById("accepted").style.display = "none";
			document.getElementById("rejected").style.display = "none";

			$.ajax({
				url: "fetch_pending_request.php",
				type: "POST",
				data: ({}),
				success: function(data) {
					$('#requests').html(data);
				}
			});
		}

		function fetch_accepted_request() {
			document.getElementById("pending").style.display = "none";
			document.getElementById("accepted").style.display = "block";
			document.getElementById("rejected").style.display = "none";

			$.ajax({
				url: "fetch_accepted_request.php",
				type: "POST",
				data: ({}),
				success: function(data) {
					$('#requests').html(data);
				}
			});
		}

		function fetch_rejected_request() {
			document.getElementById("pending").style.display = "none";
			document.getElementById("accepted").style.display = "none";
			document.getElementById("rejected").style.display = "block";

			$.ajax({
				url: "fetch_rejected_request.php",
				type: "POST",
				data: ({}),
				success: function(data) {
					$('#requests').html(data);
				}
			});
		}

		function accept(id,cat) {
			var id = id;
			var cat = cat;

			$.ajax({
				url: "accept.php",
				type: "POST",
				data: ({
					id: id,
					cat: cat
				}),
				success: function(response) {
					swal("Accepted", {
						icon: "success",
					});
					fetch_pending_request();
				}

			});
		}

		function reject(id,cat) {
			var id = id;
			var cat = cat;

			swal({
					title: "Are you sure?",
					text: "",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
				url: "reject.php",
				type: "POST",
				data: ({
					id: id,
					cat: cat
				}),
				success: function(response) {
					swal("Rejected successfully", {
						icon: "success",
					});
					fetch_pending_request();
				}

			});
					} else {
						swal("Your imaginary file is safe!");
					}
				});

		}
	</script>
</body>

</html>