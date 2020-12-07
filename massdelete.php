<?php
require 'configDB.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['check_list'])) {
    $conn->close();
    header('Location: /scandiwebtask/index.php');
    }else{
    $product_item = $_POST['check_list'];
    }

}

foreach( $product_item as $checkbox) {
    $sql = "DELETE FROM products WHERE SKU = '$checkbox'";
    $conn->query($sql);
}


$conn->close();
header('Location: /scandiwebtask/index.php');
?>
