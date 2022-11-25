<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?if (count($arResult['ITEMS']) > 0):?>
<section class="catalog-section js-catalog-section">
    <div class="switch-view">
        <span>Просмотр:</span>
        <a href="#" data-view="list" class="active">подробный</a> |
        <a href="#" data-view="table">таблица</a>
    </div>
    <div class="items">
        <?foreach ($arResult['ITEMS'] as $itemKey => $item):?>
            <div class="item">
            <div class="wrapper">
                <div class="small-image">
					<?/*if($item['PROPERTIES']['NEW']):?>
                        <div class="label new"></div>
                    <?elseif($item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]>0 and $item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"]>$item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]):?>
                        <div class="label discount"></div>
                    <?endif;*/?>
                    <a href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>">
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
                <?/*$APPLICATION->IncludeComponent(
					"bitrix:iblock.vote", 
					"section", 
					array(
						"IBLOCK_TYPE" => "catalog",
						"IBLOCK_ID" => "IB_CATALOG",
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
				);*/?>
                
                </div>
                <div class="name">
                    <a href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>"><?=$item['NAME']?></a>
                </div>
                <div class="image">
                    <?/*if($item['PROPERTIES']['NEW']):?>
                        <div class="label new"></div>
                    <?elseif($item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]>0 and $item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["PRICE"]>$item['PRICE_MATRIX']["MATRIX"]["1"]["0"]["DISCOUNT_PRICE"]):?>
                        <div class="label discount"></div>
                    <?endif;*/?>

                    <a href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>">
                        <img src="<?
						$img = array();
						$img = EHelper::resizeImage($item['DETAIL_PICTURE'], 150, 140);
						echo $img['src'];
						?><?unset($img);?>" alt="<?=$item['NAME']?>"/>
                    </a>
                </div>
                <?if (count($item['DISPLAY_PROPERTIES_SECTION']) > 0):?>
                    <div class="properties">
                        <?foreach ($item['DISPLAY_PROPERTIES_SECTION'] as $property):?>
							<?if(!is_array($property['VALUE'])):?>
								<div class="property-item">
									<div class="property-name"><?=$property['NAME']?></div>
									<div class="property-value"><?=$property['VALUE']?></div>
								</div>
							<?else:?>
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
						<?if($item['CATALOG_WEIGHT'] != 0):?>
							<div class="property-item">
								<div class="property-name">Вес</div>
								<div class="property-value"><?=$item['CATALOG_WEIGHT']/1000?> кг</div>
							</div>
						<?endif;?>
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
                    <div class="small-buttons">
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
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>
		
        <?=$arResult["NAV_STRING"]?>

    </div>

</section>
<?else:?>

<p style="text-align: center;margin-top: 30px;"><strong>Не найдено товаров по заданным параметрам.</strong></p>

<?endif;?>