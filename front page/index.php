<?php
include('config.php');
include('fbconfig.php');
$_SESSION['email']=0;
if (!isset($accessToken))
{
   if(!isset($_SESSION['facebook_access_token']))
   {
    $_SESSION['facebook_access_token']=(string)$accessToken;

    $oAuth2Client=$fb->getoAuth2Client();

    $longLivedAccessToken=$oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
    $_SESSION['facebook_access_token']=(string)$longLivedAccessToken;

    $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
}
else
{
    $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
}
}
else
{
    $fb_login_url=$fb_helper->getLoginUrl(FB_BASE_URL);
}
$login_button = '';
if(isset($_GET["code"]))
{

/* $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();*/
  echo "<script>alert('Successfully Logged In!!');";
  echo "window.location.href='index.php';";
  echo "</script>";
 
  /*if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
 }}*/
 
}
if(!isset($_SESSION['access_token']))
{
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><span role="button" class="button button__google"><img src="public/icon/google.svg" alt="Google Social" class="icon ">
 <span class="heading__14">Google</span></a></span>';
}

?>
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
    <meta property="og:title" content="Home">

    <!--=============== FaveIcon ===============-->
    <link rel="shortcut icon" href="public/icon/brand.io.svg" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" type="text/html" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<style>
	.d-block{
                
                background-size:cover;
              
                margin-top:70px;
            }
	.cover2{
           background-image:url("cover 2.jpg");
            position:relative;    
            height:605px;
            width:100%; 
            text-align: center;

	}		
	.cover3{
           background-image:url("cover 3.jpg");
             height:605px;
             width:100%;
             background-size:cover;

	}	
	a{
		outline: none;
		ie-dummy: expression(this.hideFocus
		=true);
	}
	
	.navg:link{
		color:black;
	    text-decoration:none;
		font-weight:bold;
		
	}
	.navg:visited{
		color:black;
	}
	.navg:hover{
		color:red;
		outline:none;
	}
	</style>
</head>

<body>
    <!--=============== header 1 ===============-->
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
                    <a href="" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        New Cars
                    </a>
                </li>
                <li class="nav__item"> 
                    <a href="" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        Resale
                    </a>
                </li>
                <li class="nav__item navg"> 
                    <a href="https://www.cars24.com/rto-vehicle-registration-details/" class="navg main__hover nav__link active-link heading__16 underline__animations">
                        RTO Information
                    </a>
                </li>
				<?php if($_SESSION['email']) { 
					
                echo "<li class='nav__item'> <a href='logout.php' class='main__hover nav__link active-link heading__16 underline__animations'>
                      Log Out
                      </a>
                       </li>";
				} ?>
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
                                    if(!isset($_SESSION['access_token']))
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
                                    }
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
                            <a href="#" class="heading__28 menu__link underline__animations">News & Publicatons</a>
                            <a href="#" class="heading__28 menu__link underline__animations">About Us</a>
                            <a href="#" class="heading__28 menu__link underline__animations">Contact</a>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="cover car.png" alt="First slide">
            
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="sport.jpg" alt="Second slide" style="height:393px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="cover 3.jpg"  style="height:393px;" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

     <!--=============== Main-JS ===============-->
    <script type="text/javascript" src="app.js"></script>
</body>

</html>