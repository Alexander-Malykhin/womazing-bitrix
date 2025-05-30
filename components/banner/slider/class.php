<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class Slider extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
        $arParams['ELEMENT_ID'] = (int)$arParams['ELEMENT_ID'];
        return $arParams;
    }

    public function executeComponent()
    {
        if ($this->StartResultCache()) {
            $this->getElementData();
            $this->includeComponentTemplate();
        }
    }

    protected function getElementData()
    {
        if (!Loader::includeModule('iblock')) {
            $this->abortResultCache();
            ShowError('Модуль инфоблоков не установлен');
            return;
        }
    }
}