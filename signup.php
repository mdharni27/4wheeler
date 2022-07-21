<!DOCTYPE html>
<html lang="en US">

<head>
    <meta charset="UTF-8">
    <!--=============== Meta Viewport ===============-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== ===============-->

    <!--=============== Meta OpenGraph Data ===============-->
    <meta property="og:description" content="4wheeler Create an account">
    <meta property="og:title" content="Create and account">

    <!--=============== FaveIcon ===============-->
    <link rel="shortcut icon" href="public/icon/brand.io.svg" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" type="text/html" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/js/bootstrap.min.js">
	<style>
	.button:hover{
		background-color:black;
	}
	</style>
</head>

<body>
    <!--=============== L BACKGROUND 1 ===============-->
    <div class="objects__image">
       <img src="public/Images/signup.svg" alt="Car Image" class="image">
       <div class="blend"></div>
    </div>

    <!--=============== L CONTENT LOGIN 1(1) ===============-->
    <div class="container__login">
        <div class="wrap wrap__container">
            <!--=============== L LOGO-SUBTITLE 1(1.1) ===============-->
            <div class="logo__title">
                <div class="logo__wrap">
                  <a href="index.php" class="nav__logo">
                     <img src="public/icon/logo white.svg" alt="4Wheeler-logo" class="nav__logo-img">
                  </a>

                <h4 class="heading__16 sologon">Discover Your Dream Car</h4>
                </div>
            </div>

            <!--=============== L USER-PANNEL 1(1.2) ===============-->
            <div class="user__pannel pannel__extend">
                <div class="pannel__container">
                    <h1 class="heading__28 pannel__login pannel__signup">Create an account</h1>
                    
                    <div class="pannel__create-account" id="pannel-create">
                        <h2 class="new__user heading__18">Already have an account?</h2>
                        <a href="login.php" role="button" class="link__account">log in</a>
                    </div>
                    <div>
					
					</div>
                    <div class="userinput__container">
                        <form action="signupconfi.php" method="POST" class="form">
                           <div id="res" class="text-primary"></div>
                            
            
                            <div class="input__1" id="signup-name">
                                <label class="heading__18 lables" for="Name">Your Name*</label>
                                <input type="text" name="fullname" id="inputemail" placeholder="Enter your name" required autofocus>
                            </div>

                            
            
                            <div class="input__1" id="signup-email">
                                <label class="heading__18 lables" for="Email">Email Address*</label>
                                <input type="email" name="email" id="inputemail" placeholder="Enter your email address" required autofocus>
                            </div>
            
                            <! Text-field Password>
                                        
                            <div class="input__1" id="signup-password">
                                <label class="heading__18 lables" for="Your Password">Password*</label>
                                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                            
                         <br>
                                <label class="heading__18 lables" for="Your Password">Confirm Pasword*</label>
                                <input type="password" name="password" id="cpassword" placeholder="Confirm Password" onkeyup="check()" required>
                            </div>
							
                            <! Button>
                               <a href="#" role="button" class="submit__container">
                                   <button class="button btn-danger" id="button" type="submit" name="create">Sign Up</button>
                               </a>
                           
				   </form>
                    </div>

                   <!-- <div class="br">
                        <hr class="horizontal__line horizontal__switch">
                        <h3 class="heading__16 horizontal__OR or__color">OR</h3>
                        <hr class="horizontal__line horizontal__switch">
                    </div>-->

                  <!--  <div class="menu__button menu__button-align">
                        <a href="#" role="button" class="button button__google google__switch">
                                <img src="public/icon/google.svg" alt="Google Social" class="icon">
                                <span class="heading__14">Google</span>
                        </a>

                        <a href="#" role="button" class="button button__facebook">
                            <img src="public/icon/facebook.svg" alt="Facebook Social" class="icon">
                            <span class="heading__14">Facebook</span>
                        </a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
<script>			
			function check()
            {   event.preventDefault();
                var p1=document.getElementById("password").value;
                var p2=document.getElementById("cpassword").value;
                if(p1==p2)
                {
                  document.getElementById("res").innerHTML="<div class='alert alert-success'>Password Matched</div>";
                  $("button").attr('disabled',false);
                }
                else{
                    $('#res').html("<div class='alert alert-danger'>Password Does not Match</div>");
                    $("button").attr('disabled',true);
                }
            }		   
            </script>   
</body>

</html>