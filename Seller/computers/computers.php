<?php
session_start();
include "../db/db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Computers </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
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
    <script src="../myjs.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>

    <style>
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
            margin: 20px;
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
            padding-top: 1rem;
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
    <?php
        if (isset($_SESSION["adding_status"])) {
            if ($_SESSION["adding_status"] == 1) {
                ?>
                    <script>
                swal({
                    title: "success.",
                    text: "Computer added successfully",
                    icon: "success",
                });
            </script>
                <?php
                unset($_SESSION["adding_status"]);
            }
        }
    ?>
    <?php include "navbar.php"; ?>

    <div class="container-fluid">

        <div class="row" style="margin-top: 70px; margin-left: 70px;">
                <div class="cardx" style="height: 80px; width:95%; color: white; border-radius: 5px; border: 3px solid #014B70">
                    <H1 style="margin-left: 50px; font-size: 60px; color: #014B70;">Computers</H1>
                </div>
        </div>
        <input type="hidden" id="seller_id" value="<?php echo $_SESSION["sid"]; ?>">


        <div class='container'>

            
            <div id="display">
            
            
            </div>
        </div>

        


    </div>
    <br>
    <?php include "footer.php"; ?>
</body>
<script>
    $(document).ready(function() {

        fetchPcDetails();
    });


        function fetchPcDetails() {
        var id = document.getElementById("seller_id").value;

        $.ajax({
            type: "POST",
            url: "get_computer_details.php",
            dataType: "html",
            data: ({
                seller_id: id,
            }),

            success: function(data) {
                $("#display").html(data);
            }
        });
    };

    function deletepc(id) {
        var delete_id = id;
        var action = "deletepc";
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this detais.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: 'deletepc.php',
                        type: 'POST',
                        data: ({
                            delete_id: delete_id,
                            action: action
                        }),

                        success: function(response) {
                            swal("Computer has deleted", {
                                icon: "success",
                            });
                            fetchPcDetails();

                        }
                    });
                } else {
                    swal("Computer is safe");
                }
            });
    }
</script>

</html>