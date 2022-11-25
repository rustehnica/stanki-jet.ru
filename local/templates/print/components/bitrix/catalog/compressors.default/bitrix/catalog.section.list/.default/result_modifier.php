<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$CFile = new CFile();

foreach ($arResult['SECTIONS'] as $sectionKey => $section) {
    if ($section['ID'] == CS_ACTIVITY_TYPES) {
        unset($arResult['SECTIONS'][$sectionKey]);
        continue;
    }
    $arResult['SECTIONS'][$sectionKey]['PICTURE'] = EHelper::resizeImage($section['PICTURE'], 170, 135);
}