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
		.btn-send {
            max-width: 300px;
        }
	</style>

</head>
<body>
	
		
<?php include "navbar.php"; ?>

</div>
		<div class="container-fluid">
			<div class="carousel-inner">
				<div class="carousel-item filter active">
      				<img class="d-block w-100" src="images/contact_us_slider.jpg" alt="First slide" style="height: 500px; width: 100%;">
			        <div class="carousel-caption">
          				<h1 class="h1">Contact us..</h1>
           				 <p class="p"> </p>
        			</div>
    			</div>
			</div>	

			<div class="container" style="margin-bottom: -300px;">
				<div class="row justify-content-center pt-5 mt-5 pb-5">
					<div class="col-md-7">
					<h1 class="display-4">Contact us</h1>
					<hr class="bg-success">
					<p class="pb-0 mb-0">Just get in contact with us. We are happy to answer your questions.</p>
					<p class="text-danger small pt-0 mt-0">* All fields are required</p>
						<div class="row form-group">
							<label for="name" class="col-form-label col-md-4">Name</label>
							<div class="col-md-8">
							<input type="text" name="name" id="name" class="form-control" required>
							</div>
						</div>
						<div class="row form-group">
						<label for="email" class="col-form-label col-md-4">E-mail</label>
						<div class="col-md-8">
							<input type="email" name="email" id="email" class="form-control" required>
						</div>
						</div>
						<div class="row form-group">
						<label for="options" class="col-form-label col-md-4">Subject</label>
						<div class="col-md-8">
							<select class="form-select form-control" id="subject" required>
							<option selected disabled="disabled">How can we help you?</option>
							<option value="products">Products</option>
							<option value="Request">Request</option>
							<option value="Ideas">Ideas</option>
							<option value="Other">Other</option>
							</select>
						</div>
						</div>
						<div class="row form-group">
						<label for="message" class="col-form-label col-md-4">Message</label>
						<div class="col-md-8">
							<textarea name="message" id="message" class="form-control" rows="3" required></textarea>
						</div>
						</div>
						<div class="row form-group form-check">
						<label class="col-form-label form-check-label col-md-8">
						</label>
						</div>
						<div class="d-flex justify-content-center pt-3 mt-3">
						<button class="btn btn-info btn-block btn-send" style="background-color: #014B70;" onclick="submit()">Send</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	<?php include "footer.php"; ?>

</body>

<script>
	function submit() {
		var name = document.getElementById("name").value;
		var email = document.getElementById("email").value;
		var subject = document.getElementById("subject").value;
		var message = document.getElementById("message").value;

		$.ajax({
			url: "send_msg.php",
			type: "POST",
			data: ({
				name: name,
				email: email,
				subject: subject,
				message: message
			}), 
			success: function(data) {
				swal("Message sent..", {
                  icon: "success",
                });
			}
		});
	}
</script>
</html>