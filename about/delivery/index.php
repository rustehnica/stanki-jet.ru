<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?><h1>Доставка</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
<div class="global-content-block">
	<div class="detail-text-wrap">
 <br>
 <b><span style="font-size: 14pt;">Доставка<br>
 </span></b><b><span style="font-size: 14pt;"><br>
 </span></b>
	</div>
 <span style="font-size: 12pt;">ООО "Центр Промышленного Оборудования" осуществляет доставку в Кемеровскую, Томскую и Омскую области, по Алтайскому краю и Республике Алтай, до терминала транспортной компании в ближайшем городе. Любой транспортной компанией по согласованию с Вами (для уточнения стоимости и сроков доставки в другие регионы обращайтесь к менеджерам).<br>
 </span><span style="font-size: 12pt;"><br>
 </span> <b><span style="font-size: 14pt;">Самовывоз</span></b> <br>
 <br>
	 Самовывоз производится с<span style="font-size: 12pt;">о склада ООО "Центр Промышленного Оборудования"&nbsp;по адресу <?=Regions::get_address_region()?></span> <br>
 <br>
	<div style="font-weight: bold;">
 <span style="font-size: 12pt;">! Мы выбираем наиболее надежную упаковку вашего заказа, что гарантирует сохранность вашей покупки в процессе транспортировки. </span>
	</div>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;"> </span>
	<div style="font-size: 12px;">
 <span style="font-size: 12pt;"> При возникновении сложностей с расчетом доставки, обратитесь к нашим менеджерам по телефону<span style="color: #ee1d24;"> <a href="tel:<?=Regions::get_phone_region()[0]?>"><?=Regions::get_phone_region()[0]?> </a>.</span></span>
	</div>

</div>
 
<div class="global-information-block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>