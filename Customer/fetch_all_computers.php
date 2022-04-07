<?php 
session_start();
include "db/db.php";

     $output = "";
          $query = "SELECT * FROM builds ORDER BY price DESC";
          $run = mysqli_query($conn, $query);

          $output .= "<div class='row'>";

     while($row=mysqli_fetch_array($run)){
     $output .= "<div id='columns' class='columns_4'>
                    <a href='viewcomputer.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                    <div class='card-div'>        
                         <div class='gow-img-div img-div'>
                              <img src='images/uploads/computers/".$row["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                         </div>
                         <div class='text-container'>
                              <h2 class='item-name'>" . $row["processor"] . "</h2>
                                 <p class='date'> " . $row["graphics_card"] . " </p>
                                 <p class='date'> " . $row["ram"] . " </p>
                                 <div class='pricing-and-cart'>
                                     <div class='pricing'>
                                         <p class='current-price'> Rs." . number_format($row["price"], 2) . "</p>
                                     </div>
                                 </div>
                           </div>
                      </div>
                    </a>
                     
                </div>";

     }
     $output .= "</div>";
     echo $output;    

?>