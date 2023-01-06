<?php

 
if (isset($_POST['upload'])) {

 $name = $_POST['name']; 
 $father_name = $_POST['father_name'];
 $caste = $_POST['caste'];
 $dob = $_POST['dob'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $house_rent = $_POST['house_rent'];
 $salary = $_POST['salary'];

 $db = mysqli_connect("localhost", "root", "", "form");

$sql = "INSERT INTO admissions (name, father_name, caste, dob, address, phone, house_rent, salary) VALUES ('$name','$father_name','$caste','$dob','$address','$phone','$house_rent','$salary')"; 
 

 mysqli_query($db, $sql);

 

 

}

header("location:index.php");


?>