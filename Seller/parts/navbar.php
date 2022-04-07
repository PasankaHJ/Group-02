<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../navbar.js"></script>
</head>

<body>



    <!--HEADER-->
    <header>
        <section>
            <span><a href="#contact"><i class="fa fa-comment" style="color: #F7941E;"></i> 24/7 Support</a></span>
            <span><a href="mailto:computer.solutions@gmail.com"><i class="fa fa-envelope" style="color: #F7941E;"></i> computer.solutions@gmail.com </a></span>
            <span><a href="tel:077-988-2562"><i class="fa fa-phone" style="color: #F7941E;"></i> +(94)-77-988-2562</a></span>
        </section>
        <section></section>
        <?php if (isset($_SESSION["sid"])) {
        ?>
            <section>
                <span><a href="../account.php"><i class="fa fa-lock" style="color: #F7941E;"></i> <?php echo $_SESSION["sname"]; ?> </a></span>
                <span><a href="../seller_logout.php"><i class="fa fa-sign-out" style="color: #F7941E;"></i> Logout </a></span>
            </section>
        <?php
        } else {
        ?>
            <section>
                <span><a href="../seller_login.php"><i class="fa fa-shopping-bag" style="color: #F7941E;"></i> Seller </a></span>
            </section>

        <?php
        }
        ?>
    </header>

    <!--NAVIGATION-->
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="#home" id="logo"><img src="../images/logo/logo.png" alt="" height="50" width="250"></a>
            <a href="../aboutus.php">About Us</a>
            <a href="../contactus.php">Contact Us</a>
            <?php
            if (isset($_SESSION["sid"])) {
            ?>
                <a href="parts.php">Parts</a>
                <a href="../accessories/accessories.php">Accessories</a>
                <a href="../laptops/laptops.php">Laptops</a>
                <a href="../computers/computers.php">Computers</a>
                <a href="../profile.php">Home</a>
            <?php
            } else {
            ?>
                <a href="../../index.php">Home</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
            <?php
            }
            ?>


        </div>

        <div id="navbar">
            <a href="#home" id="logo2" style="float:left;"><img src="../images/logo/logo.png" alt="" height="50" width="250"></a>
            <?php
            if (isset($_SESSION["sid"])) {
            ?>
                <a href="parts.php">Parts</a>
                <a href="../accessories/accessories.php">Accessories</a>
                <a href="../laptops/laptops.php">Laptops</a>
                <a href="../computers/computers.php">Computers</a>
                <a href="../profile.php">Home</a>
            <?php
            } else {
            ?>
                <a href="../../index.php">Home</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
            <?php
            }
            ?>
        </div>
    </nav>


</body>

</html>