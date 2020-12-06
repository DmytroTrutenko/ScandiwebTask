<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];

   if(empty($_POST['weight'])){
     $weight = 0;
   }else{
     $weight= $_POST['weight'];
   }

   if(empty($_POST['size'])){
     $size = 0;
   }else{
     $size= $_POST['size'];
   }

   if(empty($_POST['height'])){
     $height = 0;
   }else{
     $height= $_POST['height'];
   }

   if(empty($_POST['width'])){
     $width = 0;
   }else{
     $width= $_POST['width'];
   }

   if(empty($_POST['lenght'])){
     $lenght = 0;
   }else{
     $lenght= $_POST['lenght'];
   }

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