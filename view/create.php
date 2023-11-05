<?php

use model\Types;

$type = new Types();
$types = $type->all();
var_dump($types);
$data = array();
$type_new = new Types();
?>
<head>
    <script type="text/javascript" src="path-to-javascript-file.js"></script>
    <link rel="stylesheet" media="all" href="style/create.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="JS/create.js"></script>
</head>
<body>
<div class="main">
    <div class="products">
        <H1>Product add</H1>
        <div class="submit">
            <input class="su" type="submit" name="submit" value="Save" form="add_product">
        </div>
        <p1 class="line"></p1>
    </div>
    <div class="form">
        <form id="add_product" action="store" method="post">
            <div class="field">
                <div class="title">
                    <label for="fname"><h2> SKU </h2></label>
                </div>
                <div class="input">
                    <input type="text" id="sku" name="sku">
                </div>
            </div>
            <div class="field">
                <div class="title">
                    <label for="fname"><h2> NAME </h2></label>
                </div>
                <div class="input">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="field">
                <div class="title">
                    <label for="fname"><h2> PRICE </h2></label>
                </div>
                <div class="input">
                    <input type="text" id="price" name="price">
                </div>
            </div>
            <div class="select">
                <div
                        class="switcher"><label ><h2>TypeSwitcher</h2></label>
                </div>
                <div class="put">
                    <select id="select" name="type" onchange="myFunction(this)">
                        <option value="TypeSwitcher"> TypeSwitcher</option>
                        <?php foreach ($types as $value) { ?>
                            <option value="<?php echo $value['name'] ?>" name="<?php echo $value['name'] ?>"
                                    id="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="size" id="size" style="display: none">
                <div class="writen"><h3> SIZE </h3></div>
                <div class="size"><input type="text" name="size" onchange="change_function(this)">
                </div>
            </div>
            <div class="size" id="height" style="display: none">
                <div class="writen"><h3> Height </h3></div>
                <div class="size"><input type="text" id="tall" name="tall"></div>
                <div class="writen"><h3> Width </h3></div>
                <div class="size"><input type="text" id="width" name="width"></div>
                <div class="writen"><h3> Length </h3></div>
                <div class="size"><input type="text" id="length" name="length"></div>
            </div>

            <div class="size" id="weight" style="display: none">
                <div class="writen"><h3> weight</h3></div>
                <div class="size"><input type="text" name="weight" onchange="change_function(this)">
                </div>
            </div>

        </form>
    </div>

</div>
</body>
