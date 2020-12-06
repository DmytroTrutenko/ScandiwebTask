<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poduct Add</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <form action="addCard.php" class="form_wrap" method="post">
        <div class="header">
            <h1>Product Add</h1>
          <div>
            <button type="submit" class="btn btn-primary btn_card" name="submitCard">Save</button>
            <button type="reset" class="btn btn-success" onclick="window.location.href='index.php'" >Cancel</button>
          </div>
        </div>
        <div class="product__add">
            <div class="input_group">
                <p>
                    SKU
                </p>
                <input type="text" class="sku" name="sku" id="sku" placeholder="Unique for each product">
            </div>
            <div class="input_group">
                <p>
                    NAME
                </p>
                <input type="text" class="name" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="input_group">
                <p>
                    Price($)
                </p>
                <input type="text" class="price" name="price" id="price" placeholder="Enter price">
            </div>
            <div class="input_group">
                <p>
                    Type Switcher
                </p>
                <select class="switcher" name="switcher" id="switcher">
                    <option value="dvd">DVD</option>
                    <option value="book">Book</option>
                    <option value="furniture">Furniture</option>
                </select>
            </div>
            <div class="dvd toggle-form" id="dvd">
                <div class="input_group" >
                    <p>
                        Size(MB)
                    </p>
                    <input type="text" class="size dvd" name="size" id="size" placeholder="Enter size">
                </div>
                <span>“Please, provide size”</span>
            </div>

            <div class="furniture toggle-form" id="furniture">
                <div class="input_group">
                    <p>
                        Height(CM)
                    </p>
                    <input type="text" class="height furniture" name="height" id="height" placeholder="Enter height">
                </div>
                <div class="input_group">
                    <p>
                        Width(CM)
                    </p>
                    <input type="text" class="width furniture" name="width" id="width" placeholder="Enter width">
                </div>
                <div class="input_group">
                    <p>
                        Lenght(CM)
                    </p>
                    <input type="text" class="lenght furniture" name="lenght" id="lenght" placeholder="Enter lenght">
                </div>
                <span>“Please, provide dimensions”</span>
            </div>

            <div class="book toggle-form" id="book">
                <div class="input_group">
                    <p>
                        Weight(KG)
                    </p>
                    <input type="text" class="weight book" name="weight" id="weight" placeholder="Enter weight">
                </div>
                <span>“Please, provide weight”</span>
            </div>
        </div>
        <span class="error"></span>
        <div class="footer">
            <p>Scandiweb Test assignment</p>
        </div>
    </form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>