<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
?>

<article class="card">
    <div class="card__container-image">
        <img src="<?=SITE_TEMPLATE_PATH . '/images/card.png'?>" alt="card" class="card__image">
    </div>

    <div class="card__information">
        <h2 class="card__information-name">
            Футболка USA
        </h2>

        <span class="card__price">
            $129
        </span>
    </div>
</article>


