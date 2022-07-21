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