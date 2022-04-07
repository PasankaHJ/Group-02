<?php

session_start();
include "../db/db.php";

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $(document).ready(() => {

      $('#open-sidebar').click(() => {

        // add class active on #sidebar
        $('#sidebar').addClass('active');

        // show sidebar overlay
        $('#sidebar-overlay').removeClass('d-none');

      });


      $('#sidebar-overlay').click(function() {

        // add class active on #sidebar
        $('#sidebar').removeClass('active');

        // show sidebar overlay
        $(this).addClass('d-none');

      });

    });
  </script>

</head>

<body>


  <?php
  if (isset($_SESSION["add_status"])) {
    if ($_SESSION["add_status"] == 0) {
  ?>
      <script>
        swal({
          title: "Can't add.",
          text: "Please retry",
          icon: "error",
        });
      </script>
    <?php
      unset($_SESSION["add_status"]);
    } else if ($_SESSION["add_status"] == 3) {
    ?>
      <script>
        swal({
          title: "Password not matching",
          text: "Password confirmation failed...",
          icon: "warning",
        });
      </script>
    <?php
      unset($_SESSION["add_status"]);
    } else if ($_SESSION["add_status"] == 2) {
    ?>
      <script>
        swal({
          title: "Email address already in use",
          text: "Use different email address",
          icon: "error",
        });
      </script>
    <?php
    } else if ($_SESSION["add_status"] == 1) {
    ?>

      <script>
        swal({
          title: "Added Successfully.",
          text: "",
          icon: "success",
        });
      </script>

  <?php
    }
    unset($_SESSION["add_status"]);
  }

  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar" id="sidebar">
        <img src="../images/logo/logo.png" class="logo">
        <div class="list-group rounded-0"><Br>
          <a href="profile.php">
            <i class="fa fa-tachometer"></i>
            <span>&nbsp Dashboard</span>
          </a>

          <a href="" data-toggle="collapse" data-target="#customer-collapse">
            <div>
              <i class="fa fa-users"></i>
              <span>&nbsp Customers</span>
            </div>
          </a>
          <div class="collapse" id="customer-collapse" data-parent="#sidebar">
            <div class="list-group">
              <a href="viewcustomers.php" class="list-group-item list-group-item-action border-0 pl-5">View</a>
              <a href="add_customer_form.php" class="list-group-item list-group-item-action border-0 pl-5">Add new</a>
            </div>
          </div>

          <a href="" data-toggle="collapse" data-target="#seller-collapse">
            <div>
              <i class="fa fa-shopping-bag"></i>
              <span>&nbsp Sellers</span>
            </div>
          </a>
          <div class="collapse" id="seller-collapse" data-parent="#sidebar">
            <div class="list-group">
              <a href="sellers.php" class="list-group-item list-group-item-action border-0 pl-5">View</a>
              <a href="addseller_form.php" class="list-group-item list-group-item-action border-0 pl-5">Add new</a>
            </div>
          </div>

          <a href="" data-toggle="collapse" data-target="#technician-collapse">
            <div>
              <i class="fa fa-wrench"></i>
              <span>&nbsp Technicians</span>
            </div>
          </a>
          <div class="collapse" id="technician-collapse" data-parent="#sidebar">
            <div class="list-group">
              <a href="technicians.php" class="list-group-item list-group-item-action border-0 pl-5">View</a>
              <a href="addtechnicians.php" class="list-group-item list-group-item-action border-0 pl-5">Add new</a>
              <a href="technician_posts.php" class="list-group-item list-group-item-action border-0 pl-5">Posts</a>
            </div>
          </div>

          <a href="" data-toggle="collapse" data-target="#posts-collapse">
            <div>
              <i class="fa fa-newspaper-o"></i>
              <span>&nbsp Posts</span>
            </div>
          </a>
          <div class="collapse" id="posts-collapse" data-parent="#sidebar">
            <div class="list-group">
              <a href="laptops.php" class="list-group-item list-group-item-action border-0 pl-5">Laptops</a>
              <a href="builds.php" class="list-group-item list-group-item-action border-0 pl-5">Computers</a>
              <a href="parts.php" class="list-group-item list-group-item-action border-0 pl-5">Parts</a>
              <a href="accessories.php" class="list-group-item list-group-item-action border-0 pl-5">Accessories</a>
            </div>
          </div>

          <a href="" data-toggle="collapse" data-target="#reviews-collapse">
            <div>
              <i class="fa fa-newspaper-o"></i>
              <span>&nbsp Customer Reviews</span>
            </div>
          </a>
          <div class="collapse" id="reviews-collapse" data-parent="#sidebar">
            <div class="list-group">
              <a href="ratings.php" class="list-group-item list-group-item-action border-0 pl-5">Ratings</a>
              <a href="comments.php" class="list-group-item list-group-item-action border-0 pl-5">Comments</a>
              <a href="messages.php" class="list-group-item list-group-item-action border-0 pl-5">Messages</a>
            </div>
          </div>


        </div>
      </div>
      <div class="" id="sidebar-overlay"></div>
      <div class="col-md-9 col-lg-10 ml-md-auto px-0">
        <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
          <button class="btn py-0 d-lg-none" id="open-sidebar">
            <span class="bi bi-list text-primary h3"></span>
          </button>
          <div class="dropdown ml-auto">
            <a href="#" class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false" style="color: #014B70;">
              <div>
                <i class="fa fa-user-circle-o"></i>
                <span><?php echo $_SESSION["aname"]; ?></span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logout-dropdown">
              <div class="list-group">
                <a class="list-group-item list-group-item-action border-0 pl-5" href="myaccount.php?id=<?php echo $_SESSION['aid']; ?>" style="color: #014B70;">View<i class="fa fa-eye " style="margin-left: 32px;"></i></a>
                <a class="list-group-item list-group-item-action border-0 pl-5" href="editaccount.php?id=<?php echo $_SESSION['aid']; ?>" style="color: #014B70;">Settings<i class="fa fa-wrench " style="margin-left: 10px;"></i></a>
                <a class="list-group-item list-group-item-action border-0 pl-5" href="logout.php" style="color: #014B70;">Logout<i class="fa fa-sign-out " style="margin-left: 18px;"></i></a>
                <!--<a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sale Orders</a>-->
              </div>
            </div>
          </div>
        </nav>
        <main class="container-fluid">

          <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
            <div class="container">

              <div class="login">
                <div class="loginheader">
                  <h1> Add new Customer </h1>
                </div>

                <form method="post" action="addcustomer.php">
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
                    <select name="district" id="">
                        <option value="" checked>District</option>
                        <?php 
                            $district = "SELECT * FROM districts";
                            $runquery = mysqli_query($conn,$district);
                            while($getdistrict = mysqli_fetch_assoc($runquery)){
                                ?>
                                <option value="<?php echo $getdistrict['title']; ?>"><?php echo $getdistrict['title']; ?></option>
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

                  <input type="submit" value='Add' name="add" class='btnlogin'>
                </form>
                <div class='loginfooter'>

                </div>

              </div>

            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</body>

</html>