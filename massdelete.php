<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product_item = $_POST['check_list'];
}

require 'configDB.php';

foreach( $product_item as $checkbox) {
    $sql = "DELETE FROM products WHERE SKU = '$checkbox'";
}

if($conn->query($sql) === TRUE){
    echo "Record delete";
}else {
 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
header('Location: /scandiwebtask/index.php');

?>
