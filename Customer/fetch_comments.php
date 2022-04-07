<?php
include "db/db.php";

$output = "";
$comments = "SELECT * FROM sitereviews WHERE status = 1 ORDER BY id DESC LIMIT 3";
$runquerycomments = mysqli_query($conn, $comments);

$output .= '<div class="row" style="margin-top: 30px;">';

while ($getcomments = mysqli_fetch_array($runquerycomments)) {

	$senderid = $getcomments["customer"];

	$customer = "SELECT * FROM customer WHERE id = '$senderid'";
	$runquerycustomers = mysqli_query($conn, $customer);
	$getcus = mysqli_fetch_array($runquerycustomers);


        $output .= '<div class="col" style="width: 5%;">
                <div class="testominal">
                        <h4 style="color:#014B70;">'.$getcus["fname"] . ' ' . $getcus["lname"].'</h4>
                        <div class="msg">
                        '.$getcomments["comment"].'
                        </div>
                </div>
                </div>';

}
        $output .= '<div class="row" style="margin-top: 30px;">';
        echo $output;
?>