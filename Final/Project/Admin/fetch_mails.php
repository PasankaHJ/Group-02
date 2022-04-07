<?php
    include('../db/db.php');
     $sql = "SELECT * FROM mails ORDER BY id DESC";
     $result = $conn->query($sql);
     $output = '';
     $output .= '
                                         <table id="zero_config" class="table table-striped table-bordered">
                                             <thead>
                                                 <tr>
                                                     <th>Name</th>
                                                     <th>Email</th>
                                                     <th>Message</th> 
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
         <td>'.$row->name.'</td>
         <td><a href="mailto:'.$row->email.'">'.$row->email.'</a></td>
         <td>'.$row->message.'</td>
        
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
                                                    <th>Name</th>
                                                     <th>Email</th>
                                                     <th>Message</th>      
                                             </tr>
                                             </tfoot>
                                         </table>
     ';
     echo $output;


?>