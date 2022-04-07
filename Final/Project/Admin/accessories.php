<?php

session_start();
include "../db/db.php";

?>
<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../sources/js/myjs.js"></script>



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

        

          <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
            <div class="container" style="margin-top: -50px; overflow: scroll;">
            <a href="addbuild_form.php"><button class="btnlogin" style="width: 200px; margin-left: 10px;">Add new <i class="fa fa-plus-square-o" style="color: white;margin-left: 50px;"></i></button></a>
              <div class="row py-5">
                <div class="col-12">
                  <div id="accessories_data">

                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>




  <script>
    $(document).ready(function() {
      fetchlaps();
    });

    function fetchlaps() {
      var action = "Fetchlaps";
      $.ajax({
        url: 'fetch_accessories.php',
        method: "POST",
        data: {
          action: action

        },
        success: function(data) {
          $('#accessories_data').html(data);
          $('#zero_config').dataTable();

        }
      });
    }

    function deleteItem(id) {
      var delete_id = id;
      var action = "deletelap";
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this details",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: 'delete_lap.php',

              type: 'POST',
              data: ({
                delete_id: delete_id,
                action: action
              }),

              success: function(response) {
                swal("Item has deleted", {
                  icon: "success",
                });
                fetchlaps();
                
              }
            });
          } else {
            swal("Item is safe");
          }
        });
    }
  </script>



</body>

</html>