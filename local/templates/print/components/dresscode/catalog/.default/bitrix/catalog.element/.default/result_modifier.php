<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/* global $APPLICATION;

if (!in_array($arResult['ID'], $_SESSION['VIEWED_PRODUCTS'])) {
    $_SESSION['VIEWED_PRODUCTS'][] = $arResult['ID'];
}

if (count($_SESSION['VIEWED_PRODUCTS']) > 10) {
    array_shift($_SESSION['VIEWED_PRODUCTS']);
}

$catalogElementModel = new catalogElementModel($arResult);
$arResult = $catalogElementModel->prepareForProductPage();

if (count($arResult['RELATED_GOODS']) > 0) {
    ob_start();?>
    <h3>Рекомендуемые товары</h3>
    <?new productSliderHelper(
        array(
            'elementIdList' => $arResult['RELATED_GOODS'],
            'slidesCount' => 3,
            'vertical' => true
        )
    );
    $slider = ob_get_clean();
    $APPLICATION->SetPageProperty('RELATED_GOODS_SLIDER', $slider);
}

$arResult['PROPERTIES']['FIRM']['TRANSLIT'] = $catalogElementModel->str2url($arResult['PROPERTIES']['FIRM']['VALUE']); */
?>