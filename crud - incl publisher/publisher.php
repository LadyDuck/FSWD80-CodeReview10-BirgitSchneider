<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <style>

      
       .image {
        max-width: 100%; 
        max-height: 100%;
        margin-left: auto;
        margin-right: auto; 
       }

   </style>

</head>
<body>

  <div class = "container my-3">

<!-- <div class ="manageUser"> -->
   <a href= "index.php"><button type="button" class="btn btn-success my-4">Home</button></a>
   <table  class = "table table-bordered">
       <thead>
           <tr>
               <th>publisherID</th>
               <th>Name</th>
               <th>Size</th> 
               <th>Show Media</th> 
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM publisher";
           $result = $connect->query($sql);
           //$result = mysqli_query($connect, $sql);
           //print_r($result);
           
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>".$row['publisherID']."</td>
                       <td><b>".$row['name']."</b></td>
                       <td>".$row['size']."</td>  

                       <td>
                           <a href='sony.php?publisherID=" .$row['publisherID']."'><button type='button' class='btn btn-success mx-4' style ='width: 80%;'>Show Media</button></a>
                       </td>




                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
       </tbody>
   </table>
</div>

<!-- </div> -->

</body>
</html>

</body>
</html>