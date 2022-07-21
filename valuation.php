<!DOCTYPE html>
<html lang="en US">

<head>
    <meta charset="UTF-8">
    <!--=============== Meta Viewport ===============-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== ===============-->

    <!--=============== Meta OpenGraph Data ===============-->
    <meta property="og:image" content="">
    <meta property="og:description" content="4wheeler is an automotive portal of cars specificaton for every type of customer. <br> We helps you to find your dream car with sheer guidance.">
    <meta property="og:title" content="Resale">

    <!--=============== FaveIcon ===============-->
    <link rel="shortcut icon" href="public/icon/brand.io.svg" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" type="text/html" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style 2.css">
</head>


<body> 
    <header class="header" id="header">
         <!--=============== Navigation-bar 1(1) ===============-->
        <nav class="nav container">
            <!--=============== Brand-logo 1(1.1)===============-->
            <a href="#" class="nav__logo">
                    <img src="public/icon/logo.svg" alt="4Wheeler-logo" class="nav__logo-img">
            </a>

            <!--=============== Nav-list 1(1.2) ===============-->
            <ul class="nav__list" style="margin-bottom:-2px;">
                <li class="nav__item"> 
                    <a href="index.php" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        New Cars
                    </a>
                </li>
                <li class="nav__item"> 
                    <a href="Resale.php" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        Resale
                    </a>
                </li>
                <li class="nav__item navg"> 
                    <a href="https://www.cars24.com/rto-vehicle-registration-details/" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        RTO Information
                    </a>
                </li>
				<?php /*if($_SESSION['email']) { 
					
                echo "<li class='nav__item'> <a href='logout.php' class='main__hover nav__link active-link heading__16 underline__animations'>
                      Log Out
                      </a>
                       </li>";
				} */?>
			</ul>
             
            <!--=============== Nav-toogle 1(1.3)===============-->
            <a href="#" role="button" class="nav__toogle main__hover navg" id="nav-toogle">
                <span class="heading__16" style="font-weight:bold;">
                    Menu 
                </span>

                <img src="public/icon/menu.svg" alt="Menu-drop" class="menu__icon">
            </a>
        </nav>

         <!--=============== Menu-bar 1(2) ===============-->
         <nav class="nav__menu" id="nav-menu">
            <div class="nav__container container">
                <!--=============== Nav-close 1(2.1) ===============-->
                <div class="nav__close" id="nav-close">
                   <a href="#" role="button" class="close__container">
                      <span class="heading__16">Close</span>
                      <img src="public/icon/close.svg" alt="Menu-close" class="close__icon">
                   </a>
                </div>

                   <!--=============== Nav-Menu-list 1(2.2) ===============-->
                <div class="nav__menu-list" id="nav__menu-list">
                    <!--=============== Nav-Menu-list 1(2.2.1) ===============-->
                    <div class="menu-list__1">
                        <h1 class="heading__28">login</h1>

                        <div class="menu__button">
                            
                             <?php
                                    /*if(!isset($_SESSION['access_token']))
                                    {
                                        if($login_button == '')
                                        {
                                         echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                                         echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                                         echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                                         echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
                                         echo '<h3><a href="logout.php">Logout</h3></div>';
                                        }
                                        else
                                        {
                                         echo '<div align="center">'.$login_button . '</div>';
                                        }
                                    }*/
                             ?>
                                   
                            <!-- </a> -->

                            <a href="<?php echo $fb_login_url;?>" role="button" class="button button__facebook">
                                <img src="public/icon/facebook.svg" alt="Facebook Social" class="icon">
                                <span class="heading__14">Facebook</span>
                            </a>
                        </div>

                        <a href="login.php" class="heading__16 button__link">Login with email?</a>

                        <div class="br">
                            <hr class="horizontal__line">
                            <h3 class="heading__16 horizontal__OR">OR</h3>
                            <hr class="horizontal__line">
                        </div>

                        <a href="signup.php" class="button__primary create__account-btn" id="create-account">Create an account</a>
                    </div>

                     <!--=============== Nav-Menu-list 2(2.2.2) ===============-->
                    <div class="menu-list__2" id="menu-list2">
                        <h4 class="heading__16 list2__heading">Important links</h4>

                        <div class="important__links">
                            <a href="#" class="ac heading__28 menu__link underline__animations">News & Publicatons</a>
                            <a href="#" class="ac heading__28 menu__link underline__animations">About Us</a>
                            <a href="#" class="ac heading__28 menu__link underline__animations">Contact</a>
                        </div>
                    </div>

                    <!--=============== Nav-Menu-list 3(2.2.3) ===============-->
                    <div class="menu-list__3">
                        <div class="social__links">
                            <h4 class="heading__16 list2__heading">Social media links</h4>

                            <a href="#" role="button" class="align" id="link-facebook">
                                <img src="public/icon/facebook.svg" alt="Facebook social">
                                <span class="heading__16">Facebook</span>
                            </a>

                            <a href="#" role="button" class="align" id="link-instagram">
                                <img src="public/icon/instagram.svg" alt="Instagram social">
                                <span class="heading__16">Instagram</span>
                            </a>
                        </div>

                        <div class="collection">
                            <h4 class="heading__16 list2__heading">Collection</h4>

                            <a href="#" role="button" class="button__primary">Your collection</a>
                        </div>
                    </div>

                </div>
            </div>
         </nav>

    </header>
