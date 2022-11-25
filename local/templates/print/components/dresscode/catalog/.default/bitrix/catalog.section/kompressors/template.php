<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<pre><?//print_r($arResult['ITEMS'][0])?></pre>
<?//print_r($arResult['PROPERTY_VIEW']);?>
<?if (count($arResult['ITEMS']) > 0):?>
<section class="catalog-section js-catalog-section">

	<div class="head_lines">
	
		<div class="small-image">Фото</div>
        <div class="small-name">Модель</div>            
        <div class="properties">
		
			<ul>				
				<?if (count($arResult['ITEMS'][0]['PROPERTIES']) > 0):?>
              
							<?foreach ($arResult['ITEMS'][0]['PROPERTIES'] as $property):?>
									<?$property_id = $arResult['PROPERTY_VIEW'];?>
									<?if(in_array($property['ID'], $property_id)):?>
											<li><?=$property['NAME']?></li>
									<?endif;?>
							<?endforeach;?>
		
                <?endif;?>
				<?/*<li><img src="<?=P_IMAGES;?>/kompressors/8.gif" /><br>кг</li>*/?>
			
			</ul>
		
		</div>
		<div class="price">Розничная цена</div>
	
	</div>

    <div class="kitems lines">
        <?foreach ($arResult['ITEMS'] as $itemKey => $item):?>
            <div class="item">
            <div class="wrapper">
                <div class="small-image">
					<?/*if($item['PROPERTIES']['NEW']):?>
                        <div class="label new"></div>
                    <?elseif($item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]>0 and $item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"]>$item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]):?>
                        <div class="label discount"></div>
                    <?endif;*/?>
                    <a data-full-image="<?=$item['DETAIL_PICTURE']['SRC']?>" href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>">
						<img src="<?
						$img = array();
						$img = EHelper::cropImage($item['DETAIL_PICTURE'], 45, 34);
						echo $img['src'];?><?unset($img);?>" alt="<?=$item['NAME']?>">
					</a>
                </div>
                <div class="small-name">
                    <a href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>"><?=$item['SMALL_NAME']?></a>
                </div>
                <div class="voite-section">
				
					<?$APPLICATION->IncludeComponent(
						"bitrix:iblock.vote", 
						"section", 
						array(
							"IBLOCK_TYPE" => "catalog",
							"IBLOCK_ID" => "17",
							"ELEMENT_ID" => $item["ID"],
							"ELEMENT_CODE" => $item["CODE"],
							"MAX_VOTE" => "5",
							"VOTE_NAMES" => array(
								0 => "1",
								1 => "2",
								2 => "3",
								3 => "4",
								4 => "5",
								5 => "",
							),
							"SET_STATUS_404" => "N",
							"CACHE_TYPE" => "Y",
							"CACHE_TIME" => "3600",
							"COMPONENT_TEMPLATE" => "section"
						),
						false
					);?>
                
                </div>                
                <?if (count($item['PROPERTIES']) > 0):?>
                    <div class="properties">
						<ul>
							<?foreach ($item['PROPERTIES'] as $property):?>
									<?$property_id = $arResult['PROPERTY_VIEW'];?>
									<?if(in_array($property['ID'], $property_id) && !empty($property['VALUE'])):?>
										<li><?if(is_array($property['VALUE'])){
										foreach($property['VALUE'] as $key => $i){											
												echo $key < count($property['VALUE']) - 1 ? $i.', ' : $i;}
										}else{echo $property['VALUE'];}?></li>
									<?elseif(in_array($property['ID'], $property_id) && empty($property['VALUE'])):?>
										<li>-</li>
									<?endif;?>
							<?endforeach;?>
							<?/*if($item['CATALOG_WEIGHT']):?>
								<li><?=$item['CATALOG_WEIGHT']/1000?></li>
							<?else:?>
								<li>-</li>
							<?endif;*/?>
						</ul>
                    </div>
                <?endif;?>
                <div class="buttons">
				<?if ($item['WHOLESALE_PRICE'] and $arResult["ID"]==337):?>
                    <div class="price"><?=EHelper::price($item['WHOLESALE_PRICE'])?></div>
                 <?else:?> 
                 <?if($item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]>0 and $item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"]>$item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]):?>
					<div class="price2" >
						<?=EHelper::price($item['RETAIL_PRICE'])?><br/>
						<span style="color: silver;font-size: 16px;text-decoration: line-through;font-weight: bold;" >
							<?=EHelper::price($item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"])?>
						</span>
					</div>
                
					<?else:?> 
					<div class="price"><?=EHelper::price($item['RETAIL_PRICE'])?></div>
					<?endif;?>
					<?endif;?> 
                 
                    <?if (in_array($item['ID'], $arResult['PRODUCTS_IN_BASKET'])):?>
                        <a href="/personal/cart/" class="button in-basket">В корзине</a>
                    <?else:?>
                        <div class="button to-basket js-to-basket" data-id="<?=$item['ID']?>" data-url="/ajax/add-to-basket/">В корзину</div>
                    <?endif;?>
                    <?/*<div class="small-buttons">
                        <?if (EHelper::checkInCompare($item['ID'])):?>
                            <a href="/personal/compare/" class="button">В сравнении</a>
                        <?else:?>
                            <div class="button js-to-compare" data-id="<?=$item['ID']?>" data-url="/ajax/add-to-compare/">Сравнить</div>
                        <?endif;?>
                        <?if (EHelper::checkInFavorite($item['ID'])):?>
                            <a href="/personal/favorite/" class="button">В избранном</a>
                        <?else:?>
                            <div class="button js-to-favorite" data-id="<?=$item['ID']?>" data-url="/ajax/add-to-favorite/">В избранное</div>
                        <?endif;?>
                    </div>*/?>
                </div>
            </div>
        </div>
        <?endforeach;?>
		
        <?=$arResult["NAV_STRING"]?>

    </div>

</section>

<?endif;?>