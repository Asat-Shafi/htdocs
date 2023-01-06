<?php
if (isset($_POST['insert'])){

$internee    = $_POST['internee'];
$description = $_POST['description'];
$phone       = $_POST['phone'];
$address     = $_POST['address'];
$stipend     = $_POST['stipend'];
$skills      = $_POST['skills'];

$db = mysqli_connect("localhost", "root","", "internship");

$sql = "INSERT INTO personal_data (internee,description,phone,address,stipend,skills) VALUES ('$internee','$description','$phone','$address','$stipend','$skills')";

mysqli_query($db, $sql);
}

 


?>