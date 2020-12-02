<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $height = $_POST['height'];
  $width = $_POST['width'];
  $lenght = $_POST['lenght'];
  $weight = $_POST['weight'];
}

require 'configDB.php';

$sql = "INSERT INTO products(SKU, NAME, Price, Size, Height, Width, Lenght, Weight)
           VALUES('$sku','$name','$price','$size','$height','$width','$lenght','$weight')";

if($conn->query($sql) === TRUE){
    echo "Record created";
}else {
 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}





$conn->close();
header('Location: /scandiwebtask/index.php');

?>