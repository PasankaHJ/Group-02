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
	<style>
		.select_list {
			width: 300px;
			color: #014B70;
			font-size: 18px;
			height: 40px;
			border: 1px solid #014B70;
		}

		.btnfind {
			width: 300px;
			height: 40px;
			color: #fff;
			background-color: #F7941E;
			border-radius: 10px;
			margin-left: -40px;
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

        .card-div:hover {
            transform: scale(1.01);
        }

        /* General styling of all cards and heart divs */
        .img-div {
            width: 100%;
            height: 8em;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding-top: 0.2rem;
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

        /* text Container Styling general */

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
            font-size: 0.6em;
            font-weight: var(--title-font-weight);
            color: var(--heading-color);
        }

        .text-container .date {
            font-size: 0.9em;
            font-weight: var(--date-font-weight);
            color: var(--date-text-color);
        }

        /* Pricing and cart div */
        .pricing-and-cart {
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
            font-size: 0.6rem;
            font-weight: var(--pricing-font-weight);
            color: var(--previous-price-text-color);
            text-decoration: line-through;
            text-align: left;
        }

        .current-price {
            color: var(--current-price-text-color);
            font-size: 25px;
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
			<div class="carousel-inner">
				<div class="carousel-item filter active">
      				<img class="d-block w-100" src="images/homeslider_2.jpg" alt="First slide" style="height: 500px; width: 100%;">
			        <div class="carousel-caption">
          				<h1 class="h1"> </h1>
        			</div>
    			</div>
			</div>

			<br><br>
		<div class="row">
			<div class="column" style="width: 25%; background-color: #014B70; height: 100%; border-radius: 0 10px 10px 0; color: #fff; padding-left: 40px;">

				<h2>Choose Your choice</h2><br><br><br>
				
				<select name="price" class="select_list" id="price" onChange="getData()">
					<option disabled="disabled" selected=""> --- Maximum Price --- </option>
					<option value="75000"> 50000.00 </option>
					<option value="100000"> 100000.00 </option>
					<option value="150000"> 150000.00 </option>
					<option value="200000"> 200000.00 </option>
					<option value="250000"> 250000.00 </option>
					<option value="300000"> 300000.00 </option>
					<option value="350000"> 350000.00 </option>
					<option value="400000"> 400000.00 </option>
					<option value="450000"> 450000.00 </option>
					<option value="500000"> 500000.00 </option>
					<option value="more"> 500000.00 + </option>

				</select><br><br>


			</div>
			<div class="column" style="width: 75%;">
				<div id="display"></div>
			</div>
		</div>
		<div class="container" style="margin-bottom: -800px;">
				<div class="row" style="width: 95%; border: 5px solid #014B70; border-radius: 10px; color: #014B70; height: 60px;">
					<h1 style="margin-left: 60px;">All Laptops</h1>
				</div>
				
			</div>
<div id="display_all"></div>

		<br>

	</div>
	<?php include "footer.php"; ?>
</body>

</html>
<script>
	function getData() {
		var price = document.getElementById("price").value;
		$.ajax({
			url: 'get_laptop_details.php',
			type: 'POST',
			data: ({
				price: price
			}),

			success: function(response) {
				console.log(response);
				$('#display').html(response);
			}
		});

	}

	$(document).ready(function() {
		fetchAllLaptops();
	});
	function fetchAllLaptops() {
		var action = "fetch_laptops";

		$.ajax ({
			url: 'fetch_all_laptops.php',
        method: "POST",
        data: {
          action: action

        },
        success: function(data) {
          $('#display_all').html(data);

        }
		});

	}
</script>