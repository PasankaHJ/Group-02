<?php
session_start();
include "db/db.php";

?>
<html>
    <head>
    <meta charset="utf-8">
	<title> View </title>
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
        .display_area {
            min-height: 500px;
            width : 70%;
            box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.5);
            margin: 50px;
            margin-left: 230px;
            padding: 30px;
            padding-left: 60px;
            border-radius: 10px;
        }

        .price {
            font-size: 48px;
            margin-top: 140px;
        }

        table {
            margin: 50px;
        }
        tr {
            height: 60px;
        }

        th {
            font-size: 20px;
        }
        td {
            font-size: 20px;
            font-weight: 30px;
        }

        .back_btn {
            margin-left: 50px;
            margin-top: 20px;
            color: #014B70;
            box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.5);
            width: 300px;
            height: 70px;
            padding: 10px;
            border-radius: 10px;
        }

    </style>
	  

    </head>
    <body>
	<?php include "navbar.php"; ?>

<div class="container-fluid">

<?php
            $accessory_id = $_GET["id"];

            $query = "SELECT * FROM accessories WHERE id = '$accessory_id'";
            $run = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($run);
        ?>

        <div class="display_area">
            <div class="row">
                <div class="column" style="width: 360px;">
                    <div class="row">
                        <img src="images/uploads/accessories/<?php echo $row["image"]; ?>" alt="" style="height: 350px; width: 350px;">
                    </div>
                    <div class="row">
                        <div class="price">Rs. <?php echo number_format($row["price"], 2); ?></div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <?php 
                            $sel_id = $row["seller_id"];
                            $q = "SELECT * FROM sellers WHERE id = '$sel_id'";
                            $res = mysqli_query($conn, $q);
                            $r = mysqli_fetch_array($res);
                        ?>
                        <a href="viewseller.php?id=<?php echo $sel_id; ?>" style="color: #014B70;"><h3><i class="fa fa-shopping-bag" style="margin-right: 20px;"></i><?php echo $r["shopname"]; ?></h3></a>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                     <div id = "request_btn">
                        <button class="btnrequest" onclick="sendRequest(<?php echo $accessory_id; ?>)">Request &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-check-square-o" style="color: white;"></i></button>
                        
                        <button class="btnlike" style=" background-color: transparent;"><i class="fa fa-thumbs-o-up" style="color: #014B70;"></i></button>
                        <button class="btnlike" style=" background-color: transparent;"><i class="fa fa-thumbs-o-down" style="color: #014B70;"></i></button>
                        </div>
                    </div>
                </div>
                <div class="column" style="background-color: #F7941E; margin-left: 30px; width: 58%; border-radius: 10px;   height: 100%;">

                    <table border="0">
                        <tr>
                            <th width="200px">Title</th>
                            <td width="500px"><?php echo $row["title"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Description</th>
                            <td width="500px"><?php echo $row["description"]; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    
</div>
<?php include "footer.php"; ?>

    <script>
        function sendRequest(id) {

            document.getElementById("request_btn").style.display = "none";
            var accessory_id = id;

            $.ajax({
                url: 'send_request_accessory.php',
                type: 'POST',
                data: ({
                    accessory_id: accessory_id,
                }),

                success: function(data) {
                    swal("Request sent..", {
                  icon: "success",
                });
                document.getElementById("request_btn").style.display = "block";

                }
            });

        }
    </script>
</body>
</html>