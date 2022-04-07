<?php 
session_start();
include "db/db.php";

     $output = "";
          $area = $_POST['area'];
          $query = "SELECT * FROM sellers WHERE district = $area";
          $run = mysqli_query($conn, $query);
          $output .= "<div class='row'>";

     while($row=mysqli_fetch_array($run)){
     $output .= "<div id='columns' class='columns_4'>
                    <a href='viewseller.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                    <div class='card-div'>        
                         <div class='gow-img-div img-div'>
                              <img src='images/uploads/sellers/".$row["logo"]."' alt='god-of-war-figurine' height='200' width='200'>
                         </div>
                         <div class='text-container'>
                         <h2 class='item-name'>" . $row["shopname"] . "</h2>
                                 <p class='date'> " . $row["fname"] . " " . $row["lname"] . " </p>
                                 <p class='date'> " . $row["mobile"] . " </p>
                           </div>
                      </div>
                    </a>
                     
                </div>";

     }
     $output .= "</div>";
     echo $output;    

?>