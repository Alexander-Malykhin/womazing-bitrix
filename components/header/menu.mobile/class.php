<?php
if (!defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) die();

class MenuMobile extends CBitrixComponent
{
    public function executeComponent()
    {

        $this->arResult['ITEMS'] = $this->getFileMenu();
        $this->arResult['IMAGE_LINK'] = $this->getImageLink($this->arParams['IMAGE_LINK']);
        $this->includeComponentTemplate();
    }

    protected function getImageLink($imageLink)
    {
        return SITE_TEMPLATE_PATH . '/images' . $imageLink;
    }

    protected function getFileMenu()
    {
        $menuType = $this->arParams['MENU_TYPE'] ?: 'mobile';
        $file = __DIR__ . "/.{$menuType}.menu.php";

        $aMenuLinks = [];

        if (file_exists($file)) {
            include $file;
        }

        return $aMenuLinks;
    }
}