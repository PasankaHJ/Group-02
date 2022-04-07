<?php
    include('../db/db.php');
     $sql = "SELECT * FROM sitereviews ORDER BY id DESC";
     $result = $conn->query($sql);
     $output = '';
     $output .= '
                                         <table id="zero_config" class="table table-striped table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th>Customer</th>
                                                     <th>Comment</th>
                                                     <th>Status</th>
                                                     <th>Action</th>    
                                                 </tr>
                                            </thead>

                                             <tbody>
     ';
     if(mysqli_num_rows($result) > 0)
     {
     while ($row=mysqli_fetch_object($result))
     {
         $s_id = $row->customer;

         if($row->status == 0){
             $stat = "Pending...";
         }else if($row->status == 1){
            $stat = "Accepted";
         }

         $q = "SELECT * FROM customer WHERE id ='$s_id' ";
         $res = mysqli_query($conn, $q);
         $r = mysqli_fetch_array($res);



     $output .= '
         <tr>
         <td>'.$r["fname"].' '.$r["lname"].'</td>
         <td>'.$row->comment.'</td>
         <td>'.$stat.'</td>
         <td>
           
             <button type="button" id="'.$row->id.'" class="btn btn-danger btn-xs  delete-item" onclick="acceptItem('.$row->id.')" style="background-color: forestgreen;"><i class="fa fa-check-square" title="Delete Item" style="color: white;"></i></button> 
             <button type="button" id="'.$row->id.'" class="btn btn-danger btn-xs  delete-item" onclick="rejectItem('.$row->id.')"><i class="fa fa-window-close" title="Delete Item" style="color: white;"></i></button>
         </td>
        
         </tr>
         ';
     }
     }
 else
     {
     $output .= '
         <tr>
         <td colspan="6" align="center">Data not Found</td>
         </tr>
     ';
     }
     $output .= '                                        </tbody>

                                             <tfoot>
                                             <tr>
                                             <th>Customer</th>
                                                     <th>Comment</th>
                                                     <th>Status</th>
                                                     <th>Action</th>       
                                             </tr>
                                             </tfoot>
                                         </table>
     ';
     echo $output;


?>