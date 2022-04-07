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
 				   	<input type="text" name="shop_name" placeholder="Company Name" required />
 				   	</label>
						<label class="info">
 				   	<input type="file" name="picture" id="image" placeholder="Company logo"/>.
 				   	</label>
						<label class="info">
 				   	<input type="text" name="address" placeholder="Address" required />
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

						<div id="image_name"></div>

 				   	<input type="submit" value='Register' name="register" class='btnlogin' onclick="return formValidation()">
 				 </form>
   			<div class='loginfooter'>
    			
   			</div> 
  	
			</div>

			


	</div>
	<?php include "footer.php" ?>

</body>
<script>
    $(document).ready(function() {
        $(document).on('change', '#image', function() {

            var property = document.getElementById("image").files[0];

            var img_name = property.name;
            var img_extention = img_name.split('.').pop().toLowerCase();
            console.log(img_extention);

            if (jQuery.inArray(img_extention, ['png', 'jpg', 'jpeg', 'gif']) == -1) {
                swal({
                    title: "Invalid file type.",
                    text: "Choose another image...",
                    icon: "error",
                });
            }

            var img_size = property.size;

            if (img_size > 2000000) {
                swal({
                    title: "File is too large..",
                    text: "Choose another image...",
                    icon: "error",
                });
            } else {
                var form_data = new FormData();
                form_data.append("image", property);

                $.ajax({
                    url: "upload_logo.php",
                    type: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,

                    success: function(data) {
                        $('#image_name').html(data);
                    }
                })
            }

        });
    });

	//Form validation
	function formValidation(){
            var fnm = document.forms["CusRegiForm"]["fname"].value;
            var lnm = document.forms["CusRegiForm"]["lname"].value;
            var email = document.forms["CusRegiForm"]["email"].value;
            var shopname = document.forms["CusRegiForm"]["shop_name"].value;
            var pic = document.forms["CusRegiForm"]["picture"].value;
            var address = document.forms["CusRegiForm"]["address"].value;
            var city = document.forms["CusRegiForm"]["city"].value;
            var tell = document.forms["CusRegiForm"]["mobile"].value;
            var pw = document.forms["CusRegiForm"]["password"].value;
            var cpw = document.forms["CusRegiForm"]["reenterpw"].value;

            // checking whether all the required fields are filled
            if(fnm!="" && lnm!="" && email!="" && shopname!="" && pic!="" && address!="" && city!="" && tell!="" &&  pw!="" && cpw!=""){
                //checking the first-name only contains alphebet letters
				var letters = /^[A-Za-z]+$/ ;
				if(fnm.match(letters)){
                    //checking the last-name only contains alphebet letters 
					if(lnm.match(letters)){
                        //Checking the validation of the Email address 
                        var validemail = /^[a-zA-Z0-9.!#$%&'*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                        if(email.match(validemail)){
                                //checking whether the password is a strong
								var validpw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;
                                if(pw.match(validpw) && pw.length>7){
                                    //checking whether the password and the confirm password is same
									if(pw==cpw){
										return true;
									}else{
										alert("Passwords are not same!");
										return false;
									}
                                }else{
                                    alert("Invalid password! Please provide a strong password using both lower and upper case letters, numeric and symbols. Use 8 or more characters.");
									return false;
                                }
                        }else{
                            alert("Invalid email address");
				            return false;
                        }
                    }else{
						alert("Invalid input for the last name.");
						return false;
				}
                }else{
						alert("Invalid input for the first name.");
						return false;
				}
            }else{
                alert("Please fill all the fields.");
				return true;
            }
        }

</script>
</html>