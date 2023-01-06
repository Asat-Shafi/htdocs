<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "image/" . $filename ;
    $p_name = $_POST['p_name'];
    $description = $_POST['des'];
    $price = $_POST['price'];
    $technology = $_POST['tech'];
    $db = mysqli_connect("localhost", "root", "", "gallery");


    $sql = "INSERT INTO product (product,image,description,price,technology) VALUES ('$p_name','$filename','$description','$price','$technology')";
    // Execute query
    mysqli_query($db, $sql);

    
    
    
    
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

header("location:index.php");



?>