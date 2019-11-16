<!DOCTYPE html>
<html>
<head>
   <title >Delete Media</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container my-4">


<?php 

require_once 'db_connect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM book WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h3>Successfully deleted!!</h3>" ;
       echo "<a href='../index.php'><button type='button' class='btn btn-success' style ='width: 130px;'>Show Media</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>

</div>

</body>
</html>