<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class BannerSlider extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
        $arParams['ELEMENT_COUNT'] = (int)($arParams['ELEMENT_COUNT'] ?? 3);
        $arParams['CACHE_TIME'] = (int)$arParams['CACHE_TIME'] ?? 3600;
        return $arParams;
    }

    public function executeComponent(): void
    {
        if ($this->StartResultCache()) {
            $this->getElements();
            $this->includeComponentTemplate();
        }
    }

    protected function selectArray(): array
    {
        return [
            'ID',
            'IBLOCK_ID',
            'NAME',
            'PREVIEW_PICTURE',
            'PROPERTY_TEXT',
            'PROPERTY_DESCRIPTION',
            'PROPERTY_LINK',
        ];

    }

    protected function filterArray(): array
    {
        return [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
        ];
    }

    protected function getElements(): void
    {
        if (!Loader::includeModule('iblock')) {
            $this->abortResultCache();
            ShowError('Модуль инфоблоков не установлен');
            return;
        }

        try {
            $res = CIBlockElement::GetList(
                [],
                $this->filterArray(),
                false,
                ['nTopCount' => $this->arParams['ELEMENT_COUNT']],
                $this->selectArray()
            );

            $this->arResult['ITEMS'] = [];

            while ($element = $res->GetNextElement()) {
                $arFields = $element->GetFields();
                $arProperties = $element->GetProperties();

                if ($arFields['PREVIEW_PICTURE']) $arFields['PREVIEW_PICTURE'] = CFile::GetFileArray($arFields['PREVIEW_PICTURE']);

                $selectProperties = [];

                foreach ($arProperties as $propId => $property) {
                    $selectProperties[$propId] = [
                        'VALUE' => $property['VALUE'],
                    ];
                }

                $this->arResult['ITEMS'][] = [
                    'SRC' => $arFields['PREVIEW_PICTURE']['SRC'],
                    'PROPERTIES' => $selectProperties
                ];
            }
        } catch (Exception $exception) {
            $this->abortResultCache();
            ShowError('Ошибка: ' . $exception->getMessage());
        }

        if (empty($this->arResult['ITEMS'])) {
            $this->abortResultCache();
        }
    }
}