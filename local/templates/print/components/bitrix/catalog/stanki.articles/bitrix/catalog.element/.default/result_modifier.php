<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$model = new articlesModel();

if (count($arResult['DISPLAY_PROPERTIES']['ARTICLES']['VALUE']) > 0) {
    $arResult['articles'] = $model->getList(
        array('ID' => $arResult['DISPLAY_PROPERTIES']['ARTICLES']['VALUE']),
        array('SORT' => 'ASC')
    );
} else {
    $arResult['articles'] = $model->getList(
        array('!ID' => $arResult['ID']),
        array('RAND' => 'ASC')
    );
}
?>