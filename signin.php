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
    <!-- <div class="container"> -->
    <section class="main-content">
        <div class="register-page">
            <div class="row">
                <div class="col-md-8"></div>

                <div class="col-md-4">
                    <div class="login-container">
                        <div class="form-btn">
                            <span>Login</span>
                        </div>
                        <form class="auth-login-form mt-2" method="POST" action="">

                                <input type="text" class="form-control" name="email" id="login-email"
                                    placeholder="Email" aria-describedby="login-email" tabindex="1"
                                    autofocus />

                                    <input type="password" class="form-control form-control-merge" id="login-password"
                                        name="password" tabindex="2"
                                        placeholder="Password"
                                        aria-describedby="login-password" />
                                
                            <button type="submit" class="login-btn" tabindex="4">Sign in</button>
                            <br>
                            <br>
                            <a class="forgot-password" href="">Forgot password</a>
                            <p style="font-size:15px;font-weight: bold;">OR</p>
                            <a class="forgot-password" href="">Create Account</a>
                        </form>
                        
                            
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- </div> -->

    <?php include('./layouts/footer.php'); ?>

</body>

</html>