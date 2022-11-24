<? 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//include module
\Bitrix\Main\Loader::includeModule("dw.deluxe");
//get template settings
$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
if(!empty($arTemplateSettings)){
	$catalogIblockId = $arTemplateSettings["TEMPLATE_PRODUCT_IBLOCK_ID"];
}

//globals
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"dresscode:menu.sections", 
	"", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "15",
		"DEPTH_LEVEL" => "2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"IS_SEF" => "N",
		"ID" => $_REQUEST["ID"],
		"SECTION_URL" => "",
		"CALC_COUNT_ELEMENTS_IN_SECTION" => "N"
	),
	false
);

//append menu items
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt); 

?>