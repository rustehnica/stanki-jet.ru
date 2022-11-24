<span class="heading"><a onclick="ym(48919781,'reachGoal','PHONE')" style="text-decoration:none;color:#000000;" href="tel:<?=$_SESSION["SOTBIT_REGIONS"]["UF_PHONE"][0]?>"><?=$_SESSION["SOTBIT_REGIONS"]["UF_PHONE"][0]?></a></span>


<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"modal",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "modal",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"MODAL_BUTTON_CLASS_NAME" => "link callBack",
		"MODAL_BUTTON_NAME" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID",),
		"WEB_FORM_ID" => "1"
	)
);?>