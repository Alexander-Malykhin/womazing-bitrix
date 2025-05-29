<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
?>

<div class="mobile__menu">
    <div class="mobile__navigation">
        <button class="mobile__button">
            <span class="mobile__button-line"></span>
            <span class="mobile__button-line"></span>
        </button>

        <div class="mobile__logo">
            <img src="<?= $arResult['IMAGE_LINK'] ?>" alt="logo">
        </div>

        <nav class="mobile__navigation-list">
            <a href="#" class="navigation__item item-active">
                <span class="navigation__span">Главная</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">Магазин</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">О бренде</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">Контакты</span>
            </a>
        </nav>
    </div>
    <div class="mobile__background"></div>
</div>