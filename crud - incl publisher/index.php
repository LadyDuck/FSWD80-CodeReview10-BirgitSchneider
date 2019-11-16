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

  <div class = "container-fluid my-3">

<!-- <div class ="manageUser"> -->
   <a href= "create.php"><button type="button" class="btn btn-success my-4">Add Media</button></a>
   <table  class = "table table-bordered">

    <a href= "publisher.php"><button type="button" class="btn btn-success my-4">Show Publisher</button></a>
       <thead>
        
           <tr>
               <th>ISBN</th>
               <th>Title</th>
               <th>Image</th>
               <th>Author</th>
               <th>Description</th>
               <th>Published</th>
               <th>Publisher</th>
               <th>Type</th>
               <th>Edit/Delite</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM book WHERE active = 0";
           $result = $connect->query($sql);
           //$result = mysqli_query($connect, $sql);
           //print_r($result);
           
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>".$row['isbn']."</td>
                       <td><b>".$row['title']."</b></td>

                       <td> <img src = ".$row['img']." class = 'image'></td>

                       <td>".$row['author']."</td>
                       <td>".$row['description']."</td>
                       <td>".$row['published']."</td>
                       <td>".$row['publisher']."</td>
                       <td>".$row['type']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-success mx-4' style ='width: 100px;'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-danger mx-4 my-2' style ='width: 100px;'>Delete</button></a>
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