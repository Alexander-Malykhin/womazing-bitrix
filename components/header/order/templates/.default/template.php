<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
$this->addExternalJs($templateFolder . '/js/script.js');
?>


<div class="header__order">
    <div class="header__order-container">
        <button class="header__order-close">
            <span class="header__order-line"></span>
            <span class="header__order-line"></span>
        </button>

        <h2 class="header__order-title">Заказать обратный звонок</h2>

        <form action="" class="header__order-form">
            <input
                    type="text"
                    class="order__input"
                    placeholder="Имя"
            >
            <input
                    type="email"
                    class="order__input"
                    placeholder="E-mail"
            >
            <input
                    type="text"
                    class="order__input"
                    placeholder="Телефон"
            >
            <button class="header__order-button">
                Заказать звонок
            </button>
        </form>
    </div>
</div>

