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
        <section class="product-detail">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Men Clothing</a></li>
                    <li><a href="#">T-shirt</a></li>
                    <li>Louis Philippe Sport Tshirt</li>
                </ul>
            </div>
            <div class="row p-product-grid">
                <div class="col-md-4 mb-width-100">
                    <div class="product-item-image">
                        <img src="images/product/tshirt.jpg" alt="">
                    </div>

                </div>
                <div class="col-md-8 mb-width-100">
                    <div class="product-item-options">
                        <h4>Louis Philippe Sport Tshirt</h4>

                        <p>Men Burgundy Solid Polo Collar T-shirt</p>
                        <div class="product-item-options__rating">
                            <span>4.5 <img src="images/star.png" alt="" height="20"></span>
                        </div>
                        <strong> ₹779 | MRP ₹1299 <span style="color:orange;">(40% OFF)</span></strong>
                        <p style="color:#03a685;">inclusive of all taxes</p>
                        <div class="desc-group">
                            <strong> More Colors</strong>
                            <div class="shoes-colors">
                                <span class="blue active"></span>
                                <span class="green"></span>
                                <span class="yellow"></span>
                                <span class="rose"></span>
                            </div>
                        </div>
                        <div class="desc-group">
                            <strong> Select Size</strong>
                            <div class="shoes-size">
                                <span class="size-box active">S</span>
                                <span class="size-box">M</span>
                                <span class="size-box">L</span>
                                <span class="size-box">XL</span>
                            </div>
                        </div>
                        <div class="desc-group">
                            <div class="sign">
                                <strong> Quantity</strong> <span id="minus"><i class="fa fa-minus"></i></span> <small
                                    id="quantity">1</small> <span id="plus"><i class="fa fa-plus"></i></span> </div>
                            <button type="submit" class="btn btn-success"> Add to Cart</button>
                        </div>

                        <div class="desc-group">
                            <label for="share">Share:</label>
                            <ul>
                                <li><img src="images/fb.png" class="fa-icon" alt=""></li>
                                <!-- <li><img src="images/yt.png" class="fa-icon" alt=""></li> -->
                                <li><img src="images/insta.png" class="fa-icon" alt=""></li>
                            </ul>

                            <!--  <a href="#" target="_blank" class="pg-social-twitter"><i class="fab fa-twitter"></i></a> -->
                        </div>
                        <hr>
                        <h4>Specifications</h4>
                        <div class="specification-table">
                            <div class="index-row">
                                <div class="index-rowKey">Care for me</div>
                                <div class="index-rowValue"></div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Closure</div>
                                <div class="index-rowValue">Button</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Fabric</div>
                                <div class="index-rowValue">Cotton</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Fabric 2</div>
                                <div class="index-rowValue">Polyester</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Fit</div>
                                <div class="index-rowValue">Regular Fit</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Length</div>
                                <div class="index-rowValue">Regular</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Main Trend</div>
                                <div class="index-rowValue">New Basics</div>
                            </div>
                            <div class="index-row">
                                <div class="index-rowKey">Multipack Set</div>
                                <div class="index-rowValue">Single</div>
                            </div>
                        </div>
                        <hr>
                        <h4>Customer Reviews</h4>
                        <div class="testimonial-box-container">
                            <!--BOX-1-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="images/c-1.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Touseeq Ijaz</strong>
                                            <span>@touseeqijazweb</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat
                                        quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae
                                        doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.
                                    </p>
                                </div>
                            </div>
                            <!--BOX-2-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="images/c-2.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>J.K Rowling</strong>
                                            <span>@jkrowling</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat
                                        quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae
                                        doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.
                                    </p>
                                </div>
                            </div>
                            <!--BOX-3-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="images/c-3.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Harry Potter</strong>
                                            <span>@DanielRedclief</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat
                                        quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae
                                        doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.
                                    </p>
                                </div>
                            </div>
                            <!--BOX-4-------------->
                            <div class="testimonial-box">
                                <!--top------------------------->
                                <div class="box-top">
                                    <!--profile----->
                                    <div class="profile">
                                        <!--img---->
                                        <div class="profile-img">
                                            <img src="images/c-4.jpg" />
                                        </div>
                                        <!--name-and-username-->
                                        <div class="name-user">
                                            <strong>Oliva</strong>
                                            <span>@Olivaadward</span>
                                        </div>
                                    </div>
                                    <!--reviews------>
                                    <div class="reviews">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <!--Empty star-->
                                    </div>
                                </div>
                                <!--Comments---------------------------------------->
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat
                                        quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae
                                        doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <?php include('./layouts/footer.php'); ?>

</body>

</html>