<?php

$id = $_GET["id"];


include "conn.php";

// sql to delete a record
$sql = "DELETE FROM product WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


header("location:show.php");

?>