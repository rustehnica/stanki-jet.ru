<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSections = array();
foreach ($arResult['SECTIONS'] as $sectionKey => $sectionVal) {
    $arSections[$sectionVal['ID']] = $sectionVal;
}

foreach ($arSections as $sectionKey => $sectionVal) {
    $elementsRes = CIBlockElement::GetList(
        array('sort' => 'asc', 'id' => 'desc'),
        array('SECTION_ID' => $sectionVal['ID'])
    );
    while ($element = $elementsRes->GetNext()) {
        $arSections[$sectionKey]['ELEMENTS'][] = $element;
    }
}
foreach ($arSections as $sectionKey => $sectionVal) {
    EHelper::setParent($arSections, $sectionKey);
}

$arResult['SECTIONS'] = $arSections;
?>