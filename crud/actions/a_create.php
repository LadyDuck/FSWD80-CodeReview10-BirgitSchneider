<!DOCTYPE html>
<html>
<head>
   <title>Add new Media</title>

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
   

   $sql = "INSERT INTO book (isbn, title, img, author, description, published, publisher, type) VALUES ('$isbn', '$title','$img', '$author', '$desc', '$published', '$publisher','$type')";

    if($connect->query($sql) === TRUE) {

       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button' class='btn btn-secondary' style ='width: 130px;'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-success ml-2' style ='width: 130px;'>Show Media</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>

</div>

</body>
</html>