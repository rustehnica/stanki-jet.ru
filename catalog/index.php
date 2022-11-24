<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Каталог станков JET от официального дилера - Stanki-JET.ru");
$APPLICATION->SetTitle("Каталог станков JET");
?>
<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");

	//vars
	$catalogIblockId = null;
	$arPriceCodes = array();

	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
	if(!empty($arTemplateSettings)){
		$catalogIblockId = $arTemplateSettings["TEMPLATE_PRODUCT_IBLOCK_ID"];
		$arPriceCodes = explode(", ", $arTemplateSettings["TEMPLATE_PRICE_CODES"]);
	}
	$GLOBALS['arrFilter'] = array("!PROPERTY__auto_SNYAT_S_PROIZVODSTVA_VALUE" => 'Y', "!PROPERTY_OFFERS_VALUE" => "Снят с производства");
?>

<?$APPLICATION->IncludeComponent(
	"dresscode:catalog", 
	".default", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => $catalogIblockId,
		"TEMPLATE_THEME" => "site",
		"HIDE_NOT_AVAILABLE" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTION_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_STATUS_404" => "Y",
		"DETAIL_DISPLAY_NAME" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "OFFERS",
			2 => "ATT_BRAND",
			3 => "COLOR",
			4 => "ZOOM2",
			5 => "BATTERY_LIFE",
			6 => "SWITCH",
			7 => "GRAF_PROC",
			8 => "LENGTH_OF_CORD",
			9 => "DISPLAY",
			10 => "LOADING_LAUNDRY",
			11 => "FULL_HD_VIDEO_RECORD",
			12 => "INTERFACE",
			13 => "COMPRESSORS",
			14 => "Number_of_Outlets",
			15 => "MAX_RESOLUTION_VIDEO",
			16 => "MAX_BUS_FREQUENCY",
			17 => "MAX_RESOLUTION",
			18 => "FREEZER",
			19 => "POWER_SUB",
			20 => "POWER",
			21 => "HARD_DRIVE_SPACE",
			22 => "MEMORY",
			23 => "OS",
			24 => "ZOOM",
			25 => "PAPER_FEED",
			26 => "SUPPORTED_STANDARTS",
			27 => "VIDEO_FORMAT",
			28 => "SUPPORT_2SIM",
			29 => "MP3",
			30 => "ETHERNET_PORTS",
			31 => "MATRIX",
			32 => "CAMERA",
			33 => "PHOTOSENSITIVITY",
			34 => "DEFROST",
			35 => "SPEED_WIFI",
			36 => "SPIN_SPEED",
			37 => "PRINT_SPEED",
			38 => "SOCKET",
			39 => "IMAGE_STABILIZER",
			40 => "GSM",
			41 => "SIM",
			42 => "TYPE",
			43 => "MEMORY_CARD",
			44 => "TYPE_BODY",
			45 => "TYPE_MOUSE",
			46 => "TYPE_PRINT",
			47 => "CONNECTION",
			48 => "TYPE_OF_CONTROL",
			49 => "TYPE_DISPLAY",
			50 => "TYPE2",
			51 => "REFRESH_RATE",
			52 => "RANGE",
			53 => "AMOUNT_MEMORY",
			54 => "MEMORY_CAPACITY",
			55 => "VIDEO_BRAND",
			56 => "DIAGONAL",
			57 => "RESOLUTION",
			58 => "TOUCH",
			59 => "CORES",
			60 => "LINE_PROC",
			61 => "PROCESSOR",
			62 => "CLOCK_SPEED",
			63 => "TYPE_PROCESSOR",
			64 => "PROCESSOR_SPEED",
			65 => "HARD_DRIVE",
			66 => "HARD_DRIVE_TYPE",
			67 => "Number_of_memory_slots",
			68 => "MAXIMUM_MEMORY_FREQUENCY",
			69 => "TYPE_MEMORY",
			70 => "BLUETOOTH",
			71 => "FM",
			72 => "GPS",
			73 => "HDMI",
			74 => "SMART_TV",
			75 => "USB",
			76 => "WIFI",
			77 => "FLASH",
			78 => "ROTARY_DISPLAY",
			79 => "SUPPORT_3D",
			80 => "SUPPORT_3G",
			81 => "WITH_COOLER",
			82 => "FINGERPRINT",
			83 => "COLLECTION",
			84 => "TOTAL_OUTPUT_POWER",
			85 => "VID_ZASTECHKI",
			86 => "VID_SUMKI",
			87 => "PROFILE",
			88 => "VYSOTA_RUCHEK",
			89 => "GAS_CONTROL",
			90 => "WARRANTY",
			91 => "GRILL",
			92 => "MORE_PROPERTIES",
			93 => "GENRE",
			94 => "OTSEKOV",
			95 => "CONVECTION",
			96 => "INTAKE_POWER",
			97 => "NAZNAZHENIE",
			98 => "BULK",
			99 => "PODKLADKA",
			100 => "SURFACE_COATING",
			101 => "brand_tyres",
			102 => "SEASON",
			103 => "SEASONOST",
			104 => "DUST_COLLECTION",
			105 => "REF",
			106 => "COUNTRY_BRAND",
			107 => "DRYING",
			108 => "REMOVABLE_TOP_COVER",
			109 => "TEST_TEST",
			110 => "CONTROL",
			111 => "FINE_FILTER",
			112 => "FORM_FAKTOR",
			113 => "SKU_COLOR",
			114 => "CML2_ARTICLE",
			115 => "DELIVERY",
			116 => "PICKUP",
			117 => "USER_ID",
			118 => "BLOG_POST_ID",
			119 => "VIDEO",
			120 => "BLOG_COMMENTS_CNT",
			121 => "VOTE_COUNT",
			122 => "SHOW_MENU",
			123 => "SIMILAR_PRODUCT",
			124 => "RATING",
			125 => "RELATED_PRODUCT",
			126 => "VOTE_SUM",
			127 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"USE_REVIEW" => "N",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "N",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => "",
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"QUANTITY_FLOAT" => "N",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR",
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "4",
		"SECTIONS_VIEW_MODE" => "TEXT",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "60",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
		"ELEMENT_SORT_ORDER" => "asc,nulls",
		"ELEMENT_SORT_FIELD2" => "sort",
		"ELEMENT_SORT_ORDER2" => "asc,nulls",
		"LIST_PROPERTY_CODE" => array(
			0 => "OFFERS",
			1 => "ATT_BRAND",
			2 => "PRODUCT_DAY",
			3 => "COLOR",
			4 => "TIMER_DATE",
			5 => "TIMER_LOOP",
			6 => "ZOOM2",
			7 => "BATTERY_LIFE",
			8 => "SWITCH",
			9 => "GRAF_PROC",
			10 => "LENGTH_OF_CORD",
			11 => "DISPLAY",
			12 => "LOADING_LAUNDRY",
			13 => "FULL_HD_VIDEO_RECORD",
			14 => "INTERFACE",
			15 => "COMPRESSORS",
			16 => "Number_of_Outlets",
			17 => "MAX_RESOLUTION_VIDEO",
			18 => "MAX_BUS_FREQUENCY",
			19 => "MAX_RESOLUTION",
			20 => "FREEZER",
			21 => "POWER_SUB",
			22 => "POWER",
			23 => "HARD_DRIVE_SPACE",
			24 => "MEMORY",
			25 => "OS",
			26 => "ZOOM",
			27 => "PAPER_FEED",
			28 => "SUPPORTED_STANDARTS",
			29 => "VIDEO_FORMAT",
			30 => "SUPPORT_2SIM",
			31 => "MP3",
			32 => "ETHERNET_PORTS",
			33 => "MATRIX",
			34 => "CAMERA",
			35 => "PHOTOSENSITIVITY",
			36 => "DEFROST",
			37 => "SPEED_WIFI",
			38 => "SPIN_SPEED",
			39 => "PRINT_SPEED",
			40 => "SOCKET",
			41 => "IMAGE_STABILIZER",
			42 => "GSM",
			43 => "SIM",
			44 => "TYPE",
			45 => "MEMORY_CARD",
			46 => "TYPE_BODY",
			47 => "TYPE_MOUSE",
			48 => "TYPE_PRINT",
			49 => "CONNECTION",
			50 => "TYPE_OF_CONTROL",
			51 => "TYPE_DISPLAY",
			52 => "TYPE2",
			53 => "REFRESH_RATE",
			54 => "RANGE",
			55 => "AMOUNT_MEMORY",
			56 => "MEMORY_CAPACITY",
			57 => "VIDEO_BRAND",
			58 => "DIAGONAL",
			59 => "RESOLUTION",
			60 => "TOUCH",
			61 => "CORES",
			62 => "LINE_PROC",
			63 => "PROCESSOR",
			64 => "CLOCK_SPEED",
			65 => "TYPE_PROCESSOR",
			66 => "PROCESSOR_SPEED",
			67 => "HARD_DRIVE",
			68 => "HARD_DRIVE_TYPE",
			69 => "Number_of_memory_slots",
			70 => "MAXIMUM_MEMORY_FREQUENCY",
			71 => "TYPE_MEMORY",
			72 => "BLUETOOTH",
			73 => "FM",
			74 => "GPS",
			75 => "HDMI",
			76 => "SMART_TV",
			77 => "USB",
			78 => "WIFI",
			79 => "FLASH",
			80 => "ROTARY_DISPLAY",
			81 => "SUPPORT_3D",
			82 => "SUPPORT_3G",
			83 => "WITH_COOLER",
			84 => "FINGERPRINT",
			85 => "VOZRAST",
			86 => "ENERGOPOTREB",
			87 => "OBOROTY",
			88 => "MINI_BAR",
			89 => "SIZES_PRODUCT",
			90 => "DISPLAY_TYPE",
			91 => "TIP_ELEMENTOV_PITANIA",
			92 => "BELKI",
			93 => "ZHIRY",
			94 => "CALORIES",
			95 => "COLLECTION",
			96 => "UGLEVODY",
			97 => "TOTAL_OUTPUT_POWER",
			98 => "VID_ZASTECHKI",
			99 => "VID_SUMKI",
			100 => "PROFILE",
			101 => "VYSOTA_RUCHEK",
			102 => "GAS_CONTROL",
			103 => "WARRANTY",
			104 => "GRILL",
			105 => "MORE_PROPERTIES",
			106 => "GENRE",
			107 => "OTSEKOV",
			108 => "CONVECTION",
			109 => "MATERIAL",
			110 => "INTAKE_POWER",
			111 => "NAZNAZHENIE",
			112 => "BULK",
			113 => "PODKLADKA",
			114 => "SURFACE_COATING",
			115 => "brand_tyres",
			116 => "SEASON",
			117 => "SEASONOST",
			118 => "DUST_COLLECTION",
			119 => "REF",
			120 => "COUNTRY_BRAND",
			121 => "DRYING",
			122 => "REMOVABLE_TOP_COVER",
			123 => "TEST_TEST",
			124 => "CONTROL",
			125 => "FINE_FILTER",
			126 => "FORM_FAKTOR",
			127 => "SKU_COLOR",
			128 => "CML2_ARTICLE",
			129 => "DELIVERY",
			130 => "PICKUP",
			131 => "USER_ID",
			132 => "BLOG_POST_ID",
			133 => "VIDEO",
			134 => "BLOG_COMMENTS_CNT",
			135 => "VOTE_COUNT",
			136 => "SHOW_MENU",
			137 => "SIMILAR_PRODUCT",
			138 => "RATING",
			139 => "RELATED_PRODUCT",
			140 => "VOTE_SUM",
			141 => "MAXIMUM_PRICE",
			142 => "MINIMUM_PRICE",
			143 => "HTML",
			144 => "199",
			145 => "ATT_BRAND2",
			146 => "NEWPRODUCT",
			147 => "SALELEADER",
			148 => "SPECIALOFFER",
			149 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "ARTNUMBER",
			4 => "",
		),
		"LIST_OFFERS_LIMIT" => "1",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "OFFERS",
			1 => "ATT_BRAND",
			2 => "PRODUCT_DAY",
			3 => "COLOR",
			4 => "TIMER_DATE",
			5 => "TIMER_LOOP",
			6 => "ZOOM2",
			7 => "BATTERY_LIFE",
			8 => "SWITCH",
			9 => "GRAF_PROC",
			10 => "LENGTH_OF_CORD",
			11 => "DISPLAY",
			12 => "LOADING_LAUNDRY",
			13 => "FULL_HD_VIDEO_RECORD",
			14 => "INTERFACE",
			15 => "COMPRESSORS",
			16 => "Number_of_Outlets",
			17 => "MAX_RESOLUTION_VIDEO",
			18 => "MAX_BUS_FREQUENCY",
			19 => "MAX_RESOLUTION",
			20 => "FREEZER",
			21 => "POWER_SUB",
			22 => "POWER",
			23 => "HARD_DRIVE_SPACE",
			24 => "MEMORY",
			25 => "OS",
			26 => "ZOOM",
			27 => "PAPER_FEED",
			28 => "SUPPORTED_STANDARTS",
			29 => "VIDEO_FORMAT",
			30 => "SUPPORT_2SIM",
			31 => "MP3",
			32 => "ETHERNET_PORTS",
			33 => "MATRIX",
			34 => "CAMERA",
			35 => "PHOTOSENSITIVITY",
			36 => "DEFROST",
			37 => "SPEED_WIFI",
			38 => "SPIN_SPEED",
			39 => "PRINT_SPEED",
			40 => "SOCKET",
			41 => "IMAGE_STABILIZER",
			42 => "GSM",
			43 => "SIM",
			44 => "TYPE",
			45 => "MEMORY_CARD",
			46 => "TYPE_BODY",
			47 => "TYPE_MOUSE",
			48 => "TYPE_PRINT",
			49 => "CONNECTION",
			50 => "TYPE_OF_CONTROL",
			51 => "TYPE_DISPLAY",
			52 => "TYPE2",
			53 => "REFRESH_RATE",
			54 => "RANGE",
			55 => "AMOUNT_MEMORY",
			56 => "MEMORY_CAPACITY",
			57 => "VIDEO_BRAND",
			58 => "DIAGONAL",
			59 => "RESOLUTION",
			60 => "TOUCH",
			61 => "CORES",
			62 => "LINE_PROC",
			63 => "PROCESSOR",
			64 => "CLOCK_SPEED",
			65 => "TYPE_PROCESSOR",
			66 => "PROCESSOR_SPEED",
			67 => "HARD_DRIVE",
			68 => "HARD_DRIVE_TYPE",
			69 => "Number_of_memory_slots",
			70 => "MAXIMUM_MEMORY_FREQUENCY",
			71 => "TYPE_MEMORY",
			72 => "BLUETOOTH",
			73 => "FM",
			74 => "GPS",
			75 => "HDMI",
			76 => "SMART_TV",
			77 => "USB",
			78 => "WIFI",
			79 => "FLASH",
			80 => "ROTARY_DISPLAY",
			81 => "SUPPORT_3D",
			82 => "SUPPORT_3G",
			83 => "WITH_COOLER",
			84 => "FINGERPRINT",
			85 => "VOZRAST",
			86 => "ENERGOPOTREB",
			87 => "OBOROTY",
			88 => "MINI_BAR",
			89 => "SIZES_PRODUCT",
			90 => "DISPLAY_TYPE",
			91 => "TIP_ELEMENTOV_PITANIA",
			92 => "BELKI",
			93 => "ZHIRY",
			94 => "CALORIES",
			95 => "COLLECTION",
			96 => "UGLEVODY",
			97 => "TOTAL_OUTPUT_POWER",
			98 => "VID_ZASTECHKI",
			99 => "VID_SUMKI",
			100 => "PROFILE",
			101 => "VYSOTA_RUCHEK",
			102 => "GAS_CONTROL",
			103 => "WARRANTY",
			104 => "GRILL",
			105 => "MORE_PROPERTIES",
			106 => "GENRE",
			107 => "OTSEKOV",
			108 => "CONVECTION",
			109 => "MATERIAL",
			110 => "INTAKE_POWER",
			111 => "NAZNAZHENIE",
			112 => "BULK",
			113 => "PODKLADKA",
			114 => "SURFACE_COATING",
			115 => "brand_tyres",
			116 => "SEASON",
			117 => "SEASONOST",
			118 => "DUST_COLLECTION",
			119 => "REF",
			120 => "COUNTRY_BRAND",
			121 => "DRYING",
			122 => "REMOVABLE_TOP_COVER",
			123 => "TEST_TEST",
			124 => "CONTROL",
			125 => "FINE_FILTER",
			126 => "FORM_FAKTOR",
			127 => "SKU_COLOR",
			128 => "CML2_ARTICLE",
			129 => "DELIVERY",
			130 => "PICKUP",
			131 => "USER_ID",
			132 => "BLOG_POST_ID",
			133 => "VIDEO",
			134 => "BLOG_COMMENTS_CNT",
			135 => "VOTE_COUNT",
			136 => "SHOW_MENU",
			137 => "SIMILAR_PRODUCT",
			138 => "RATING",
			139 => "RELATED_PRODUCT",
			140 => "VOTE_SUM",
			141 => "MAXIMUM_PRICE",
			142 => "MINIMUM_PRICE",
			143 => "HTML",
			144 => "199",
			145 => "ATT_BRAND2",
			146 => "NEWPRODUCT",
			147 => "MANUFACTURER",
			148 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "ARTNUMBER",
			2 => "SIZES_SHOES",
			3 => "SIZES_CLOTHES",
			4 => "",
		),
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "N",
		"ALSO_BUY_ELEMENT_COUNT" => "4",
		"ALSO_BUY_MIN_BUYES" => "1",
		"OFFERS_SORT_FIELD" => "",
		"OFFERS_SORT_ORDER" => "",
		"OFFERS_SORT_FIELD2" => "",
		"OFFERS_SORT_ORDER2" => "",
		"PAGER_TEMPLATE" => "round",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR",
			1 => "SIZE_CLOTHES",
			2 => "MATERIAL",
		),
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_STORE" => "N",
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"STORE_PATH" => "/store/#store_id#",
		"MAIN_TITLE" => "Наличие на складах",
		"MIN_AMOUNT" => "10",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "",
			1 => "BRAND_REF",
			2 => "",
		),
		"ADD_SECTIONS_CHAIN" => "Y",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_FB_APP_ID" => "",
		"USE_SALE_BESTSELLERS" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"STORES" => array(
			0 => "1",
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "DESCRIPTION",
			3 => "PHONE",
			4 => "SCHEDULE",
			5 => "EMAIL",
			6 => "IMAGE_ID",
			7 => "COORDINATES",
			8 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "any",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMPONENT_TEMPLATE" => ".default",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"REVIEW_IBLOCK_TYPE" => "service",
		"REVIEW_IBLOCK_ID" => "12",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "12",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "12",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "12",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"SHOW_AVAILABLE_TAB" => "Y",
		"HIDE_AVAILABLE_TAB" => "N",
		"HIDE_MEASURES" => "Y",
		"SHOW_SECTION_BANNER" => "Y",
		"FILE_404" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"COMPATIBLE_MODE" => "Y",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"DISPLAY_CHEAPER" => "N",
		"CHEAPER_FORM_ID" => "1",
		"DISPLAY_OFFERS_TABLE" => "Y",
		"OFFERS_TABLE_PAGER_COUNT" => "10",
		"OFFERS_TABLE_DISPLAY_PICTURE_COLUMN" => "Y",
		"SHOW_SERVICES" => "N",
		"SERVICES_IBLOCK_TYPE" => "info",
		"SERVICES_IBLOCK_ID" => "11",
		"SALE_IBLOCK_TYPE" => "info",
		"SALE_IBLOCK_ID" => "6",
		"HIDE_DELIVERY_CALC" => "Y",
		"FILE" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"FILTER_INSTANT_RELOAD" => "Y",
		"SHOW_MIDDLE_SLIDER" => "N",
		"LAZY_LOAD_PICTURES" => "N",
		"CATALOG_SHOW_TAGS" => "N",
		"DISPLAY_SUBSCRIBE" => "N",
		"SUBSCRIBE_RUBRIC_ID" => "1",
		"SHOW_ADVANTAGES_IN_DETAIL" => "N",
		"ADVANTAGES_IN_DETAIL_IBLOCK_TYPE" => "catalog",
		"ADVANTAGES_IN_DETAIL_IBLOCK_ID" => "15",
		"DETAIL_ALLOW_ADD_REVIEW_NOT_REGISTER" => "N",
		"DETAIL_CALCULATE_DELIVERY" => "N",
		"DETAIL_CALCULATE_DELIVERY_GROUP_BUTTONS" => "",
		"DETAIL_CALCULATE_DELIVERY_SHOW_IMAGES" => "Y",
		"DETAIL_COUNT_TOP_PROPERTIES" => "7",
		"DETAIL_DISABLE_PRINT_WEIGHT" => "N",
		"DETAIL_DISABLE_PRINT_DIMENSIONS" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#.html",
			"compare" => "compare/",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>