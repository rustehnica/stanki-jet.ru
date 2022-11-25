<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult["DETAIL_PICTURE"]["MEDIUM_SIZE"] = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"];

foreach($arResult["PROPERTIES"]["GALERY"]["VALUE"] as $key => &$item){
	$temp = $item;	
	$item = array(
		"ID" => $temp,
		"MEDIUM_IMAGE" => array("SRC" => CFile::ResizeImageGet($temp, array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"]),
		"LARGE_IMAGE" => array("SRC" => CFile::ResizeImageGet($temp, array('width'=>1200, 'height'=>1200), BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"]),
	);
}

$this->__component->SetResultCacheKeys(array(
    "NAME",
    "PREVIEW_TEXT",
    "DETAIL_PICTURE",
    "DETAIL_PAGE_URL"
));?>