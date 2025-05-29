<?php

if (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) die();

class headerButtons extends CBitrixComponent
{

    public function onPrepareComponentParams($arParams)
    {
        $arParams['PHONE'] = isset($arParams['PHONE']) ? $arParams['PHONE'] : '';
        $arParams['IMAGE_LINK'] = isset($arParams['IMAGE_LINK']) ? $arParams['IMAGE_LINK'] : '';
        return $arParams;
    }

    protected function formatedPhone($phone)
    {
        return $this->arParams['PHONE'] = preg_replace(
            '/^(\+7)(\d{3})(\d{3})(\d{2})(\d{2})$/',
            '$1 ($2) $3-$4-$5',
            $phone
        );
    }

    protected function getImageLink()
    {
        return SITE_TEMPLATE_PATH . '/images' . $this->arParams['IMAGE_LINK'];
    }

    public function executeComponent()
    {
        $this->arResult = [
            'PHONE' => $this->arParams['PHONE'],
            'PHONE_FORMATTED' => $this->formatedPhone($this->arParams['PHONE']),
            "IMAGE_LINK" => $this->getImageLink(),
        ];

        $this->includeComponentTemplate();
    }
}