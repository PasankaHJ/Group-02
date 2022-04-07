<?php
session_start();
include "db/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>
		.about_container{
            width: 99%;
            border-radius: 400px 0 400px 0;
            background-color: #014B70;
            color: white;
            margin: auto;
            padding: 3%;
        }
        .inside_about{
            width: 60%;
            margin: auto;
            text-align: center;
        }
        .about_heading{
            text-align: center;
            font-size: 50px;
        }
        .about_content{
            text-align: justify;
        }
	</style>
</head>
<body>
		
<?php include "navbar.php"; ?>

<div class="container-fluid">
	<div class="carousel-inner">
		<div class="carousel-item filter active">
      		<img class="d-block w-100" src="images/about_us_slide.jpg" alt="First slide" style="height: 500px; width: 100%;">
			<div class="carousel-caption">
          		<h1 class="h1">About us...</h1>
        	</div>
    	</div>
	</div>
</div>
<br>
    <div class="about_container">
        <div class="inside_about">
            <h1 class="about_heading">Computer Solutions Application</h1>
            <p class="about_content">
                This is a web based service application. The main purpose of the application is that the customer can get a good idea about computers, laptops, and even PC components. Customers can connect with PC sellers who have a piece of thorough knowledge about what they sell and almost every detail displayed with the item. Customers can buy a good PC that matches their budget. Even customers can build a wish list. They can order the product via the application. 
                <br><br>
                PC sellers can register for this service by providing their information and qualifications. 
                After registering they can add items to the website with a good description and with a warranty. Both the customer and the seller can save their time because of this application. So, we can enhance the efficiency. 
                <br><br>
                Also, technicians can register for this application. They must provide their details, qualifications, and more than two years of experience in their carrier for that. Customers can connect with the technicians to clarify their problems by contacting them.
            </p>
            <br><br>
            <img src="images/logo/logo.png" alt="logo" class="about_logo"> 
        </div>
    </div>
<?php include "footer.php"; ?>

</body>
</html>