<?php
/* 
Project: Fajlami YouTube Videos Grabber
Author: Shimul Shahriar
Author URI: http://shimul.xyz
*/
require'init.php';
// Bismillah!
$path=strip_tags($_GET['path']);
if(!$path){
$uri='http://links.fajlami.com';
}
else{
// Fix for & ?
$path=str_replace('I_AM_MAC','?',$path);
$path=str_replace('MAC_AND','&',$path);
$uri='http://links.fajlami.com/'.$path.'';
}
$data=miraz_get_contents($uri);
preg_match('#<title>(.*?)</title>#s',$data,$rt); // Grab the title 
$pageTitle=$rt[1];
$pageTitle=str_replace('Fajlami',''.$config->sitename.'',$pageTitle);
include'header.php';
include'core.php';
echo $data;
?>
