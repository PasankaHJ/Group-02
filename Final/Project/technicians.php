<?php
session_start();
include "db/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	
<?php include "navbar.php"; ?>
		<div class="container-fluid">
			<div class="carousel-inner">
				<div class="carousel-item filter active">
      				<img class="d-block w-100" src="images/technician.jpg" alt="First slide" style="height: 500px; width: 100%;">
			        <div class="carousel-caption">
          				<h1 class="h1"></h1>
           				 <!--<p class="p">txt</p>-->
        			</div>
    			</div>
			</div>

	</div>
	<br><br>
		<div class="row">
			<div class="column" style="width: 25%; background-color: #014B70; height: 100%; border-radius: 0 10px 10px 0; color: #fff; padding-left: 40px;">

				<h2>Choose Category</h2><br><br><br>
				<select name="category" class="select_list" id="category" onchange="getData()">
					<option disabled="disabled" selected=""> -- Select Category -- </option>

					<?php
					$query_1 = "SELECT * FROM accesories_types";
					$result_1 = mysqli_query($conn, $query_1);

					while ($row_purpose = mysqli_fetch_assoc($result_1)) {
					?>
						<option value="<?php echo $row_purpose['id']; ?>"> <?php echo $row_purpose["title"]; ?> </option>
					<?php

					}
					?>
				</select><br><br>

			</div>
			<div class="column" style="width: 75%;">
				<div id="display"></div>
			</div>
		</div>
		<div class="container" style="margin-bottom: -1000px;">
				<div class="row" style="width: 95%; border: 5px solid #014B70; border-radius: 10px; color: #014B70; height: 60px;">
					<h1 style="margin-left: 60px;">All Accessories</h1>
				</div>
				
				
			</div>
<div id="display_all"></div>








		<br><br><br><br>

	</div>
	<?php include "footer.php"; ?>
</body>

</html>
<script>
	function getData() {
		var category = document.getElementById("category").value;
		$.ajax({
			url: 'get_accessory_details.php',
			type: 'POST',
			data: ({
				category: category,
			}),

			success: function(response) {
				console.log(response);
				$('#display').html(response);
			}
		});

	}

	$(document).ready(function() {
		fetchAllAccessories();
	});
	function fetchAllAccessories() {
		var action = "fetch_accessories";

		$.ajax ({
			url: 'fetch_all_accessories.php',
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