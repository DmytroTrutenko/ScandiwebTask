<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_item = $_POST['check_list'];
}

require 'configDB.php';

foreach( $product_item as $checkbox) {
    $sql = "DELETE FROM products WHERE SKU = '$checkbox'";
    $conn->query($sql);
}


$conn->close();
header('Location: /scandiwebtask/index.php');
?>
