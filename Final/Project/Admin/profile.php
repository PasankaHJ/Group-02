<?php

session_start();
include "../db/db.php";

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

  <script>
    function updateClock() {
      var clock = document.getElementById("clock");
      var now = new Date();

      var sec = now.getSeconds();
      var min = now.getMinutes();
      var hou = now.getHours();

      min = min < 10 ? '0${min}' : min;
      sec = sec < 10 ? '0${sec}' : sec;

      clock.innerText = '${hou} : ${min} : ${sec}';

      setTimeout(updateClock, 1000);
    }
    updateClock();
  </script>


</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="sidebar" id="sidebar">
        <img src="../images/logo/logo.png" class="logo" href="index.php">
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

          <!-- <a href="" data-toggle="collapse" data-target="#technician-collapse">
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
          </div> -->

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
        <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm sticky-top">
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
          <section class="row">
            <div class="colmn">
              <a href="viewcustomers.php" class="d-flex align-items-center" style="color: white;">
                <div class="admin-card" style="background-color: #023e8a;">
                <div class="row">
                  <div class="column">
                  <I class="fa fa-users" style="font-size: 70px;"></I>
                  </div>
                  <div class="column">
                  <?php
                  $customers = "SELECT * FROM customer";
                  $run_1 = mysqli_query($conn, $customers);
                  $countcustomer = mysqli_num_rows($run_1);
                  ?>
                  
                  
                    <h3><?php echo $countcustomer; ?></h3>
                    </div>
                  </div>
                  <center>
                    <div class="card-over-text">
                      <h2> Customers </h2>
                    </div>
                  </center>
                </div>
              </a>
            </div>
            <div class="colmn">
            <a href="sellers.php" class="d-flex align-items-center" style="color: white;">
              <div class="admin-card" style="background-color: #43aa8b;">
                
                <div class="row">
                  <div class="column">
                  <i class="fa fa-shopping-bag" style="font-size: 70px;"></i>
                  </div>
                  <div class="column">   
                <?php
                $sellers = "SELECT * FROM sellers";
                $run_2 = mysqli_query($conn, $sellers);
                $countseller = mysqli_num_rows($run_2);
                ?>
                
                  <h3><?php echo $countseller; ?></h3>
                  </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Sellers </h2>
                  </div>
                </center>
              </div>
              </a>
            </div>
            <!-- <div class="colmn">
            <a href="technicians.php" class="d-flex align-items-center" style="color: white;">
              <div class="admin-card" style="background-color: #f9c74f;">
                
                <div class="row">
                  <div class="column">
                  <i class="fa fa-wrench" style="font-size: 70px;"></i>
                  </div>
                  <div class="column">
                <?php
               // $technicians = "SELECT * FROM customer";
               // $run_3 = mysqli_query($conn, $technicians);
                //$counttechnician = mysqli_num_rows($run_3);
                ?>
                
                  <h3><?php //echo $counttechnician;
                                        ?></h3>
                  <h3>50</h3>
                  </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Technicians </h2>
                  </div>
                </center>
              </div>
              </a>
            </div> -->
            <div class="colmn">
            <a href="requests.php" class="d-flex align-items-center" style="color: white;">
              <div class="admin-card" style="background-color: #f9c74f;">
                
                <div class="row">
                  <div class="column">
                  <i class="fa fa-wrench" style="font-size: 70px;"></i>
                  </div>
                  <div class="column">
                <?php
                $requests = "SELECT * FROM requests";
                $run_3 = mysqli_query($conn, $requests);
                $countrequests = mysqli_num_rows($run_3);
                ?>
                
                  <h3><?php echo $countrequests;
                                        ?></h3>
                  </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Requests </h2>
                  </div>
                </center>
              </div>
              </a>
            </div>
            </section>
            <section class="row">
            <div class="colmn">
            <a href="builds.php" class="d-flex align-items-center" style="color: white; ">
              <div class="admin-card" style="background-color: #f94144;">
                
                <div class="row">
                  <div class="column">
                  <I class="fa fa-desktop" style="font-size: 70px;"></I>
                  </div>
                  <div class="column">
                <?php
                $builds = "SELECT * FROM builds";
                $run_4 = mysqli_query($conn, $builds);
                $countbuild = mysqli_num_rows($run_4);
                ?>
                
                  <h3><?php echo $countbuild; ?></h3>
                  </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Builds </h2>
                  </div>
                </center>
              </div>
              </a>
            </div>
            <div class="colmn">
            <a href="mails.php" class="d-flex align-items-center" style="color: white;">
              <div class="admin-card" style="background-color: #555b6e;">
                
                <div class="row">
                  <div class="column">
                  <i class="fa fa-inbox" style="font-size: 70px;"></i>
                  </div>
                  <div class="column">
                <?php
                $sellers = "SELECT * FROM Mails";
                $run_2 = mysqli_query($conn, $sellers);
                $countseller = mysqli_num_rows($run_2);
                ?>
                
                  <h3><?php echo $countseller; ?></h3>
                                    </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Mails </h2>
                  </div>
                </center>
              </div>
              </a>
            </div>
            <div class="colmn">
            <a href="comments.php" class="d-flex align-items-center" style="color: white;">
              <div class="admin-card" style="background-color: #6a4c93;">
                
                <div class="row">
                  <div class="column">
                  <i class="fa fa-star" style="font-size: 70px;"></i>
                  </div>
                  <div class="column">
                <?php
                $technicians = "SELECT * FROM sitereviews";
                $run_3 = mysqli_query($conn, $technicians);
                $counttechnician = mysqli_num_rows($run_3);
                ?>
                
                  <h3><?php echo $counttechnician; ?></h3>
                  </div>
                  </div>
                  <center>
                  <div class="card-over-text">
                    <h2> Reviews </h2>
                  </div>
                </center>
                
              </div>
              </a>
            </div>
          </section>

          <div class="breaker"></div>

          <div class="row">
            <div class="column">
              <div class="clock_bg">

                <div id="date" style="font-family: 'Orbitron', sans-serif;"></div>

                <div id="clock" style="font-family: 'Orbitron', sans-serif;"></div>
                <div id="secs" style="font-family: 'Orbitron', sans-serif;"></div>
              </div>


              <script>
                function updateClock() {
                  var date = document.getElementById("date");
                  var clock = document.getElementById("clock");
                  var secs = document.getElementById("secs");
                  var now = new Date();

                  var sec = now.getSeconds();
                  var min = now.getMinutes();
                  var hou = now.getHours();

                  var y = now.getFullYear();
                  var m = now.getMonth();
                  var d = now.getDate();

                  hou = hou < 10 ? `0${hou}` : hou;
                  min = min < 10 ? `0${min}` : min;
                  sec = sec < 10 ? `0${sec}` : sec;

                  clock.innerText = `${hou}:${min}`;
                  secs.innerText = `${sec}`;
                  date.innerText = `${y} - ${m} - ${d}`;

                  setTimeout(updateClock, 1000);
                }
                updateClock();
              </script>
            </div>
            <div class="column">
              <div class="notify">
                <div class="row">
                  <div class="column">
                    <a href="">
                    <div class="r" style="border: 5px solid #023e8a;">
                      <i class="fa fa-users" style="color: #023e8a; font-size:30px; margin-left: 12px; margin-top: 15px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="column">
                  <a href="">
                    <div class="r" style="border: 5px solid #43aa8b;">
                      <i class="fa fa-shopping-bag" style="color: #43aa8b; font-size:30px; margin-left: 12px; margin-top: 15px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="column">
                  <a href="">
                    <div class="r" style="border: 5px solid #f9c74f;">
                      <i class="fa fa-wrench" style="color: #f9c74f; font-size:30px; margin-left: 12px; margin-top: 15px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="column">
                  <a href="">
                    <div class="r" style="border: 5px solid #555b6e;">
                      <i class="fa fa-newspaper-o" style="color: #555b6e; font-size:30px; margin-left: 12px; margin-top: 15px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="column">
                  <a href="">
                    <div class="r" style="border: 5px solid #6a4c93;">
                      <i class="fa fa-star" style="color: #6a4c93; font-size:30px; margin-left: 15px; margin-top: 13px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                  <a href="emails.php">
                    <div class="r" style="border: 5px solid #b5179e;">
                      <i class="fa fa-inbox" style="color: #b5179e; font-size:30px; margin-left: 15px; margin-top: 13px;"></i>
                      <div class="rounded_number">
                        
                      </div>
                    </div>
                    </a>
                  </div>

                </div>
                <div class="row">
                  <div class="clock_bg" style="height: 70px; width: 98.5%; color: #daf6ff; text-shadow: 0 0 20px rgba(10, 175, 230, 1), 0 0 20px rgba(10, 175, 230, 0);">
                  <h1 style="margin-left: 300px; margin-top:10px;">Welcome</h1>
                </div>
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