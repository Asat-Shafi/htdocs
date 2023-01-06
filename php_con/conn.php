<?php
$connection = new mysqli("localhost","root","","navttc");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>