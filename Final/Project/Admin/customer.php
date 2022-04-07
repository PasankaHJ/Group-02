<?php
    include('../db/db.php');
     $sql = "SELECT * FROM customer ORDER BY id DESC";
     $result = $conn->query($sql);
     $output = '';
     $output .= '
                                         <table id="zero_config" class="table table-striped table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th>Customer ID</th>
                                                     <th>Customer Name</th>
                                                 <th>Contact Number</th>
                                                     <th>Address</th>
                                                     <th>Action</th>
                                                 </tr>
                                            </thead>

                                             <tbody>
     ';
     if(mysqli_num_rows($result) > 0)
     {
     while ($row=mysqli_fetch_object($result))
     {

     if($row->status == 2)
         {
         $status = '<span class="label-success">Active</span>';
         }

         if($row->status == 1)
         {
         $status = '<span class="label-danger">Inactive</span>'; 
         }


     $output .= '
         <tr>
         <td>'.$row->fname.'</td>
         <td>'.$row->lname.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->mobile.'</td>
         <td>
           
             <button type="button" id="delete_'.$row->id.'" class="btn btn-danger btn-xs  delete-item" onclick="deleteItem('.$row->id.')"><i class="fa fa-trash-o" title="Delete Item"></i></button>
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
                                                    <th>Customer ID</th>
                                                     <th>Customer Name</th>
                                                     <th>Contact Number</th>
                                                     <th>Address</th>
                                                     <th>Action</th>
                                                 </tr>
                                             </tfoot>
                                         </table>
     ';
     echo $output;


?>