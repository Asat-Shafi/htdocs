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
   <form class="row g-3" action="auth.php"  method="POST">
  <div class="col-md-6">
  <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" required name="name">
  </div>
  <div class="col-md-6">
    <label for="inputfathername" class="form-label">father_name</label>
    <input type="text" class="form-control" id="inputfathername" name="father_name">
   
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">caste</label>
    <input type="text" class="form-control" id="inputcaste" placeholder="chandio" reqsuired name="caste">
  </div>


  <div class="col-md-2">
    <label for="inputBatch" class="form-label">dob</label>
    <input type="text" class="form-control" id="inputdob" required maxlength="10" value="<?php echo date("Y");?>"  name="dob">
  </div>

  <div class="col-md-2">
    <label for="inputRoll" class="form-label">address</label>
    <input type="text" class="form-control" id="inputaddress"placeholder="rohri" name="address">
  </div>

  <div class="col-md-2">
    <label for="inputphone" class="form-label">phone</label>
    <input type="text" class="form-control" id="inputphone"  name="phone">
  </div>


  <div class="col-md-2">
    <label for="inputhouserent" class="form-label">house_rent</label>
    <input type="text" class="form-control" id="inputhouserent"  name="house_rent">
  </div>

  <div class="col-md-2">
    <label for="inputsalary" class="form-label">salary</label>
    <input type="text" class="form-control" id="inputsalary"  name="salary">
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