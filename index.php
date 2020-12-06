<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="massdelete.php" method="post" class="form_wrap" >
        <div class="header">
            <h1>Product List</h1>
           <div>
                       <button type="button" class="btn btn-primary" onclick="window.location.href='add.php'">Add</button>
                       <button type="submit" class="btn btn-success">Mass delete</button>
           </div>
        </div>
        <div class="product__list">

        <?php
            require 'configDB.php';

            $sql = 'SELECT*FROM products';
            $result = $conn->query($sql);

            if($result->num_rows >0) {
            while($row = $result->fetch_assoc()) {
                    echo '<label class="product_item">
                             <input type="checkbox" name="check_list[]" value='.$row['SKU'].'>
                             <span>'.$row['SKU'].'</span>
                             <span>'.$row['NAME'].'</span>
                             <span>'.$row['Price'].' $</span>';
                    if($row['Size'] != 0){
                        echo ' <span>'.$row['Size'].' MB</span>';
                    }
                    if($row['Height'] != 0 || $row['Width'] !=0 || $row['Lenght'] !=0){
                        echo '<span>Dimensions: '.$row['Height'].'x'.$row['Width'].'x'.$row['Lenght'].'</span>';
                    }
                    if($row['Weight'] != 0){
                        echo '<span>'.$row['Weight'].' KG</span>';
                    }
                    echo '<span class="check"></span>
                          </label>';
                }
            }

            $conn->close();
        ?>



        </div>
        <div class="footer">
            <p>Scandiweb Test assignment</p>
        </div>
    </form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>