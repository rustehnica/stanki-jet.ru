<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(false);?>
<section class="product js-product-page">
	<h1><?=$arResult['NAME']?></h1>
    <div class="product-photos">
        <div class="main-photo">
            <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" width="500px">
        </div>   
		<?if($arResult['PROPERTIES']['EQUIPMENT']['~VALUE']):?>
	<br><br>
	<pre>
	</pre>
		<h2>Комплектация</h2>
		<?=$arResult['PROPERTIES']['EQUIPMENT']['~VALUE']['TEXT']?>
	
	<?endif;?>
    </div>
    <div class="product-info">
        <div class="product-head clearfix">
			<div>Артикул: <?=$arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']?></div>
            <div id="price_product" class="price">
				<?$frame = $this->createFrame()->begin("");?>
					<?if(stripos($arResult['PROPERTIES']['IN_STOCK']['VALUE'], "снят") === false):?>
						<span class="value active">
							<?=$arResult['PRICES']['BASE']['VALUE_VAT'] && !$arResult['PRICES']['BASE']['VALUE_VAT'] == 0 ? $arResult['PRICES']['BASE']['PRINT_VALUE'] : 'По запросу'?>
						</span>					
					
						<?if($arResult['PROPERTIES']['OLD_PRICE']['VALUE'] && $arResult['PROPERTIES']['OLD_PRICE']['VALUE'] != $arResult['PRICES']['BASE']['VALUE_VAT']):?>
							<span style="color: #888d94;font-size: 25px;text-decoration: line-through;font-weight: bold;" class=" active">
								<?=CCurrencyLang::CurrencyFormat(str_replace(" ", "", $arResult['PROPERTIES']['OLD_PRICE']['VALUE']), "RUB", false)?>&#8381;
							</span>
						<?elseif($arResult['PRICES']['BASE']['DISCOUNT_VALUE'] && $arResult['PRICES']['BASE']['VALUE_VAT'] > $arResult['PRICES']['BASE']['DISCOUNT_VALUE']):?>						
							<span style="color: #888d94;font-size: 25px;text-decoration: line-through;font-weight: bold;" class=" active">
								<?=$arResult['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?>
							</span>
						<?endif;?>
					<?endif;?>
					
				<?$frame->end();?>
            </div>
			 <div class="tabs1">
				<div class="body">
					<div class="charakteristiki">
						<?/* if(!$arResult['PROPERTIES']['HARAKTERISTIKI']['VALUE']['TEXT']):?>
							<div class="properties">
								<?foreach ($arResult['DISPLAY_PROPERTIES'] as $property):?>
									<?if($property['VALUE'] && $property['VALUE'] != '-' && !is_array($property['VALUE'])):?>
										<div class="property-item">
											<div class="property-name"><?=$property['NAME']?></div>
											<div class="property-value"><?=$property['VALUE']?></div>
										</div>
									<?elseif($property['VALUE'] && $property['VALUE'] != '-'):?>
										<div class="property-item">
											<div class="property-name"><?=$property['NAME']?></div>
											<div class="property-value">
												<?$k = 0;?>
												<?foreach($property['VALUE'] as $value):?>									
													<?if($k < count($property['VALUE']) - 1 ):?>
														<?echo $value.','?>
														<?$k++;?>
													<?else:?>
														<?echo $value;?>										
													<?endif;?>
												<?endforeach;?>
											</div>
										</div>
									<?endif;?>						
								<?endforeach;?>
								<?if($arResult['PROPERTIES']['ALL_PROPERTIES']['VALUE']):?>
															
									<?foreach($arResult['PROPERTIES']['ALL_PROPERTIES']['VALUE'] as $key => $item):?>
										<div class="property-item">
											<div class="property-name"><?=$item?></div>
											<div class="property-value"><?=$arResult['PROPERTIES']['ALL_PROPERTIES']['DESCRIPTION'][$key]?></div>
										</div>
									<?endforeach;unset($item);?>
									
								<?endif;?>
								<?if($arResult['CATALOG_LENGTH'] != 0):?>
									<div class="property-item">
										<div class="property-name">Длина</div>
										<div class="property-value"><?=$arResult['CATALOG_LENGTH']/10?> см</div>
									</div>
								<?endif;?>
								<?if($arResult['CATALOG_WIDTH'] != 0):?>
									<div class="property-item">
										<div class="property-name">Ширина</div>
										<div class="property-value"><?=$arResult['CATALOG_WIDTH']/10?> см</div>
									</div>
								<?endif;?>
								<?if($arResult['CATALOG_HEIGHT'] != 0):?>
									<div class="property-item">
										<div class="property-name">Высота</div>
										<div class="property-value"><?=$arResult['CATALOG_HEIGHT']/10?> см</div>
									</div>
								<?endif;?>
								<?if($arResult['CATALOG_WEIGHT'] != 0):?>
									<div class="property-item">
										<div class="property-name">Вес</div>
										<div class="property-value"><?=$arResult['CATALOG_WEIGHT']/1000?> кг</div>
									</div>
								<?endif;?>
							</div>
						<?else: */?>
						<?if($arResult['PROPERTIES']['CHAR']['VALUE']):?>
							<?=$arResult['PROPERTIES']['CHAR']['~VALUE'];?>						
						<?endif;?>
					</div>
				</div>
			</div>
			
			
			
			
        </div>
    </div>
	
	
	<br>
	<?if($arResult['DETAIL_TEXT']):?>
		<h2>Описание</h2>
		<?=$arResult['DETAIL_TEXT']?>
	<?endif;?>
	<ul class="images">
		<?foreach ($arResult['MORE_PHOTO'] as $image):?>
			<?if ($image['SRC']):?>
				<li style="margin-top: 1rem;">
					<img src="<?=$image['SRC']?>">
				</li>
			<?endif;?>
		<?endforeach;?>
	</ul>
	
</section>