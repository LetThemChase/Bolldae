<?php 


require_once __DIR__ . '/bolldaefacebook/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '{134763947187364}',
  'app_secret' => '{b3f29d3933fb03d499c36b7e4be03bd6}',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
     $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/bolldae/fb_callback.php', $permissions);


?>