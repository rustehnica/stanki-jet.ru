<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="article-detail">
    <div class="article-header">
		<?/*<div class="article-name"><?=$arResult["NAME"]?></div>*/?>
        <div class="article-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
    </div>
    <?if (count($arResult['DISPLAY_PROPERTIES']['GOODS']['VALUE']) > 0) {
        $products = $arResult['DISPLAY_PROPERTIES']['GOODS']['VALUE'];
    } else {
        $products = array();
    }
    new productSliderHelper(array('elementIdList' => $products, 'slidesCount' => 3, 'sort' => array('CATALOG_PRICE_SCALE_1' => 'ASC')));?>

    <div class="article-text">
        <?if(strlen($arResult["DETAIL_TEXT"]) > 0):?>
            <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
            <?echo $arResult["PREVIEW_TEXT"];?>
        <?endif?>
    </div>
    <div class="other-articles">
        <h3>Еще статьи:</h3>
        <ul>
            <?foreach ($arResult['articles'] as $arElement):?>
                <li><a href="<?= $arElement['DETAIL_PAGE_URL']?>"><?= $arElement['NAME']?></a></li>
            <?endforeach;?>
        </ul>
    </div>
    <hr>
    <div><a href="/articles/"><b>Вернуться к списку статей</b></a></div>
</div>