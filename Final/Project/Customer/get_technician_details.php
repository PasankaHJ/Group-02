<?php 
session_start();
include "db/db.php";

     $output = "";

     if($_POST["price"] === "more"){
          $price = $_POST['price'];
          $query = "SELECT * FROM laptops WHERE price >= $price";
          $run = mysqli_query($conn, $query);
          $output .= "<div class='row'>";

     while($row=mysqli_fetch_array($run)){
     $output .= "<div id='columns' class='columns_4'>
                    <a href='viewlaptop.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                    <div class='card-div'>        
                         <div class='gow-img-div img-div'>
                              <img src='images/uploads/laptops/".$row["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                         </div>
                         <div class='text-container'>
                              <h2 class='item-name'>" . $row["title"] . "</h2>
                                 <p class='date'> " . $row["processor"] . " </p>
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

     }else{
          $price_from = $_POST['price'] - 50000;
          $price_to = $_POST['price'];

          $query = "SELECT * FROM laptops WHERE price BETWEEN '$price_from' AND '$price_to'";

          $run = mysqli_query($conn, $query);
          $output .= "<div class='row'>";
     
          while($row=mysqli_fetch_array($run)){
     
          $output .= "<div id='columns' class='columns_4'>
                         <a href='viewlaptop.php?id=".$row["id"]." ' style='text-decoration: none; color: black;'>
                         <div class='card-div'>        
                              <div class='gow-img-div img-div'>
                                   <img src='images/uploads/laptops/".$row["image"]."' alt='god-of-war-figurine' height='200' width='200'>
                              </div>
                              <div class='text-container'>
                              <h2 class='item-name'>" . $row["title"] . "</h2>
                              <p class='date'> " . $row["processor"] . " </p>
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
     }

    

     ?>