<?php
session_start();
include "../db/db.php";

$id = $_GET["id"];

?>
<html>
    <head>
    <meta charset="utf-8">
	<title> View </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            margin-top: 100px;
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

    </style>
	  

    </head>
    <body>
	<?php include "navbar.php"; ?>

<div class="container-fluid">

<?php
            $seller_id = $_GET["id"];

            $query = "SELECT * FROM sellers WHERE id = '$seller_id'";
            $run = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($run);
        ?>

        <div class="display_area">
            <div class="row">
                <div class="column" style="width: 360px;">
                    <div class="row">
                        <img src="../images/uploads/sellers/<?php echo $row["logo"]; ?>" alt="" style="height: 350px; width: 350px;">
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        
                        <a href="mailto:<?php echo $row["email"]; ?>" style="color: #014B70;"><h4><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["email"]; ?></h4></a><br><br><br>
                        <a href="tel:<?php echo $row["mobile"]; ?>" style="color: #014B70;"><h4><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["mobile"]; ?></h4></a>
                    </div>
                </div>
                <div class="column" style="background-color: #F7941E; margin-left: 30px; width: 58%; border-radius: 10px;">

                    <table border="0">
                        <tr>
                            <th width="200px">Shop Name</th>
                            <td width="500px"><?php echo $row["shopname"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Owner's Name</th>
                            <td width="500px"><?php echo $row["fname"]. " " .$row["lname"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Email Address</th>
                            <td width="500px"><?php echo $row["email"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Contact Number</th>
                            <td width="500px"><?php echo $row["mobile"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Address</th>
                            <td width="500px"><?php echo $row["address"]; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

    
</div>
<?php include "footer.php"; ?>

    </body>
</html>