<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $itemKey => &$item) {
    $catalogElementModel = new catalogElementModel($item);
    $arResult['ITEMS'][$itemKey] = $catalogElementModel->prepare();
	
	$ph_ar = CFile::GetFileArray($item["DETAIL_PICTURE"]['ID']);
	//print_r($item["DETAIL_PICTURE"]);
	$skuPictureW = $ph_ar['WIDTH'];
	$skuPictureH = $ph_ar['HEIGHT'];
	$needPictureW = 110;
	$checkSizeW = $skuPictureW/$needPictureW;
	$checkSizeH = $skuPictureH/$checkSizeW;
	
	if($checkSizeH > 110){
	
		$kcheckSizeH = $checkSizeH/110;
		$needPictureW = 110/$kcheckSizeH;
		$checkSizeH = 110;
	}
	$item['DETAIL_PICTURE']['SMALL'] = CFile::ResizeImageGet($ph_ar, array('width'=>$needPictureW, 'height'=>$checkSizeH), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());

}
/*$dublicat = array();
foreach ($arResult['ITEMS'] as $itemKey => $item) { 

	foreach($item['PROPERTIES'] as $property){
	
		if (in_array($property['CODE'], $arParams['PROPERTY_CODE'])) {
			
			$arResult['ITEMS'][$itemKey]['DISPLAY_PROPERTIES_SECTION'][] = $property;
			
		}	
	}
  
   foreach ($dublicat as $val) {  
        if($val == $item["ID"]){
            
            unset($arResult['ITEMS'][$itemKey]);
            $unSet = true;
        
        }else{
            
            $unSet = false;
			
        }
   }
    if($unSet){
       continue; 
    }
    $dublicat[] = $item["ID"];
   
}*/

//$cartModel = new cartModel();
//$arResult['PRODUCTS_IN_BASKET'] = $cartModel->getCurrentCart();

$arSelect = array("UF_PROPERTYVIEW");
$arFilter = array("IBLOCK_ID" => $arResult['IBLOCK_ID'], "ID" => $arResult['ID']);

$res = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect);

if($uf_value = $res->GetNext()){
	
	$arResult['PROPERTY_VIEW'] = $uf_value["UF_PROPERTYVIEW"];
	
}