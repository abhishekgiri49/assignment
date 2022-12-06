<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A and A Shopping | E-commerce website | Group Assignment</title>
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>

    <?php include('./layouts/header.php'); ?>
    <div class="container">
        <section class="main-content">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li>Cart</li>
                </ul>
            </div>
            <div class="row">
                <h1 class="entry-title">Shopping Cart</h1>
                <div class="col-md-8 itemBlock-base-leftBlock  bg-grey">
                    <!-- <div class="verticalline"> <hr></div> -->
                    <div class="cart-content">
                        <div class="table-content">
                            <table class="shop_table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><img src="images/product/tshirt.jpg" alt=""></td>
                                        <td class="product-name">T-shirt<dl class="variation">
                                                <dt class="variation-name">Size:</dt>
                                                <dd class="variation-name">
                                                    <p>32</p>
                                                </dd>
                                                <dt class="variation-Color">Color:Green</dt>
                                                <dd class="variation-Color"></dd>
                                            </dl>
                                        </td>
                                        <td>20</td>
                                        <td>2</td>
                                        <td>40</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><img src="images/product/kurtha.jpg" alt=""></td>
                                        <td class="product-name">kurtha<dl class="variation">
                                                <dt class="variation-name">Size:</dt>
                                                <dd class="variation-name">
                                                    <p>S</p>
                                                </dd>
                                                <dt class="variation-Color">Color:Yellow</dt>
                                                <dd class="variation-Color"></dd>
                                            </dl>
                                        </td>
                                        <td>31</td>
                                        <td>2</td>
                                        <td>62</td>
                                        <td>X</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-grey" style="padding: 32px; 0">
                    <div class="text-container">
                        <a href="" class="cont-shopping">&lt;&lt;&lt; Return To Shopping</a>
                    </div>
                    <div class="total-container">
                        <div class="price-container">PRICE DETAILS (1 Item)</div>
                        <div class="price-list">
                            <div class="price-row"><span>Total MRP</span><span class="price-value ">2,199</span></div>
                            <div class="price-row"><span>Discount on MRP</span><span
                                    class="price-value price-discount"><span>-</span>1,210</span></div>
                            <div class="price-row"><span>Coupon Discount</span><span class="price-value text-red">Apply
                                    Coupon</span></div>
                                    <div class="price-row"><span><input type="text" class="form-coupon"></span><span class="price-value text-red">Apply
                                    </span></div>
                            <div class="price-total"><span>Total MRP</span><span class="price-value ">2,199</span></div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn-place">Checkout</button>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <?php include('./layouts/footer.php'); ?>

</body>

</html>