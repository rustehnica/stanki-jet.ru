<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
global $APP;
global $catalog_filter;    

 
$arResult['SECTION_ID'] = CIBlockFindTools::GetSectionID( $arResult['VARIABLES']['SECTION_ID'], $arResult['VARIABLES']['SECTION_CODE'], array('IBLOCK_ID' => $arParams['IBLOCK_ID']) );
if (!$APP->isAjax()) {

	
    if ($arResult["VARIABLES"]["SECTION_CODE"]) {
        $catalogSectionModel = new catalogSectionModel();
        $sectionRes = $catalogSectionModel->getList(array('CODE' => $arResult["VARIABLES"]["SECTION_CODE"]));
        $GLOBALS['CATALOG_SECTION_ID'] = $sectionRes[0]['ID'];
    }
	$res = CIBlockSection::GetList(Array(), Array("ID" => $arResult['SECTION_ID'], "IBLOCK_ID" => IB_CATALOG), false, Array('DESCRIPTION', "UF_REVIEW"));
	if($ar_res = $res->GetNext()){
	
		if($ar_res['DESCRIPTION']){echo '<div class="section-description">'.$ar_res['DESCRIPTION'].'</div>';}
		if($ar_res['UF_REVIEW']){echo '<div class="section-review">'; echo $ar_res['~UF_REVIEW']; echo '</div>';}
		
	}	
	
    /*$APPLICATION->IncludeComponent(
        "aztec:catalog.section.list",
        "",
        array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
            "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
            "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
            "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
            "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
            "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
            "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
        ),
        $component
    );*/

	/*$page = parse_url($_SERVER['REQUEST_URI']);
	if($page['path'] != '/catalog/remont_i_tehobsluzhivanie/'){
		$APPLICATION->IncludeComponent (
			// "bitrix:catalog.smart.filter",
			"rustech:catalog.smart.filter",
				"",
			Array(
				"IBLOCK_TYPE" => "catalog",
				"IBLOCK_ID" => IB_CATALOG,
				"SECTION_ID" => $GLOBALS['CATALOG_SECTION_ID'],
				"FILTER_NAME" => "catalog_filter",
				"PRICE_CODE" => array("BASE"),
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SAVE_IN_SESSION" => "Y",
				"INSTANT_RELOAD" => "Y",
				"XML_EXPORT" => "Y",
				"SECTION_TITLE" => "NAME",
				"SECTION_DESCRIPTION" => "DESCRIPTION",
				"HIDE_NOT_AVAILABLE" => "N"
			)
		);
	}*/

	//echo '<pre>';print_r($catalog_filter);echo '</pre>'; � ���������� ������� /bitrix/components/rustech/smart.filter ����� ��������� ������ ����� ��� ��������
	clServ::price_RUB_to_USD($catalog_filter["><CATALOG_PRICE_1"]);
			
	//clServ::analize_vars_filter($catalog_filter); 

    new catalogSortingHelper(array('section_id' => $arResult['SECTION_ID']));

    global $catalog_sorting_field;

    $_SESSION['catalog_sorting_field'] = $catalog_sorting_field;
    $_SESSION['catalog_filter'] = $catalog_filter;
}

new catalogSectionHelper(
    array(
        'component' => $component,
        'arParams' => $arParams,
        'arResult' => $arResult
    )
);

?>