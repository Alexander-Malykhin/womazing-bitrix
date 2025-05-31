<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$this->addExternalCss($templateFolder . '/css/style.css');
?>


<section>
    <div class="container">
        <div class="collection">
            <h1 class="main__title">
                Новая коллекция
            </h1>

            <div class="collection__content main__content">
                <div class="collection__list">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "collection:card",
                        '.default',
                        []
                    )
                    ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        "collection:card",
                        '.default',
                        []
                    )
                    ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        "collection:card",
                        '.default',
                        []
                    )
                    ?>
                </div>

                <a href="<?=$arResult['LINK']?>" class="collection__button">
                    Открыть магазин
                </a>
            </div>
        </div>
    </div>
</section>
