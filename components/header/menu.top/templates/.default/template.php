<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->addExternalCss($templateFolder . '/css/style.css');
$this->addExternalJs($templateFolder . '/js/script.js');
?>

<nav class="navigation">
    <?php foreach ($arResult["ITEMS"] as $item): ?>


        <a href="<?= htmlspecialchars($item[1]) ?>"
           class="navigation__item"
           data-href = "<?=htmlspecialchars($item[1])?>"
        >
            <span class="navigation__span">
                <?= htmlspecialchars($item[0]) ?>
            </span>
        </a>
    <?php endforeach; ?>
</nav>
