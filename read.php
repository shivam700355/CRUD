<?php
   $conn=mysqli_connect("localhost","root","","crud") or die("connection feild");
   $sql="select *from student ";
   $result=mysqli_query($conn,$sql)or die("query unsuccssful");
     ?> 
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>READ</title>
        <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="step.css">
     <?php include_once('head.php');?>
     </head>
     <body>
     <table cellpadding="15px"  class="tbl">
    <thead>
        <th>sid </th>
        <th>sname </th>
        <th>saddres </th>
        <th>sclass </th>
        <th>sphone </th>
    </thead>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
    
        echo "<tr>";
        echo "<td>".$row['sid']."</td>";
        echo "<td>".$row['sname']."</td>";
        echo "<td>".$row['saddress']."</td>";
        echo "<td>".$row['sclass']."</td>";
        echo "<td>".$row['sphone']."</td>";	
        echo "</tr>";
    
     } 
     ?>
   </table>
        
     </body>
     </html>