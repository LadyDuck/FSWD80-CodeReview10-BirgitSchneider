<!DOCTYPE html>
<html>
<head>
   <title>Add new Media</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

  <div class ="container">

   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method= "post">

          <div class="form-group">
              <label for="isbn">ISBN:</label>
              <input type="text" name="isbn" class="form-control" id="isbn" aria-describedby="isbn" placeholder="Enter ISBN">
          </div>
       
          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
          </div>

          <div class="form-group">
              <label for="image">Image:</label>
              <input type="text" name="img" class="form-control" id="imag" aria-describedby="image" placeholder="Enter Link">
          </div>
             
           <div class="form-group">
              <label for="author">Author:</label>
              <input type="text" name="author" class="form-control" id="author" aria-describedby="author" placeholder="Enter Author">
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" name="description" class="form-control" id="description" aria-describedby="description" placeholder="Enter Description">
          </div>  

          <div class="form-group">
              <label for="published">Publishing Date:</label>
              <input type="date" name="published" class="form-control" id="published" aria-describedby="published" placeholder="Enter Publishing Date">
          </div>  

          <div class="form-group">
              <label for="publisher">Publisher:</label>
              <input type="text" name="publisher" class="form-control" id="publisher" aria-describedby="publisher" placeholder="Enter Publisher">
          </div> 

            <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" name="type" class="form-control" id="type" aria-describedby="type" placeholder="Enter Type">
            </div> 

             <div class="form-group">
               <button  type="submit" class="btn btn-success">Insert Media</button >
               <a  href= "index.php"><button  type="button" class="btn btn-secondary" style ="width: 130px;">Back</button ></a > 

  </form>
          
               
          
      
   
</div>

</body>
</html>