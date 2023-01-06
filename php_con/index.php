<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
@include('conn.php');


$sql = "SELECT id, name, address, phone FROM web";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      
        echo "". $row["id"]." " . "   ". $row["name"]." ". " " ." ". $row["address"] . " "." ". $row["phone"] . "<br><br>" ;
    }
} else {
    echo "0 results";
}

@include('conn_close');



?>


</body>
</html>