<?php
if (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
?>

<div class="header__buttons">
    <div class="phone">
        <button class="phone__button"></button>

        <a href="tel:<?= $arResult['PHONE'] ?>">
            <span class="phone__text"><?= $arResult['PHONE_FORMATTED'] ?></span>
        </a>
    </div>

    <a class="basket" href="/pages/basket.php">
        <img src="<?= $arResult['IMAGE_LINK'] ?>" alt="bag">
    </a>
</div>