<div class="global-block-container">
	<div class="global-content-block">	
		<div class="tb">
			<div class="text-wrap tc">
				<div class="tb">
					<div class="tr">
						<div class="tc">
							<?if(!empty($arResult["NAME"])):?>
								<h1 class="ff-medium"><?=$arResult["NAME"]?></h1>
							<?endif;?>
						</div>
					</div>
					<div class="tr">
						<div class="tc" style="vertical-align:top;">
							<?if(!empty($arResult["DETAIL_PICTURE"])):?>
								<div id="pictureContainer">
									<img src="<?=$arResult["DETAIL_PICTURE"]["MEDIUM_SIZE"]?>"/>
								</div>									
							<?endif;?>
						</div>
						<div class="tc" style="padding: 0 1rem;vertical-align:top;">													
							<?if(!empty($arResult["PREVIEW_TEXT"])):?>
								<?=$arResult["PREVIEW_TEXT"]?>
							<?endif;?>
							<?if(!empty($arResult["DETAIL_TEXT"])):?>
								<div class="detail-text-wrap">
									<?=$arResult["DETAIL_TEXT"]?>										
								</div>
							<?endif;?>			
						</div>
					</div>
				</div>
				<?if(!empty($arResult["PROPERTIES"]["GALERY"]["VALUE"])):?>
					<div class="tb">
						<div class="tr">
							<?foreach($arResult["PROPERTIES"]["GALERY"]["VALUE"] as $item):?>							
								<div class="tc" style="padding-right: 2rem;padding-bottom: 2rem;padding-top: 2rem;">
									<img src="<?=$item["MEDIUM_IMAGE"]["SRC"]?>" style="height:200px;">
								</div>							
							<?endforeach;?>
						</div>
					</div>
				<?endif;?>
				<div class="tb">
					<?if(!empty($arParams["arReferenceId"]) && !empty($arParams["PRODUCT_IBLOCK_ID"])):?>
					<?
						global $arrFilter;
						$arrFilter = array("ID" => $arParams["arReferenceId"]);
					?>
					<div class="h2 ff-medium blog-title-product">Поставленное оборудование</div>
					<?$APPLICATION->IncludeComponent(
							"dresscode:catalog.section",
							"squares",
							array(
								"IBLOCK_TYPE" => $arParams["PRODUCT_IBLOCK_TYPE"],
								"IBLOCK_ID" => $arParams["PRODUCT_IBLOCK_ID"],
								"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
								"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
								"INCLUDE_SUBSECTIONS" => "Y",
								"FILTER_NAME" => "arrFilter",
								"PRICE_CODE" => $arParams["PRODUCT_PRICE_CODE"],
								"PROPERTY_CODE" => $arParams["PRODUCT_PROPERTY_CODE"],
								"PAGER_TEMPLATE" => "round",
								"PAGE_ELEMENT_COUNT" => 20,
								"CONVERT_CURRENCY" => $arParams["PRODUCT_CONVERT_CURRENCY"],
								"CURRENCY_ID" => $arParams["PRODUCT_CURRENCY_ID"],
								"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
								"HIDE_MEASURES" => $arParams["HIDE_MEASURES"],
								"SHOW_ALL_WO_SECTION" => "Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"SET_BROWSER_TITLE" => "N",
								"CACHE_FILTER" => "N",
								"CACHE_TYPE" => "Y",
								"SET_TITLE" => "N",
								"AJAX_MODE" => "Y"
							),
							$component
						);?>
					<?endif;?>
				</div>
			</div>
		</div>	
	</div>	
	<?global $arFilter; $arFilter["!ID"] = $arResult["ID"];?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"blogDetail",
		array_merge($arParams, array("NEWS_COUNT" => 3, "FILTER_NAME" => "arFilter", "INCLUDE_IBLOCK_INTO_CHAIN" => "N", "ADD_SECTIONS_CHAIN" => "N", "ADD_ELEMENT_CHAIN" => "N", "SET_TITLE" => "N", "DISPLAY_TOP_PAGER" => "N", "DISPLAY_BOTTOM_PAGER" => "N")),
		$component
	);?>
</div>