<div class="container__login" style="margin-top:70px;">
    <div class="wrap valuation__wrap">
        <div class="price__wrap">
        <div class="title__component">
            <div class="title__wrap">
                <div class="car__image-wrap">
                    <img class="car__image" src="Images/Images/cars/Mask Group 90.svg">
                </div>
            <div class="content__component">
                <div class="content__com-container">
                    <div class="car__title">
                        <div class="title__subtitle">
                            <h1 class="heading__28 title__color-switch">Harrier</h1>
                            <h2 class="heading__18">SUV</h2>
                        </div>

                        <hr class="horizontal__line component__horizontal">
                    </div>

                    <div class="car__details">
                        <div class="registratoin__detail">
                            <h2 class="heading__18 title__medium-switch">Registration Year</h2>
                            <h2 class="heading__18 car__subtitle-switch">2015</h2>
                        </div>
                        <div class="distance__detial">
                            <h2 class="heading__18 title__medium-switch">Kilometers Driven</h2>
                            <h2 class="heading__18 car__subtitle-switch">20,000</h2>
                        </div>
                        <a href="Resale.php" class=" login__button button__primary"> Edit</a>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="pricing">
            <div class="pricing__container">
                <div class="title__pricing"> <h2 class="heading__18 pricing__title">Price based on car condition</h2></div>
                <div class="pricing__content">
                        <div class="valuation__button-wrap">
                            <div class="good__button">
                                <div class="pricing__content-wrap">
                                    <div class="valuation__content-wrap good__component" id="good-component">
                                        <div class="valuation__pricing">
                                            <h1 class="heading__28">Rs11,50,000 - Rs12,00,000</h1>
                                        </div>
                                        <img src="public/icon/triangle.svg" alt="pointer icon" class="traingle__pointer">
                                    </div>

                                    <div class="button__valuation-wrap">
                                        <a href="#" id="nvv" class="selection__button login__button button__primary">Good</a>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="very__button">
                                <div class="pricing__content-wrap">
                                    <div class="valuation__content-wrap very__component" id="very-component">
                                        <div class="valuation__pricing">
                                            <h1 class="heading__28">Rs12,50,000 - Rs14,00,000</h1>
                                        </div>
                                        <img src="public/icon/triangle.svg" alt="pointer icon" class="traingle__pointer">
                                    </div>
                                    <div class="button__valuation-wrap">
                                        <a href="#" id="nv" class="selection__button login__button button__primary">Very Good</a>
                                    </div>
                                </div>
                            </div>

                            <div class="excellent__button">
                                <div class="pricing__content-wrap">
                                    <div class="valuation__content-wrap excellent__component" id="excellent-component">
                                        <div class="valuation__pricing">
                                            <h1 class="heading__28">Rs13,50,000 - Rs15,00,000</h1>
                                        </div>
                                        <img src="public/icon/triangle.svg" alt="pointer icon" class="traingle__pointer">
                                    </div>
                                    <div class="button__valuation-wrap">
                                        <a href="#" id="nb" class="selection__button login__button button__primary">Excellent</a>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            </div>
            <div class="vehicle__button">
                <a href="Resale.php"  class=" login__button button__primary">Check another vechicle</a>
            </div>
        </div>
        
    </div>
</div>
<!--=============== Main-JS ===============-->
<!--<script type="text/javascript" src="app.js"></script>-->
<script type="text/javascript" src="app2.js"></script>
</body>
 </html>