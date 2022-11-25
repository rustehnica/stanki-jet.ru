<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['ITEMS'] as $itemKey => $item) {
    $catalogElementModel = new catalogElementModel($item);
    $arResult['ITEMS'][$itemKey] = $catalogElementModel->prepare();
}

$dublicat = array();
foreach ($arResult['ITEMS'] as $itemKey => $item) { 

	foreach($item['PROPERTIES'] as $property){
	
		if (in_array($property['CODE'], $arParams['PROPERTY_CODE']) &&  $property['VALUE'] &&  $property['VALUE'] != '-') {
			
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
   
}

$cartModel = new cartModel();
$arResult['PRODUCTS_IN_BASKET'] = $cartModel->getCurrentCart();