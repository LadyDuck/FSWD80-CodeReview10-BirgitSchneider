<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM book  WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit book</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style> -->

</head>
<body>

<div class ="container">
<fieldset>
   <legend>Edit Book</legend>

   

   <form action="actions/a_update.php"  method="post">
      
           <div class="form-group">
              <label for="isbn">ISBN:</label>
              <input type="text" name="isbn" value="<?php echo $data['isbn'] ?>" class="form-control" id="isbn" aria-describedby="isbn" placeholder="Enter ISBN">
          </div>


          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="title" value ="<?php echo $data['title'] ?>" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
          </div>

          <div class="form-group">
              <label for="image">Image:</label>
              <input type="text" name="img" value ="<?php echo $data['img'] ?>" class="form-control" id="imag" aria-describedby="image" placeholder="Enter Link">
          </div>

          <div class="form-group">
              <label for="author">Author:</label>
              <input type="text" name="author" value ="<?php echo $data['author'] ?>" class="form-control" id="author" aria-describedby="author" placeholder="Enter Author">
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" name="description" value ="<?php echo $data['description'] ?>" class="form-control" id="description" aria-describedby="description" placeholder="Enter Description">
          </div>

           <div class="form-group">
              <label for="published">Publishing Date:</label>
              <input type="date" name="published" value ="<?php echo $data['published'] ?>" class="form-control" id="published" aria-describedby="published" placeholder="Enter Publishing Date">
          </div>

           <div class="form-group">
              <label for="publisher">Publisher:</label>
              <input type="text" name="publisher" value ="<?php echo $data['publisher'] ?>" class="form-control" id="publisher" aria-describedby="publisher" placeholder="Enter Publisher">
          </div>

           <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" name="type" value ="<?php echo $data['type'] ?>" class="form-control" id="type" aria-describedby="type" placeholder="Enter Type">
          </div>

           <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <div class="form-group">
               <button  type="submit" class="btn btn-success">Save Changes</button >
               <a  href= "index.php"><button  type="button" class="btn btn-secondary" style ="width: 130px;">Back</button ></a >  
   </form >


</div>
</body >
</html >

<?php
}
?>