<?php
    include('../db/db.php');
     $sql = "SELECT * FROM accessories ORDER BY id DESC";
     $result = $conn->query($sql);
     $output = '';
     $output .= '
                                         <table id="zero_config" class="table table-striped table-bordered">
                                             <thead>
                                                 <tr>
                                                 <th>Image</th>
                                                     <th>Price</th>
                                                     <th>Title</th>
                                                     <th>Seller</th>
                                                     <th>Description</th>
                                                     <th>Action</th>    
                                                 </tr>
                                            </thead>

                                             <tbody>
     ';
     if(mysqli_num_rows($result) > 0)
     {
     while ($row=mysqli_fetch_object($result))
     {
         $s_id = $row->seller_id;

         $q = "SELECT * FROM sellers WHERE id ='$s_id' ";
         $res = mysqli_query($conn, $q);
         $r = mysqli_fetch_array($res);



     $output .= '
         <tr>
         <td><img src="../images/uploads/accessories/'.$row->image.'" width="50" height = "50"></td>
         <td>Rs.'.number_format($row->price, 2).'</td>
         <td>'.$row->title.'</td>
         <td>'.$r["shopname"].'</td>
         <td>'.$row->description.'</td>
         <td>
           
             
             <button type="button" id="delete_'.$row->id.'" class="btn btn-danger btn-xs  delete-item" onclick="deleteItem('.$row->id.')"><i class="fa fa-trash-o" title="Delete Item" style="color: white;"></i></button>
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
                                             <th>Image</th>
                                                     <th>Price</th>
                                                     <th>Title</th>
                                                     <th>Seller</th>
                                                     <th>Description</th>
                                                     <th>Action</th>    
                                                 </tr>
                                             </tfoot>
                                         </table>
     ';
     echo $output;


?>