<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <?php

   include "conn.php";

    $res = mysqli_query($conn, "SELECT * FROM `product`");

    if (mysqli_num_rows($res) == 0) {
        die("No Data Found");
    
    
    }

    ?>

    <div class="container">

        <div class="row py-2">

            <?php while ($row = mysqli_fetch_assoc($res)) : ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?= "image/" . $row["image"] ?>" width="100" height="200" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-subtitle text-muted"><?= $row["product"] ?></h5>
                        <h6 class="card-text " id="pp"><?= $row["technology"] ?></h6>
                       
                        <p class="card-text " id="pp"><?= $row["price"] ?></p>
                        <p class="card-text " id="pp"><?= $row["description"] ?></p>
                        <a href="update.php?id=<?= $row["id"] ?>">Edit</a>
                        <a href="delete.php?id=<?= $row["id"] ?>">Delete</a>
                        
                       
                    </div>
                </div>
            </div>















            <?php endwhile; ?>
        </div>
    </div>

<?php   include "conn_close.php"; ?>

    <a href=" index.php">
        <h3>Go Back</h3>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>

</html>