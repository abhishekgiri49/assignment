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
                <h3 class="entry-title">Shipping & Payments</h3>
                <div class="col-md-8 itemBlock-base-leftBlock  bg-grey tb-width-100">
                    <div class="shipping-container">
                        <div class="">
                            <h2>Shipping Address</h2>
                            <!-- <form method="post" action="#">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="First Name">First Name</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter first name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="First Name">First Name</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Address">Address</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Unit">Unit</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Unit">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="City">City</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Provice">Provice</label>
                                        <select name="" class="form-control" id="">
                                            <option value="AB">Alberta</option>
                                            <option value="BC">British Columbia</option>
                                            <option value="MB">Manitoba</option>
                                            <option value="NB">New Brunswick</option>
                                            <option value="NL">Newfoundland and Labrador</option>
                                            <option value="NT">Northwest Territories</option>
                                            <option value="NS">Nova Scotia</option>
                                            <option value="NU">Nunavut</option>
                                            <option value="ON">Ontario</option>
                                            <option value="PE">Prince Edward Island</option>
                                            <option value="QC">Quebec</option>
                                            <option value="SK">Saskatchewan</option>
                                            <option value="YT">Yukon</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Postal Code">Postal Code</label>
                                        <input type="text" name="" class="form-control" placeholder="Enter Postal Code">
                                    </div>
                                </div>
                            </form> -->
                            <div class="row">
                                <div class="col-50 ">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="john@example.com">
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="New York">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <select name="" id="">
                                                <option value="AB">Alberta</option>
                                                <option value="BC">British Columbia</option>
                                                <option value="MB">Manitoba</option>
                                                <option value="NB">New Brunswick</option>
                                                <option value="NL">Newfoundland and Labrador</option>
                                                <option value="NT">Northwest Territories</option>
                                                <option value="NS">Nova Scotia</option>
                                                <option value="NU">Nunavut</option>
                                                <option value="ON">Ontario</option>
                                                <option value="PE">Prince Edward Island</option>
                                                <option value="QC">Quebec</option>
                                                <option value="SK">Saskatchewan</option>
                                                <option value="YT">Yukon</option>
                                            </select>
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 bg-grey tb-width-100 return-shipping" style="padding: 32px; 0">
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
                            <div class="price-row"><span><input type="text" class="form-coupon"></span><span
                                    class="price-value text-red">Apply
                                </span></div>
                            <div class="price-total"><span>Total MRP</span><span class="price-value ">2,199</span></div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn-place">Pay Now</button>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <?php include('./layouts/footer.php'); ?>

</body>

</html>