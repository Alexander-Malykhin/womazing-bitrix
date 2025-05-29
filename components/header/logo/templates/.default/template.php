<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
?>

<div class="logo">
    <a href="<?= $arResult['LINK'] ?>">
        <img src="<?= $arResult['LOGO_SRC'] ?>" alt="logo">
    </a>
</div>
