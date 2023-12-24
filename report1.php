

<?php require "dbcon.php"?>
    <?php
   echo'<br> <br> <h1 style="text-align:center;">User Registration Report</h1>     <br>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   ';
   $sql="SELECT * FROM `signup1` ";

   $result=mysqli_query($con,$sql);

   if(mysqli_num_rows($result) > 0)
   {
            echo'<table class="table">';
            echo'<tr>
            <th>Id </th>
            <th> User_Name </th>
            <th> User_Email </th>
            <th> Mobile_no </th>
            
            
            </tr>';
            while($row=mysqli_fetch_assoc($result))
            { 
                echo'<tr>';
                echo'<td>' . $row['id'] .'</td>'; 
                echo'<td>' . $row['username']. '</td>'; 
                echo'<td>' . $row['email'] .'</td>'; 
                echo'<td>' . $row['mobile']. '</td>'; 
                
                echo'</tr>';
            }
            echo'</table>';
   }
   else
   {
    echo"Not Found";
   }
   
   ?>