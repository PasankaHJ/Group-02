<?php
session_start();
include "db/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		.select_list {
			width: 300px;
			color: #014B70;
			font-size: 18px;
			height: 40px;
			border: 1px solid #014B70;
		}
		.uline {
			transition: 0.5s;
		}
	</style>

</head>

<body>

	<?php
	if (isset($_SESSION["comment_stat"])) {
		if ($_SESSION["comment_stat"] == 0) {
	?>
			<script>
				swal("Successful..", "Your comment will be added..", "success");
			</script>
		<?php
			unset($_SESSION["comment_stat"]);
		} else {
		?>
			<script>
				swal("Failed..", "Your comment will not be added..", "info");
			</script>
	<?php
			unset($_SESSION["comment_stat"]);
		}
	}
	?>

	<?php include "navbar.php" ?>


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
				</div>

				<div class="carousel-item filter">
					<img class="d-block w-100" src="images/homeslider_2.jpg" alt="Second slide" style="height: 768px;">
				</div>

				<div class="carousel-item filter">
					<img class="d-block w-100" src="images/homeslider_1.jpg" alt="Third slide" style="height: 768px;">
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

		<div class="background" style="margin-top: 120px; padding: 20px;">
			<input type="hidden" id="h_id" value="<?php echo $_SESSION["uid"]; ?>">
			<h1 style="margin-top: 50px;">Your requests</h1>
			<div class="uline"></div>
			<div class="row" style="align-items: center; width: 100%; justify-content:center;">
				<div class="column" style="margin: 20px; width: 30%;">
					<h2 style="margin-top: 50px;" onclick="fetch_pending_request()">Pending Requests</h2>
					<div class="uline" id="pending"></div>
				</div>
				<div class="column" style="margin: 20px; width: 30%;">
					<h2 style="margin-top: 50px;" onclick="fetch_accepted_request()">Accepted Requests</h2>
					<div class="uline" id="accepted"></div>
				</div>
				<div class="column" style="margin: 20px; width: 30%;">
					<h2 style="margin-top: 50px;" onclick="fetch_rejected_request()">Rejected Requests</h2>
					<div class="uline" id="rejected"></div>
				</div>
			</div>
			<div class="row" style="align-items: center; width: 100%; justify-content:center;">
				<div id="requests" style="margin-top: 30px;">
				</div>
			</div>

		</div>

		<div class="background" style="margin-top: 120px; padding: 40px;">
			<h2>Happy Customers</h2>
			<div class="uline"></div>
			

			<div id="comments"></div>

				
			</div>
		</div>

		<div class="background" style="padding: 20px; margin-top: 70px;">
			<h2>Say something as <?php echo $_SESSION['uname']; ?></h2>
			<div class="uline" style="width: 500px;"></div>
			<div class="row">
					<label for="">
						<input type="text" id="comment" placeholder="Give your ideas..." style="width: 1000px; margin-left: 200px; margin-top: 30px; height: 50px; border: 3px solid #014B70; border-radius: 25px; padding: 20px;">
						<button name="add" class="send" onclick="send_comment()"><i class="fa fa-send"></i></button>
					</label>
					<label for="">

					</label>
			</div>
		</div>

	</center>

	</div>
	<?php include "footer.php" ?>
</body>
<script>
	$(document).ready(function() {

		var id = document.getElementById("h_id").value;

		fetch_pending_request();
		fetch_comments();

	});

	function fetch_pending_request() {
		var id = document.getElementById("h_id").value;
		document.getElementById("pending").style.display = "block";
		document.getElementById("accepted").style.display = "none";
		document.getElementById("rejected").style.display = "none";

		$.ajax({
			url: "fetch_pending_request.php",
			type: "POST",
			data: ({
				id: id
			}),
			success: function(data) {
				$('#requests').html(data);
			}
		});
	}

	function fetch_accepted_request() {
		var id = document.getElementById("h_id").value;
		document.getElementById("pending").style.display = "none";
		document.getElementById("accepted").style.display = "block";
		document.getElementById("rejected").style.display = "none";

		$.ajax({
			url: "fetch_accepted_request.php",
			type: "POST",
			data: ({
				id: id
			}),
			success: function(data) {
				$('#requests').html(data);
			}
		});
	}

	function fetch_rejected_request() {
		var id = document.getElementById("h_id").value;
		document.getElementById("pending").style.display = "none";
		document.getElementById("accepted").style.display = "none";
		document.getElementById("rejected").style.display = "block";

		$.ajax({
			url: "fetch_rejected_request.php",
			type: "POST",
			data: ({
				id: id
			}),
			success: function(data) {
				$('#requests').html(data);
			}
		});
	}

	function fetch_comments() {
		var id = document.getElementById("h_id").value;
		$.ajax({
			url: "fetch_comments.php",
			type: "POST",
			data: ({
				id: id
			}),
			success: function(data) {
				$('#comments').html(data);
			}
		});
	}

	 function send_comment() {
	 	var id = document.getElementById("h_id").value;
	 	var comment = document.getElementById("comment").value;

	 	$.ajax({
	 		url: "addcomment.php",
	 		type: "POST",
	 		data: ({
	 			id: id,
	 			comment: comment,
	 		}),
	 		success: function(data) {
				swal("Added comment Successfully!", "Please wait for admin's approvel of your comment!", "success");
	 			fetch_comments();
	 		}
	 	});
	 }
</script>

</html>