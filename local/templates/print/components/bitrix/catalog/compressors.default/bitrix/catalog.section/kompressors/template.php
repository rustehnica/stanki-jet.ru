<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?//print_r($arResult['ITEMS'][0]['PROPERTIES']['SELLOUT']);?>
<?//print_r($arResult['PROPERTY_VIEW']);?>
<?if (count($arResult['ITEMS']) > 0):?>
<section class="catalog-section js-catalog-section">
<?foreach ($arResult['ITEMS'] as $itemKey => $item):?>
	<div class="item">
	
		<div class="small-image">
			<a data-full-image="<?=$item['DETAIL_PICTURE']['SRC']?>" href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>">
				<?if($item['DETAIL_PICTURE']['SMALL']['src']):?>
					<img src="<?=$item['DETAIL_PICTURE']['SMALL']['src'];?>" alt="<?=$item['NAME']?>">
				<?else:?>
					<img src="\local\images\nophoto.png">
				<?endif;?>
			</a>
		</div>
		
		<div class="small-name">
			<a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>			
		</div>
		<?if (count($arResult['PROPERTY_VIEW']) > 0):?>
				
			<div class="properties">
				<ul>
					
					<?foreach ($item['PROPERTIES'] as $property):?>
				
						<?$property_id = $arResult['PROPERTY_VIEW'];?>
						<?if(in_array($property['ID'], $property_id) && !empty($property['VALUE'])):?>
							<li>							
								<p class="characteristic-title"><?=$property['NAME']?></p>
								<p class="characteristic"><?if(is_array($property['VALUE'])){
									foreach($property['VALUE'] as $key => $i){											
											echo $key < count($property['VALUE']) - 1 ? $i.', ' : $i;
									}
								}else{
									echo '<b>'.$property['VALUE'].'</b>';
								}?></p>
							
							</li>
						<?elseif(in_array($property['ID'], $property_id) && empty($property['VALUE'])):?>
							<li>
							
								<p class="characteristic-title"><?=$property['NAME']?></p>
								<p class="characteristic"><b>-</b></p>
							
							</li>
						<?endif;?>
					<?endforeach;?>
				</ul>
			</div>
		
		<?endif;?>
		
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
		
		<a href="#" data-name="<?=$item['NAME']?>" class="button to-basket js-to-basket">Уточнить наличие</a>
		
	</div>
<?endforeach;?>
<div style="clear:both;"><?=$arResult["NAV_STRING"]?></div>
	<?/*<div class="head_lines">
	
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
				//<li><img src="<?=P_IMAGES;?>/kompressors/8.gif" /><br>кг</li>
			
			</ul>
		
		</div>
		<div class="price">Розничная цена</div>
	
	</div>

    <div class="kitems lines">
        <?foreach ($arResult['ITEMS'] as $itemKey => $item):?>
            <div class="item">
            <div class="wrapper">
                <div class="small-image">
					<a data-full-image="<?=$item['DETAIL_PICTURE']['SRC']?>" href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>">
						<?if($item['DETAIL_PICTURE']['SMALL']['src']):?>
							<img src="<?=$item['DETAIL_PICTURE']['SMALL']['src'];?>" alt="<?=$item['NAME']?>">
						<?else:?>
							<img src="\local\images\nophoto.png">
						<?endif;?>
					</a>
                </div>
                <div class="small-name">
                    <a href="<?=$item['DETAIL_PAGE_URL']?><?if($arResult["ID"]==337){ echo "?wholesale"; }?>"><?=$item['SMALL_NAME']?></a>
					<?if($item['PROPERTIES']['SELLOUT']['VALUE'] == 'Y'):?><br><div class="sellout">Распродажа</div><?endif;?>
                </div>
                
				<?if (count($arResult['PROPERTY_VIEW']) > 1):?>
				
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
						</ul>
					</div>
					
				<?else:?>
				
					<div class="properties" style="width:347px;"></div>
				
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
					<a href="#" data-name="<?=$item['NAME']?>" class="button to-basket js-to-basket">Уточнить наличие</a>
					/*<a href="#" data-name="<?=$item['NAME']?>" class="button to-basket js-to-basket">Уточнить наличие</a>*/
                    /*if (in_array($item['ID'], $arResult['PRODUCTS_IN_BASKET'])):?>
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
		
        

    </div>*/?>

</section>

<?endif;?>