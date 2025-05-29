<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class MenuTop  extends CBitrixComponent
{
    public function executeComponent()
    {

        $this->arResult['ITEMS'] = $this->getFileMenu();
        $this->includeComponentTemplate();
    }

    protected function getFileMenu()
    {
        $menuType = $this->arParams['MENU_TYPE'] ?: 'top';
        $file = __DIR__ . "/.{$menuType}.menu.php";

        $aMenuLinks = [];

        if (file_exists($file)) {
            include $file;
        }

        return $aMenuLinks;
    }
}