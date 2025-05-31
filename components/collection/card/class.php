<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


class Card extends CBitrixComponent
{
    public function onPrepareComponent($arParams)
    {
        return $arParams;
    }
    public function executeComponent()
    {
        try {
            if ($this->startResultCache()) {
                $this->includeComponentTemplate();
            }
        } catch (Exception $e) {
            $this->abortResultCache();
            ShowError($e->getMessage());
            return false;
        }
    }
}