<?php
session_start();
include "../../db/db.php";

$lap_id = $_GET["id"];

$query = "SELECT * FROM laptops WHERE id = '$lap_id'";
$run = mysqli_query($conn, $query);
$row = mysqli_fetch_array($run);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php echo $row["title"]; ?> </title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="../../sources/js/myjs.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

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
        <div class="row">
            <a href="laptops.php" style="text-decoration: none;">
            <div class="back_btn">
                <h1 style="margin-left: 100px;"><i class="fa fa-arrow-left" style="margin-left: -80px;"></i> &nbsp; Go Back</h1>
            </div>
            </a>
        </div>

        <?php

        ?>

        <div class="display_area">
            <div class="row">
                <div class="column" style="width: 360px;">
                    <div class="row">
                        <img src="../../images/uploads/laptops/<?php echo $row["image"]; ?>" alt="" style="height: 350px; width: 350px;">
                    </div>
                    <div class="row">
                        <div class="price">Rs. <?php echo number_format($row["price"], 2); ?></div>
                    </div>
                </div>

                <div class="column" style="background-color: #F7941E; margin-left: 30px; width: 58%; border-radius: 10px;">

                    <table border="0">
                        <tr>
                            <th width="200px">Processor</th>
                            <td width="500px"><?php echo $row["processor"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">RAM</th>
                            <td width="500px"><?php echo $row["ram"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Graphics Card</th>
                            <td width="500px"><?php echo $row["gpu"]; ?></td>
                        </tr>
                        <tr colspan="2"></tr>
                        <tr>
                            <th width="200px">Storage</th>
                            <td width="500px"><?php echo $row["storage"]; ?></td>
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
</body>
</html>