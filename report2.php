
<?php require "dbcon.php"?>
    <?php
   echo'<br> <br> <h1 style="text-align:center;">Bookings report</h1>  <br>   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   ';
   $sql="SELECT * FROM `booking` ";

   $result=mysqli_query($con,$sql);

   if(mysqli_num_rows($result) > 0)
   {
            echo'<table class="table">';
            echo'<tr>
            <th>ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> Mobile_NO </th>
            <th> City </th>
            <th> Zip_Code </th>
            <th> Venue </th>
            <th> Date </th>            
            <th> Card_Holder Name </th>
            <th> Card Number </th>

            </tr>';
            while($row=mysqli_fetch_assoc($result))
            { 
                echo'<tr>';
                echo'<td>' . $row['id'] .'</td>'; 
                echo'<td>' . $row['name']. '</td>'; 
                echo'<td>' . $row['email'] .'</td>'; 
                echo'<td>' . $row['phone']. '</td>'; 
                echo'<td>' . $row['city']. '</td>'; 
                echo'<td>' . $row['zip']. '</td>'; 
                echo'<td>' . $row['venue']. '</td>'; 
                echo'<td>' . $row['date']. '</td>'; 
                echo'<td>' . $row['card_holder_name']. '</td>';
                echo'<td>' . $row['card_number']. '</td>';
                echo'</tr>';
            }
            echo'</table>';
   }
   else
   {
    echo"Not Found";
   }
   
   ?>