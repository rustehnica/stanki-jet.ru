<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<nav class="main-menu">
    <ul>
        <?foreach ($arResult as $item):?>
            <li><a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a></li>
        <?endforeach;?>
		<li>
			<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"catalog", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
		),
		"CATEGORY_0_TITLE" => "",
		"CATEGORY_0_iblock_catalog" => array(
			0 => "46",
		),
		"CHECK_DATES" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTAINER_ID" => "title-search",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "rank",
		"PAGE" => "#SITE_DIR#catalog/index.php",
		"PREVIEW_HEIGHT" => "75",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PREVIEW_WIDTH" => "75",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"SHOW_PREVIEW" => "Y",
		"TOP_COUNT" => "20",
		"USE_LANGUAGE_GUESS" => "N",
		"COMPONENT_TEMPLATE" => "catalog"
	),
	false
);?>
		</li>
    </ul>
</nav>