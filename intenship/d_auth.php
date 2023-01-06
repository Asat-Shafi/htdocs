<?php
if (isset($_POST['insert'])) {



$skills    =  $_POST['skills'];


$db = mysqli_connect("localhost", "root", "", "internship");

$sql = "INSERT INTO technology (tech) VALUES ('$skills')";

mysqli_query($db, $sql);
}




header("location:dept.php");




?>