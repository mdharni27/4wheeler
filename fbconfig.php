<?php
define('APP_ID','554487282825337');
define('APP_SECRET','ef2c0ff82e480d8ec1da437a5b64df54');
define('API_VERSION','v2.5');
define('FB_BASE_URL','http://localhost/4Wheeler/php%20conversion/index.php');
if(!session_id())
{
    session_start();
}

require_once(__DIR__.'/Facebook/autoload.php');
$fb=new Facebook\Facebook([
    'app_id'=> APP_ID,
    'app_secret'=> APP_SECRET,
    'default_graph_version'=> API_VERSION,
]);

$fb_helper=$fb->getRedirectLoginHelper();

try{
    if(isset($_SESSION['facebook_access_token']))
     {$accessToken=$_SESSION['facebook_access_token'];}
    else
      { $accessToken=$fb_helper->getAccessToken();}  
}
catch(FacebookResponseException $e){
echo 'Facebook API Error: '. $e->getMessage();
exit;
}catch(FacebookSDKException $e)
{
    echo 'Facebook SDE Error: '.$e->getMessage();
    exit;
}

?>