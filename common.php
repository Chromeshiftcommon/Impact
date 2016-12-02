<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  $lang_news = 'lang.en.news.php';
  $lang_facts = 'lang.en.facts.php';
  break;

  case 'ro':
  $lang_file = 'lang.ro.php';
  $lang_news = 'lang.ro.news.php';
  $lang_facts = 'lang.ro.facts.php';
  break;

  //case 'hu':
  //$lang_file = 'lang.hu.php';
  //break;

  default:
  $lang_file = 'lang.ro.php';
  $lang_news = 'lang.ro.news.php';
  $lang_facts = 'lang.ro.facts.php';

}

include_once 'languages/'.$lang_file;
// Checking if it is a news of facts page - including the correct files if so
$pagename = basename($_SERVER['PHP_SELF']);
if (strpos($pagename,'news') !== false)
  include_once 'languages/'.$lang_news;
if (strpos($pagename,'facts') !== false)
  include_once 'languages/'.$lang_facts;
?>
