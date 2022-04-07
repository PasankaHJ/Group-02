<?php
    include('../db/db.php');


     $sql = "SELECT * FROM sellers ORDER BY id DESC";
     $result = $conn->query($sql);
     $output = '';
     $output .= '
                                         <table id="zero_config" class="table table-striped table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th>ID</th>
                                                     <th>Logo</th>
                                                     <th>Shop Name</th>
                                                     <th>Email</th>
                                                 <th>Contact Number</th>
                                                     <th>Area</th>
                                                     <th>Action</th>
                                                 </tr>
                                            </thead>

                                             <tbody>
     ';
     if(mysqli_num_rows($result) > 0)
     {
     while ($row=mysqli_fetch_object($result))
     {


     $output .= '
         <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->logo.'</td>
         <td>'.$row->shopname.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->mobile.'</td>
         <td>'.$row->district.'</td>
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
                                                    <th>ID</th>
                                                     <th>Logo</th>
                                                     <th>Shop Name</th>
                                                     <th>Email</th>
                                                 <th>Contact Number</th>
                                                     <th>Area</th>
                                                     <th>Action</th>
                                                 </tr>
                                             </tfoot>
                                         </table>
     ';
     echo $output;


?>