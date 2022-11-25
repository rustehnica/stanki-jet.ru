						<?IncludeTemplateLangFile(__FILE__);?>
						<?$APPLICATION->ShowViewContent("landing_page_bottom_text_container");?>
					</div>

				</div>
			</div>
		</div>
		<?$APPLICATION->ShowViewContent("no_main_container");?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "footerTabs",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "bigData",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<div id="footer"<?if(!empty($TEMPLATE_FOOTER_VARIANT) && $TEMPLATE_FOOTER_VARIANT != "default"):?> class="variant_<?=$TEMPLATE_FOOTER_VARIANT?>"<?endif;?>>
			<div id="rowFooter">
				<div id="leftFooter">
					<div class="footerRow">
						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING"), "TEMPLATE" => "sect_footer_menu_heading.php"));?></span>
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"footerCatalog", 
								array(
									"ROOT_MENU_TYPE" => "left",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "36000000",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "top",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"COMPONENT_TEMPLATE" => "footerCatalog",
									"CACHE_SELECTED_ITEMS" => "N"
								),
								false
							);?>
						</div>
						<div class="column">							
							<a target="_blank" href="https://www.instagram.com/stanki_jet/"><img src="/bitrix/templates/dresscode/images/instagram.jpg" /></a>
						</div>
						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING3"), "TEMPLATE" => "sect_footer_menu_heading3.php"));?></span>
							<?$APPLICATION->IncludeComponent("bitrix:menu", "footerHelp", Array(
								"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => "",
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "top",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"CACHE_SELECTED_ITEMS" => "N"
								),
								false
							);?>
						</div>
					</div>
				</div>
				<div id="rightFooter">
					<table class="rightTable">
						<tr class="footerRow">
							<td class="leftColumn">
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT"), "TEMPLATE" => "sect_footer_left.php"));?>
								
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left2.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT2"), "TEMPLATE" => "sect_footer_left2.php"));?>
								
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT3"), "TEMPLATE" => "sect_footer_left3.php"));?>
								
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters.php"));?>
							</td>
							<td class="rightColumn">
								<div class="wrap">
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left4.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT4"), "TEMPLATE" => "sect_footer_left4.php"));?>
									
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters_right.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters_right.php"));?>
									<?if(!empty($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])?>
									<?endif;?>
									<?if(!empty($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])?>
									<?endif;?>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="footerBottom">
				<div class="creator">
					
				</div>
				<div class="social">
					
				</div>
			</div>
		</div>
		<div id="footerLine"<?if(!empty($TEMPLATE_FOOTER_LINE_COLOR) && $TEMPLATE_FOOTER_LINE_COLOR != "default"):?> class="color_<?=$TEMPLATE_FOOTER_LINE_COLOR?>"<?endif;?>>
			<div class="wrapper">
				<div class="col">
					<div class="item">
						<?/*a href="<?=SITE_DIR?>callback/" class="callback"><span class="icon"></span> <?=GetMessage("FOOTER_CALLBACK_LABEL")?></a*/?>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_telephone.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_TELEPHONE"), "TEMPLATE" => "sect_footer_telephone.php"));?>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_email.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_EMAIL"), "TEMPLATE" => "sect_footer_email.php"));?>
					</div>
				</div>
			    <div class="col">
				    <div id="flushFooterCart">
						<div class="no-mobile">
							<? $APPLICATION->IncludeComponent(
								"bitrix:sale.basket.basket.line", 
								"bottomCart", 
								array(
									"HIDE_ON_BASKET_PAGES" => "N",
									"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
									"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
									"PATH_TO_PERSONAL" => SITE_DIR."personal/",
									"PATH_TO_PROFILE" => SITE_DIR."personal/",
									"PATH_TO_REGISTER" => SITE_DIR."login/",
									"POSITION_FIXED" => "N",
									"SHOW_AUTHOR" => "N",
									"SHOW_EMPTY_VALUES" => "Y",
									"SHOW_NUM_PRODUCTS" => "Y",
									"SHOW_PERSONAL_LINK" => "N",
									"SHOW_PRODUCTS" => "Y",
									"SHOW_TOTAL_PRICE" => "Y",
									"COMPONENT_TEMPLATE" => "bottomCart",
									"SHOW_DELAY" => "N",
									"SHOW_NOTAVAIL" => "N",
									"SHOW_SUBSCRIBE" => "N",
									"SHOW_IMAGE" => "Y",
									"SHOW_PRICE" => "Y",
									"SHOW_SUMMARY" => "Y",
									"PATH_TO_AUTHORIZE" => ""
								),
								false
							); ?>
						</div>
						<div class="mobile">
							<div class="item">
								<a onclick="ym(48919781,'reachGoal','INST')" href="https://www.instagram.com/stanki_jet/"><img style="height:45px;" src="<?=SITE_TEMPLATE_PATH?>/images/Inst.png"></a>
								<a onclick="ym(48919781,'reachGoal','ZAKAZEMAIL')" href="mailto:<?=Regions::get_email_region()[0]?>"><img style="height:45px;margin-left:1rem;" src="<?=SITE_TEMPLATE_PATH?>/images/mail.png"></a>
								<a onclick="ym(48919781,'reachGoal','PHONE')" href="tel:<?=Regions::get_phone_region()[0]?>"><img style="height:45px;margin-left:1rem;" src="<?=SITE_TEMPLATE_PATH?>/images/phoneIco.png"></a>
								
								<a onclick="ym(48919781,'reachGoal','WA')" href="https://wa.me/79635243636"><img style="height:45px;margin-left:1rem;" src="<?=SITE_TEMPLATE_PATH?>/images/wa.png"></a>
								<a onclick="ym(48919781,'reachGoal','TG')" href="https://t.me/jet_center"><img style="height:45px;margin-left:1rem;" src="<?=SITE_TEMPLATE_PATH?>/images/tg.png"></a>
								
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    
    <div id="overlap"></div>
    
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "cart",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "fastbuy",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "requestPrice",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"dresscode:catalog.product.subscribe.online", 
		".default", 
		array(
			"SITE_ID" => SITE_ID
		),
		false,
		array(
			"HIDE_ICONS" => "Y"
		)
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "landing",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	
	<?$APPLICATION->IncludeComponent(
	"dresscode:settings", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "360000"
	),
	false
);?>

	<div id="upButton">
		<a href="#"></a>
	</div>

    <script type="text/javascript">
      var ajaxPath = "<?=SITE_DIR?>ajax.php";
      var SITE_DIR = "<?=SITE_DIR?>";
      var SITE_ID  = "<?=SITE_ID?>";
      var TEMPLATE_PATH = "<?=SITE_TEMPLATE_PATH?>";
    </script>
    
    <script type="text/javascript">
		var LANG = {
			BASKET_ADDED: "<?=GetMessage("BASKET_ADDED")?>",
			WISHLIST_ADDED: "<?=GetMessage("WISHLIST_ADDED")?>",
			ADD_COMPARE_ADDED: "<?=GetMessage("ADD_COMPARE_ADDED")?>",
			ADD_CART_LOADING: "<?=GetMessage("ADD_CART_LOADING")?>",
			ADD_BASKET_DEFAULT_LABEL: "<?=GetMessage("ADD_BASKET_DEFAULT_LABEL")?>",
			ADDED_CART_SMALL: "<?=GetMessage("ADDED_CART_SMALL")?>",
			CATALOG_AVAILABLE: "<?=GetMessage("CATALOG_AVAILABLE")?>",
			GIFT_PRICE_LABEL: "<?=GetMessage("GIFT_PRICE_LABEL")?>",
			CATALOG_ECONOMY: "<?=GetMessage("CATALOG_ECONOMY")?>",
			CATALOG_ON_ORDER: "<?=GetMessage("CATALOG_ON_ORDER")?>",
			CATALOG_NO_AVAILABLE: "<?=GetMessage("CATALOG_NO_AVAILABLE")?>",
			FAST_VIEW_PRODUCT_LABEL: "<?=GetMessage("FAST_VIEW_PRODUCT_LABEL")?>",
			WISHLIST_SENDED: "<?=GetMessage("WISHLIST_SENDED")?>",
			REQUEST_PRICE_LABEL: "<?=GetMessage("REQUEST_PRICE_LABEL")?>",
			REQUEST_PRICE_BUTTON_LABEL: "<?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?>",
			ADD_SUBSCRIBE_LABEL: "<?=GetMessage("ADD_SUBSCRIBE_LABEL")?>",
			REMOVE_SUBSCRIBE_LABEL: "<?=GetMessage("REMOVE_SUBSCRIBE_LABEL")?>"
		};
	</script>
	<script type="text/javascript">
		<?if(!empty($arTemplateSettings)):?>
			var globalSettings = {
			<?foreach($arTemplateSettings as $settingsIndex => $nextSettingValue):?>
				<?if(!DwSettings::checkSecretSettingsByIndex($settingsIndex)):?>
					"<?=$settingsIndex?>": '<?=$nextSettingValue?>',
				<?endif;?>
			<?endforeach;?>
			}
		<?endif;?>
	</script>
<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","a380mhpb");
</script>
<!-- calltouch -->
</body>
</html>