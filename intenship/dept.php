<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

  <!--start form-->
   <div class="container">
   <form class="row g-3" method="POST" action="d_auth.php">
  
<div class="col-md-6">
  <label for="inputName" class="form-label">Skills</label>
    <input type="text" class="form-control" name="skills" required>
   <br>
<br>
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
  </div>
<br>
<div class="col-12">
    <button class="btn btn-danger"><a href="index.php">Goto main page</button>
  </div>
  <?php

$conn = mysqli_connect("localhost","root","","internship");
$fetch = mysqli_query($conn, "SELECT * FROM technology");

?>


</div>
<!--end form-->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>