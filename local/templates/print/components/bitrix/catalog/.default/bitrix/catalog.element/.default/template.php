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
	</pre>
		<h2>Комплектация</h2>
		<?=$arResult['PROPERTIES']['EQUIPMENT']['~VALUE']?>
	
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