<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
   <form class="row g-3" action="auth.php"  method="POST" enctype="multipart/form-data">
   <div class="col-md-6">
  <label for="inputPhoto" class="form-label">Product Image</label>
    <input type="file" class="form-control"  required name="image" id="image">
  </div>
  

   <div class="col-md-6">
  <label for="inputName" class="form-label">Product Name</label>
    <input type="text" class="form-control"  required name="p_name">
  </div>
  <div class="col-md-6">
    <label for="inputDescription" class="form-label">Description</label>
    <input type="text" class="form-control"  required name="des">
  </div>

  <div class="col-md-2">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" required   name="price">
  </div>

  <div class="col-md-2">
    <label for="inputTech" class="form-label">Technology</label>
    <select id="inputTech" class="form-select" name="tech" >
      <option selected>Laravel</option>
      <option>HTML, CSS</option>
      <option>React JS</option>
      <option>JavaScript</option>
      <option>Bootstrap</option>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="upload">Insert</button>
  </div>
</form>


   </div>
<div class="container">
    <br>
<form action="show.php">
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="show">Show All Data</button>
  </div>
</form>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>