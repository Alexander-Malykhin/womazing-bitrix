<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class Block extends CBitrixComponent
{
    protected function checkModule():bool
    {
        if(!Loader::includeModule('iblock')) {
            $this->abortResultCache();
            ShowError('модуль не подключен');
            return false;
        }

        return true;
    }

    public function onPrepareComponentParams($arParams): array
    {
        $this->arParams['LINK'] = (string) $arParams['LINK'];
        return $arParams;
    }

    protected function getResultLink(): void
    {
       $this->arResult = [
           'LINK' => $this->arParams['LINK'],
       ];
    }

    public function executeComponent(): void
    {
        $this->checkModule();

        try {
            if ($this->startResultCache()) {
                $this->getResultLink();
                $this->includeComponentTemplate();
            }
        } catch (Exception $exception) {
            ShowError('Ошибка ' . $exception->getMessage());
            $this->abortResultCache();
            return;
        }
    }
}