<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
    </head>
<body>

<?php


// Create connection
$conn =  mysqli_connect("localhost", "root", "", "form");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, father_name, caste, dob, address, phone, house_rent, salary FROM admissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   echo'<div class="card" style="width: 18rem;">
   <div class="card-header">
     Featured
    
   <ul class="list-group list-group-flush">
     <li class="list-group-item">  item</li>
     <li class="list-group-item">A second item</li>
     <li class="list-group-item">A third item</li>
   </ul>
   </div>
 </div>';

    while($row = $result->fetch_assoc()) {
       echo $row["name"] . '<br>'      ;
    }
    

} else {
    echo "0 results";
}


$conn->close();
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>
</html>