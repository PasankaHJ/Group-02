
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
		
<?php include "navbar.php" ?>
		
        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
              <div class="container">

              <div class="profile">
  
                  <div class="profile-banner">

                  </div>
                  <div class="profile-picture">

                    <a href=""><img src="images/hacking-hackers-computer-anonymous-wallpaper-preview.jpg"></a>
                    <span style="font-family: sans-serif;"><?php echo $row["fname"]; ?></span>
                    <br>
                    <small style="font-family: sans-serif;"><?php echo $row["lname"]; ?></small>
                  </div>

                  <div class="profile-content">

                    <div class="content-middle">

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
                          <br><br><br>
                          <table style="border: 0px solid;">
                          <tr>
                                <td width="150"><h3  style="font-family: sans-serif;">Telephone </h3></td>
                                <td><h4  style="font-family: sans-serif;">:  <?php echo $row["mobile"]; ?></h4></td>
                              </tr>

                          </table>
                          <br><br><br>
                          <table style="border: 0px solid;">
                          <tr>
                                <td width="150"><h3  style="font-family: sans-serif;">District </h3></td>
                                <td><h4  style="font-family: sans-serif;">:  <?php echo $row["district"]; ?></h4></td>
                              </tr>

                          </table>
                          <br><br><br>

                        </div>

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

            <?php include "footer.php" ?>

</body>
</html>
