<?php

session_start();
include "../db/db.php";

$id = $_GET["id"];

$query = "SELECT * FROM admins WHERE id = '$id'";
$run = mysqli_query($conn,$query);
$row = mysqli_fetch_array($run);


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

    </head>
    <body>
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
                      <span style="font-family: sans-serif;"><?php echo $_SESSION["aname"]; ?></span>
                      </div>        
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logout-dropdown">
                      <div class="list-group">
                        <a class="list-group-item list-group-item-action border-0 pl-5" href="myaccount.php?id=<?php echo $_SESSION['aid']; ?>" style="color: #014B70;">View<i class="fa fa-eye " style="margin-left: 32px;"></i></a>
                        <a class="list-group-item list-group-item-action border-0 pl-5" href="editaccount.php?id=<?php echo $_SESSION['aid']; ?>" style="color: #014B70;">Settings<i class="fa fa-wrench " style="margin-left: 10px;"></i></a>
                        <a class="list-group-item list-group-item-action border-0 pl-5" href="logout.php" style="color: #014B70;">Logout<i class="fa fa-sign-out " style="margin-left: 18px;"></i></a>
                      </div>
                    </div>
                    </div>
                  </nav> 
                  <main class="container-fluid">
                        
                    <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
              <div class="container">

              <div class="profile">
  
                  <div class="profile-banner">

                  </div>
                  <div class="profile-picture">

                    <a href=""><img src="../images/hacking-hackers-computer-anonymous-wallpaper-preview.jpg"></a>
                    <span style="font-family: sans-serif;"><?php echo $row["fname"]; ?></span>
                    <br>
                    <small style="font-family: sans-serif;"><?php echo $row["lname"]; ?></small>
                  </div>

                  <div class="profile-content">

                    <div class="content-left">

                      <!--<ul>

                        <li><a><span class="entypo-compass"></span> USA, California</a></li>
                        <li><a><span class="entypo-graduation-cap "></span> California College of the Arts </a></li>
                        <li><a><span class="entypo-suitcase"></span> Graphic Designer at Wicrosoft</a></li>
                        <li><a><span class="entypo-lock-open"></span> Public</a></li>

                      </ul>-->

                    </div>

                    <div class="content-middle">

                      <!--<div class="content-md-left">

                        <img src="https://i.pravatar.cc/300?img=7">

                      </div>

                      <div class="content-md-middle">

                        <div class="post-title-name">
                          <a href="">Daniel Jack</a><br>
                        </div>

                        <div class="post-title-time">
                          <a href=""></a>
                        </div>-->

                         <div class="post-desc">
                           <br><br>
                        
                            <table style="border: 0px solid;">

                              <tr style="margin-bottom: 150px;">
                                <td width="150"><h3  style="font-family: sans-serif;">Name </h3></td>
                                <td><h3  style="font-family: sans-serif;">:  <?php echo $row["fname"]." ".$row["lname"]; ?></h3></td>
                              </tr>                             

                          </table>
                          <br><br><br>
                          <table style="border: 0px solid;">
                          <tr>
                                <td width="150"><h3  style="font-family: sans-serif;">Email </h3></td>
                                <td><h4  style="font-family: sans-serif;">:  <?php echo $row["email"]; ?></h4></td>
                              </tr>

                          </table>

                        </div>

                        <!--<div class="post-info">

                          <ul>

                            <li><a href="" class="like"><span class="entypo-thumbs-up"></span> Like</a></li>
                            <li><a href="" class="comment"><span class="entypo-comment"></span> Comment</a></li>
                            <li><a href="" class="share"><span class="entypo-share"></span> Share</a></li>

                          </ul>

                        </div>-->

                      </div>

                    

                    <div class="content-right">

                      <ul>

                        <li><a href=""><i class="fa fa-home"></i></a></li>
                        <li><a href=""><i class="fa fa-pencil"></i></a></li>


                      </ul>


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


