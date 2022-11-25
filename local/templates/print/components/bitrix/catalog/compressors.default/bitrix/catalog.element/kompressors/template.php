<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(false);?>

<section class="product js-product-page">
	<h1><?=$arResult['NAME']?></h1>
    <div class="product-photos">
        <div class="main-photo">
            <img src="<?=$arResult['MAIN_IMAGE']['BIG_IMAGE']['src']?>" width="500px">
        </div>   
    </div>
    <div class="product-info">
        <div class="product-head clearfix">
            <div id="price_product" class="price">
			<?$frame = $this->createFrame()->begin("");?>
                <?if ($arResult['WHOLESALE_PRICE']):?>
                    <?if($arParams["MSALE"] == 'Y'):?>
                    <div class="toggle js-price-toggle" data-min-wholesale-quantity="<?=$arResult['MIN_WHOLESALE_QUANTITY']?>">
                         <span class="active js-wholesale">Оптовая</span> / <span class="js-retail">Розничная</span> 
                    </div>  
                    <span class="value active"><?=EHelper::price($arResult['WHOLESALE_PRICE'])?></span>
                    <span class="value "><?=EHelper::price($arResult['RETAIL_PRICE'])?></span>
                  <?else:?>
                   <div class="toggle js-price-toggle" data-min-wholesale-quantity="<?=$arResult['MIN_WHOLESALE_QUANTITY']?>">
                        <span class="active js-retail">Розничная</span> / <span class="js-wholesale">Оптовая</span>
                    </div>
                    <span class="value active"><?=EHelper::price($arResult['RETAIL_PRICE'])?></span>
                    <span class="value"><?=EHelper::price($arResult['WHOLESALE_PRICE'])?></span>
                  <?endif;?>
                <?else:?>
                    <div class="toggle">
                        <span class="active">Розничная цена</span>
                    </div>
                    <span class="value active"><?=EHelper::price($arResult['RETAIL_PRICE'])?></span>
                    <?if($arResult['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]>0 and $arResult['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"]>$arResult['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]):?>
                    <span style="color: black;font-size: 25px;text-decoration: line-through;font-weight: bold;" class=" active"><?=EHelper::price($arResult['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"])?></span>
                     <?endif;?>
                <?endif;?>
			<?$frame->end();?>
            </div>
			 <div class="tabs1">
				<div class="body">
					<div class="charakteristiki">
						<?if(!$arResult['PROPERTIES']['HARAKTERISTIKI']['VALUE']['TEXT']):?>
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
						<?else:?>
							
							<table class="charakteristiki"><?=$arResult['PROPERTIES']['HARAKTERISTIKI']['~VALUE']['TEXT'];?></table>
						
						<?endif;?>
					</div>
				</div>
			</div>
			
			
			
			
        </div>
    </div>
	
	<?if($arResult['PROPERTIES']['KOMPLEKTATCIIA']['~VALUE']['TEXT']):?>
		
		<?=$arResult['PROPERTIES']['KOMPLEKTATCIIA']['~VALUE']['TEXT']?>
	
	<?endif;?>
	<br>
	<?if($arResult['DETAIL_TEXT']):?>
		<h2>Описание</h2>
		<?=$arResult['DETAIL_TEXT']?>
	<?endif;?>
	
	<ul class="images">
		<?foreach ($arResult['IMAGES'] as $image):?>
			<?if ($image['IMAGE']['src']!=''):?>
				<li>
					<img src="<?=$image['IMAGE']['src']?>">
				</li>
			<?endif;?>
		<?endforeach;?>
	</ul>
	
</section>