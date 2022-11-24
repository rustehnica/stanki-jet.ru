<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как купить");
?><h1>Как купить</h1>
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
<div class="global-block-container">
	<div class="global-content-block">
		<h1>Оплата</h1>
 <br>
 <b><span style="font-size: 16pt;">Оборудование и инструмент под заказ поставляются при 100% предоплате.</span><br>
		<span style="font-size: 16pt;"> </span><span style="font-size: 16pt;"> </span></b><br>
		<span style="font-size: 16pt;">  </span><b><span style="font-size: 16pt;">Для юридических лиц</span><br>
 <span style="font-size: 12pt;"> </span></b><br>
 <span style="font-size: 12pt;">
		Карты оплаты Visa, MasterCard, Maestro или Наличными</span><br>
 <span style="font-size: 12pt;">
		Оплата производится банковской картой или наличными при получении заказа в магазине ООО «Центр промышленного оборудования».</span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;">
		Банковский перевод:</span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;">
		Оплата производится по счету, выставленному менеджером. Срок оплаты счета - в течение 3-х банковских дней. Для продления периода оплаты счета Вам необходимо будет связаться с менеджером по телефону. Оплата можете произвести через приложение "Сбербанк Онлайн", в офисе банка или через терминал.</span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;"> </span><b><span style="font-size: 16pt;">Для физических лиц</span></b><br><br>
 <span style="font-size: 12pt;">
		Карты оплаты Visa, MasterCard, Maestro или Наличными</span><br>
 <span style="font-size: 12pt;">
		Оплата производится банковской картой или наличными при получении заказа в магазине ООО «Центр промышленного оборудования».</span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;">
		Безналичный расчет:</span><br>
 <span style="font-size: 12pt;"> </span><br>
 <span style="font-size: 12pt;">
		Вы можете оплатить вашу покупку в любом банке, получив счёт у менеджера.</span><br>
		<ul>
		</ul>
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
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>