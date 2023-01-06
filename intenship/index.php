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
   <form class="row g-3" method="POST" action="auth.php">
  
<div class="col-md-6">
  <label for="inputName" class="form-label">Name of Internee</label>
    <input type="text" class="form-control" name="internee" required>
  </div>
  <div class="col-md-6">
    <label for="inputDescription" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" required>
  </div>

  <div class="col-md-3">
    <label for="inputPhone" class="form-label">Phone No.</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  <div class="col-md-4">
    <label for="inputaddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" required>
  </div>

  <div class="col-md-2">
    <label for="inputstipend" class="form-label">Stipend</label>
    <input type="text" class="form-control" name="stipend" required> 
  </div>

  <?php
  $conn =  mysqli_connect("localhost","root","","internship");
  $fetch = mysqli_query($conn,"SELECT * FROM technology");
  ?>


  <div class="col-md-3">
    <label for="inputskills" class="form-label">Skills/Technology</label>
    <select  class="form-select" name="skills" >
      <option selected>Select</option>
   
      <?php while ($row = mysqli_fetch_assoc($fetch)): ?>
   
        <option><?= $row["tech"]?></option>
   
        <?php endwhile;?>
   
   
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
  </div>
  
</form>
<br>
<br>

<div class="col-12">
    <button class="btn btn-danger"><a href="dept.php"> add Skills</button>
  </div>



</div>
<!--end form-->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>