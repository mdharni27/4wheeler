<!DOCTYPE html>
<html lang="en US">
    <!-- client id 361991129165-slmtj321kjllniksgto5sahmr19bb885.apps.googleusercontent.com 
         client secret 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-->
<head>
    <meta charset="UTF-8">
    <!--=============== Meta Viewport ===============-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== ===============-->

    <!--=============== Meta OpenGraph Data ===============-->
    <meta property="og:description" content="4wheeler login">
    <meta property="og:title" content="login page">

    <!--=============== FaveIcon ===============-->
    <link rel="shortcut icon" href="public/icon/brand.io.svg" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" type="text/html" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <!--=============== L BACKGROUND 1 ===============-->
    <div class="objects__image">
       <img src="public/Images/login.svg" alt="Car Image" class="image">
       <div class="blend"></div>
    </div>

    <!--=============== L CONTENT LOGIN 1(1) ===============-->
    <div class="container__login">
        <div class="wrap">
            <!--=============== L LOGO-SUBTITLE 1(1.1) ===============-->
            <div class="logo__title">
                <div class="logo__wrap">
                  <a href="index.html" class="nav__logo">
                     <img src="public/icon/logo white.svg" alt="4Wheeler-logo" class="nav__logo-img">
                  </a>

                <h4 class="heading__16 sologon">Discover Your Dream Car</h4>
                </div>
            </div>

            <!--=============== L USER-PANNEL 1(1.2) ===============-->
            <div class="user__pannel">
                <div class="pannel__container">
                    <h1 class="heading__28 pannel__login">login</h1>
                    
                    <div class="pannel__create-account" id="pannel-create">
                        <h2 class="new__user heading__18">New user?</h2>
                        <a href="signup.php" role="button" class="link__account">Create an account</a>
                    </div>

                    <div class="userinput__container">
                        <form action="loginconfig.php" method="POST" class="form">

                            <! Text-field Email>
            
                            <div class="input__1" id="login-email">
                                <label class="heading__18 lables" for="Email">Email Address*</label>
                                <input type="email" name="email" id="inputemail" placeholder="Enter your email address" required autofocus>
                            </div>
            
                            <! Text-field Password>
            
                            <div class="input__1" id="login-password">
                                <label class="heading__18 lables" for="Your Password">Password*</label>
                                <input type="password" name="password" id="inputpassword" placeholder="Enter your password" required>
                            </div>
            
                            <! Button>
                               <a href="#" role="button" class="submit__container">
                                   <button class="login__button button__primary" type="submit">log in</button>
                               </a>
                        </form>
                    </div>

                    <div class="br">
                        <hr class="horizontal__line horizontal__switch">
                        <h3 class="heading__16 horizontal__OR or__color">OR</h3>
                        <hr class="horizontal__line horizontal__switch">
                    </div>

                    <div class="menu__button menu__button-align">
                        <a href="#" role="button" class="button button__google google__switch">
                                <img src="public/icon/google.svg" alt="Google Social" class="icon">
                                <span class="heading__14">Google</span>
                        </a>

                        <a href="#" role="button" class="button button__facebook">
                            <img src="public/icon/facebook.svg" alt="Facebook Social" class="icon">
                            <span class="heading__14">Facebook</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>