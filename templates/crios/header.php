<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
$asset->addString('<link rel="preload" href="' . SITE_TEMPLATE_PATH . '/assets/fonts/montserrat-regular.woff2" as="font"
type="font/woff2" crossorigin="anonymous">');
$asset->addString('<link rel="icon" href="' . SITE_TEMPLATE_PATH . '/assets/images/favicon.ico" type="image/x-icon" />');
$asset->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/assets/images/favicon.ico" type="image/x-icon" />');
?>
<!doctype html>
<html lang="ru">

<head>  
  <?php $APPLICATION->ShowHead()?>

  <title><?php $APPLICATION->ShowTitle()?></title>
</head>

<body>
  <?php $APPLICATION->ShowPanel()?>

  <header class="main-header">
    <div class="main-header__top">
      <div class="main-header__menu">
        <nav class="main-header__nav" tabindex="0">
          <ul class="main-header__nav-list">
            <li class="main-header__nav-item">
              <a href="#" class="main-header__nav-link">Menu item</a>
            </li>
            <li class="main-header__nav-item">
              <a href="#" class="main-header__nav-link">Menu item</a>
            </li>
            <li class="main-header__nav-item">
              <a href="#" class="main-header__nav-link">Menu item</a>
            </li>
            <li class="main-header__nav-item">
              <a href="#" class="main-header__nav-link">Menu item</a>
            </li>
            <li class="main-header__nav-item">
              <a href="#" class="main-header__nav-link">Menu item</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="main-header__logo">
        <h2 class="main-header__logo-text">Crios</h2>
        <h3 class="main-header__logo-description">Free PSD template</h3>
      </div>
      <div class="main-header__search" tabindex="0">
        <input class="main-header__search-input" type="search" aria-label="Search through site content">
      </div>
    </div>
    <div class="main-header__banner">
      <h1 class="main-header__headline">Simple PSD template with cool stuff</h1>
      <p class="main-header__description">Lorem, ipsum dolor sit amet
        consectetur adipiscing elit.</p>
      <button class="main-header__btn" type="button">Explore template</button>
    </div>
  </header>

  <main class="main-content">
