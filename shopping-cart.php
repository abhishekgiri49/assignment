<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A and A Shopping | E-commerce website | Group Assignment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./css/style.css" rel="stylesheet"/>
    <link href="./css/style1.css" rel="stylesheet"/>
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
                <div class="col-md-8 itemBlock-base-leftBlock  bg-grey tb-width-100">
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
                                <tbody id="items">
                                </tbody>
                            </table>
                            <!-- <div id="items"></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-grey tb-width-100" style="padding: 32px; 0">
                    <div class="text-container">
                        <a href="" class="cont-shopping">&lt;&lt;&lt; Return To Shopping</a>
                    </div>
                    <div class="total-container">
                        <div class="price-container">PRICE DETAILS (1 Item)</div>
                        <div class="price-list">
                            <div class="price-row"><span>Total MRP</span><span class="price-value" id="sumtotal"></span></div>
                            <div class="price-row"><span>Discount on MRP</span><span
                                    class="price-value price-discount" id="discount"></span></div>
                            <div class="price-row"><span>Coupon Discount</span><span class="price-value text-red">Apply
                                    Coupon</span></div>
                                    <div class="price-row"><span><input type="text" class="form-coupon"></span><span class="price-value text-red">Apply
                                    </span></div>
                            <div class="price-total"><span>Total MRP</span><span class="price-value " id="total"></span></div>
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
<script src="js/script.js"></script>
</body>

</html>