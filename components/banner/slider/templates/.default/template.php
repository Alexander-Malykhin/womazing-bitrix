<?php
if (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
$this->addExternalJs($templateFolder . '/js/script.js');
?>


<section>
    <div class="container">
        <div class="banner__content">
            <div class="banner">
                <div class="banner__list">
                    <?php foreach ($arResult['ITEMS'] as $index => $item): ?>
                        <div class="banner__header <?= $index === 0 ? 'banner__active-image' : '' ?>">
                            <h1 class="banner__title"><?=$item['PROPERTIES'][9]['VALUE']?></h1>

                            <p class="banner__description">
                                <?=$item['PROPERTIES'][10]['VALUE']?>
                            </p>

                            <button class="banner__button">
                                <span class="banner__button-image">
                                    <img src="<?=SITE_TEMPLATE_PATH . '/images/arrow-bottom.svg'?>" alt="arrow">
                                </span>
                                <a href="<?=$item['PROPERTIES'][13]['VALUE']?>" class="banner__button-span">Открыть магазин</a>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="banner__buttons">
                    <div class="banner__buttons-item  banner__active"></div>
                    <div class="banner__buttons-item"></div>
                    <div class="banner__buttons-item"></div>
                </div>
            </div>

            <div class="banner__image-container">
                <img src="<?= $arResult['ITEMS'][0]['SRC'] ?>" alt="main" class="banner__image">
            </div>
        </div>
    </div>
</section>



