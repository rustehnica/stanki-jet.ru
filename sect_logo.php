<?if(MAIN_PAGE === TRUE):?> 
	<img src="<?echo $_SESSION["SOTBIT_REGIONS"]["UF_LOGO_REGION"];?>">
<?else:?> 
	<a href="<?=SITE_DIR?>"><img src="<?echo $_SESSION["SOTBIT_REGIONS"]["UF_LOGO_REGION"];?>"></a>
<?endif;?>
<?$APPLICATION->IncludeComponent(
	"sotbit:regions.data",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"REGION_FIELDS" => array("UF_LOGO_REGION"),
		"REGION_ID" => "14"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"sotbit:regions.choose",
	"",
	Array(
		"FROM_LOCATION" => "Y"
	)
);?>