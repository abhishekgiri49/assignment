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

            <div class="col-md-12">
                <div class="row">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">User</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-3 col-12-mb">
                        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                            <li><a data-toggle="tab" href="#dashboard">Dashboard</a></li>
                            <li><a data-toggle="tab" href="#myprofile">My Profile</a></li>
                            <li class="active"><a data-toggle="tab" href="#review">My Reviews</a></li>
                            <li><a data-toggle="tab" href="#orders">My Orders</a></li>
                            <li><a data-toggle="tab" href="#address">My Address</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="shipping-container">
                            <div class="">
                                <h2>Edit Profile</h2>
                                <form method="post" action="#">

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
                                <div class="col-md-4">
                        <button type="button" class="btn-place">Update</button>
                    </div>
                            </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <?php include('./layouts/footer.php'); ?>
    <script src="js/app.js"></script>
</body>

</html>