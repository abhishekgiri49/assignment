<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A and A Shopping | E-commerce website | Group Assignment</title>
    <link href="./css/style.css" rel="stylesheet"/>
    <link href="./css/style1.css" rel="stylesheet"/>
</head>

<body>

<?php include('./layouts/header.php'); ?>
<div class="container index-body">
    <section class="banner">
    </section>
    <div class="row bg-gray">
<!--        <span  style="margin: 10px; font-weight: bold; font-size: x-large; color:#03a685">NEW ARRIVAL</span>-->
        <h3 class="entry-title">New Arrival</h3>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
        <div class="col-md-3">
            <?php include("layouts/product/product.php") ?>
        </div>
    </div>
    <div class="row offer-grid" style="margin: 10px;">
        <div class="col-md-3 " style="max-height: 200px">
            <span style="margin: 10px; font-weight: bold; font-size: x-large">OFFER</span>
            <div class=" offer" style="margin-top:10px ">
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            <span class="m-percent" style="font-weight: bolder; font-size: xx-large">30%</span>
                            <br>
                            <span class="m-span" style="font-weight: lighter; font-size: large">
                        off on all
                    </span>
                        </p>
                    </div>
                    <div class="col-md-5 lower">
                        <span style="font-weight: bolder; font-size: xx-large; color:red !important;">
                        LEVI'S
                    </span>
                    </div>

                </div>
            </div>
            <div class=" offer" style="margin-top:10px ">
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            <span class="m-percent" style="font-weight: bolder; font-size: xx-large">30%</span>
                            <br>
                            <span class="m-span" style="font-weight: lighter; font-size: large">
                        off on all
                    </span>
                        </p>
                    </div>
                    <div class="col-md-5 lower">
                    <span style="font-weight: bolder; font-size: xx-large; color:red !important;">
                        LEVI'S
                    </span>
                </div>

            </div>
        </div>
        </div>
        <div class="col-md-9 ">
            <div class="row">
                <span style="margin: 10px; font-weight: bold; font-size: x-large">HOT DEALS</span>
                <div class="hot-deal-wrapper" style=" width: 50%; ">
                    <div class="hot-deal-card">
                        <div class="hot-deal-image">
                            <img class="" style="width: 100%; max-height: 200px"
                                 src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="">
                        </div>
                        <div class="hot-deal-detail">
                            <span class="font-800 font-2xl">Mens Winter Boot</span><br>
                            <small class="font-500 font-sm">Product Category</small>
                            <br>
                            <div class="price">
                                <span class="product-price font-xl">CA $870</span>
                                <span class="text-warning strike font-l">CA $783</span>
                            </div>
                            <div class="al-center">
                                <span class="buy-now">ADD TO CART</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hot-deal-wrapper" style=" width: 50%; ">
                    <div class="hot-deal-card">
                        <div class="hot-deal-image">
                            <img class="" style="width: 100%; max-height: 200px"
                                 src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="">
                        </div>
                        <div class="hot-deal-detail">
                            <span class="font-800 font-2xl">Mens Winter Boot</span><br>
                            <small class="font-500 font-sm">Product Category</small>
                            <br>
                            <div class="price">
                                <span class="product-price font-xl">CA $870</span>
                                <span class="text-warning strike font-l">CA $783</span>
                            </div>
                            <div class="al-center">
                                <span class="buy-now">ADD TO CART</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
   
    <div class="row bg-gray" style="max-height: 500px">
        <h3 class="entry-title">FEATURED</h3>
<!--        <div class="row">-->
                <div class="wrapper">
                    <div class="tabs">
                        <div class="tab">
                            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                            <label for="tab-1" class="tab-label">Mens</label>
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                            <label for="tab-2" class="tab-label">Womens</label>
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                            <label for="tab-3" class="tab-label">Kids</label>
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php include("layouts/product/product.php") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
<!--        </div>-->

    </div>


</div>

<?php include('./layouts/footer.php'); ?>

</body>

</html>