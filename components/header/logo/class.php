<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


class Logo extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {

        $arParams['CACHE_TIME'] = isset($arParams['CACHE_TIME']) ? $arParams['CACHE_TIME'] : 3600;

        if ($arParams['LINK'] === 'Y') {
            $arParams['LINK'] = '/';
        }

        $arParams['LOGO_SRC'] = $arParams['LOGO_SRC'] ? trim($arParams['LOGO_SRC']) : SITE_TEMPLATE_PATH . '/images/header/logo.png';

        return $arParams;
    }

    public function executeComponent()
    {
        if ($this->startResultCache()) {
            $this->arResult['LINK'] = $this->arParams['LINK'];
            $this->arResult['LOGO_SRC'] = $this->arParams['LOGO_SRC'];
            $this->includeComponentTemplate();
        }
    }
}