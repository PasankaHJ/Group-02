<?php
session_start();
include "../db/db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION["adding_status"])) {
        if ($_SESSION["adding_status"] === 0) {
    ?>
            <script>
                swal({
                    title: "Something went wrong",
                    text: "Please Contact admins..",
                    icon: "error",
                });
            </script>
        <?php
            unset($_SESSION["adding_status"]);
        }
        
    }

    if (isset($_SESSION["image_stat"])) {
        if ($_SESSION["image_stat"] === 0) {
        ?>
            <script>
                swal({
                    title: "File is too large..",
                    text: "Choose another image...",
                    icon: "error",
                });
            </script>
        <?php
            unset($_SESSION["image_stat"]);
        } else if ($_SESSION["image_stat"] === 1) {
        ?>
            <script>
                swal({
                    title: "You can't upload this type file",
                    text: "Choose another image...",
                    icon: "error",
                });
            </script>
        <?php
            unset($_SESSION["image_stat"]);
        } else if ($_SESSION["image_stat"] === 2) {
        ?>
            <script>
                swal({
                    title: "Something went wrong",
                    text: "Please Contact admins..",
                    icon: "error",
                });
            </script>
    <?php
            unset($_SESSION["image_stat"]);
        }
    }

    ?>

<?php include "navbar.php"; ?>
    <div class="container-fluid">

        <div class="login" style="margin-top: 30px;">
            <div class="loginheader">
                <h1> Add new Laptop </h1>
            </div>

            <form method="post" action="add_laptop.php">
            <label class="info">
                    <input type="text" name="title" placeholder="Title" required />
                </label>
                <label class="info">
                    <input type="text" name="processor" placeholder="Processor" required />
                </label>
                <label class="info">
                    <input type="text" name="ram" placeholder="RAM" required />
                </label>
                <label class="info">
                    <input type="text" name="vga" placeholder="Graphics Memory" required />
                </label>
                <label class="info">
                    <input type="text" name="storage" placeholder="Storage" required />
                </label>
                <label class="info">
                    <input type="text" name="descroption" placeholder="Description"/>
                </label>
                <label class="info">
                    <input type="file" name="image" id="image" placeholder="Upload your image" />
                </label>
                <label class="info">
                    <input type="number" name="price" placeholder="price" required />
                </label>
                    
                    <div id="image_name"></div>

                <input type="submit" value='Add' name="add" class='btnlogin'>
            </form>
            <div class='loginfooter'>

            </div>

        </div>




    </div>
    <?php include "footer.php"; ?>
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
                    url: "upload_laptop.php",
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
</script>

</html>