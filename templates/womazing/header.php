<?php
if (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) die();
global $APPLICATION;

use Bitrix\Main\Page\Asset;

$getPathImage = SITE_TEMPLATE_PATH . '/images';
$getBackground = !($_SERVER['REQUEST_URI'] !== '/');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $APPLICATION->ShowHead(); ?>
    <?php
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" >');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/index.css');
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<header class="header">
    <div class="container">
        <div class="header__content">
            <!--КОМПОНЕНТ КНОПКИ БУРГЕР-->
            <?php $APPLICATION->IncludeComponent(
                'header:burgerButton',
                '.default',
                []
            ) ?>
            <!--КОМПОНЕНТ МОБИЛЬНОЙ НАВИГАЦИИ-->
            <?php $APPLICATION->IncludeComponent(
                "header:menu.mobile",
                ".default",
                [
                    "MENU_TYPE" => "mobile",
                    "IMAGE_LINK" => "/header/logo.png"
                ]
            ); ?>
            <!--КОМПОНЕНТ ЛОГОТИПА-->
            <?php $APPLICATION->IncludeComponent(
                'header:logo',
                '.default',
                [
                    'LINK' => 'Y',
                    'CACHE_TIME' => '3600',
                ]
            ) ?>

            <span class="header__row"></span>
            <!--КОМПОНЕНТ ГЛАВНОЙ НАВИГАЦИИ-->
            <?php $APPLICATION->IncludeComponent(
                "header:menu.top",
                ".default",
                [
                    "MENU_TYPE" => "top",
                ]
            ); ?>

            <span class="header__row"></span>
            <!--КОМПОНЕНТ КНОПОК В HEADER-->
            <?php $APPLICATION->IncludeComponent(
                "header:headerButtons",
                ".default",
                [
                    "PHONE" => "+79624050495",
                    "IMAGE_LINK" => "/header/bag.svg"
                ]
            ); ?>
        </div>
    </div>
    <div class=<?= $getBackground ? "header__background" : "" ?>></div>
    <!--КОМПОНЕНТ ЗАКАЗА В HEADER-->
    <?php $APPLICATION->IncludeComponent(
        "header:order",
        ".default",
        []
    ); ?>
</header>

