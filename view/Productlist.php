<?php


namespace model;

$products = new Book();
$product = $products->all();

?>
<head>
    <link rel="stylesheet" media="all" href="style/productlist.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="JS/Productlist.js"></script>
</head>
<body>
<div class="main">
    <form action="delete" id="myForm" method="post">
        <div class="products">
            <H1>Product list</H1>
            <p1 class="line"></p1>
            <div class="clearfix">
                <select name="all" id="all" onchange="delete_check_box()">
                    <option value="selected" selected>Delete selected</option>
                    <option value="mass">Mass delete action</option>
                </select>
                <button type="submit" name="delete_products" class="deletebtn" value="submit"
                        onclick="reload()">
                    <h>Apply</h>
                </button>
            </div>
        </div>
        <?php
        foreach ($product as $products) {
            ?>
            <div class="add" id="<?php echo $products['id']; ?>">
                <div class="checkbox">
                    <input type="checkbox" name="id[]" class="box" value= <?php echo $products['id']; ?>>
                </div>
                <div class="down">
                    <?php

                    $sku = $products['SKU'];
                    $name = $products['name'];
                    $price = $products['price'] . "$";
                    $extension = $products['extension'];
                    echo "<h3>$sku</h3>";
                    echo "<br>";
                    echo "<h3>$name</h3>";
                    echo "<br>";
                    echo "<h3>$price</h3>";
                    echo "<br>";
                    echo "<h3>$extension</h3>";

                    ?></div>
            </div>
        <?php } ?>
    </form>
</div>
</div>
</body>



