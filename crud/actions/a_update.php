<!DOCTYPE html>
<html>
<head>
   <title >Delete Book</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class = "container my-4">

<?php 

require_once 'db_connect.php';

if ($_POST) {
   $isbn = $_POST['isbn'];
   $title = $_POST['title'];
   $img = $_POST['img'];
   $author = $_POST['author'];
   $desc = $_POST['description'];
   $published = $_POST['published'];
   $publisher= $_POST['publisher'];
   $type = $_POST['type'];

   $id = $_POST['id'];

   $sql = "UPDATE book SET isbn = '$isbn', title = '$title', img = '$img', author = '$author', description = '$desc', published = '$published', publisher = '$publisher', type = '$type' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<h3>Successfully Updated</h3>";

       echo "<a href='../update.php?id=" .$id."'><button type='button' class='btn btn-secondary' style ='width: 130px;'>Back</button></a>";

       echo  "<a href='../index.php'><button type='button' class='btn btn-success ml-2' style ='width: 130px;'>Show Media</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>
</div>

</body>
</html>