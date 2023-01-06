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
     $user = $_POST['uname'];
     
    
echo $user;
 $age = 0;

switch($age)
{

case $age>=1 && $age<=10:
echo "Child";
break;

case $age>=11 && $age<=17:
echo "Pre-Mature";
break;

case $age>=18 && $age<=28:
echo "Young";
break;

case $age>=29 && $age<=50:
echo "Mature";
break;

case $age>=51 && $age<=100:
echo "Old";
break;

default:
echo "Invalid age no.";

}

?> 
    
    ?>
</body>
</html>