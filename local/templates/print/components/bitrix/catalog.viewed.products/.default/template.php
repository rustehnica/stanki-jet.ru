<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CDatabase $DB */
$this->setFrameMode(true);
if (!empty($arResult['ITEMS'])):?>

	<h3>Просмотренные товары</h3>
	<div class="products-slider js-products-slider">
		<div class="view-block">
			<div class="items">
				<?foreach ($arResult['ITEMS'] as $item):?>
					<div class="item">
						<div class="name">
							<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$item['NAME']?>"><?=$item['NAME']?></a>
						</div>
						<div class="image">
							<a href="<?=$item['DETAIL_PAGE_URL']?>"><img src="<?=$item['DETAIL_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>"></a>
						</div>
						<div class="properties">
							<?if($item['DISPLAY_PROPERTIES']['FIRM']['VALUE']):?>
								<span><?=$item['DISPLAY_PROPERTIES']['FIRM']['VALUE']?></span>
							<?else:?>
								<p>&nbsp;<p>
							<?endif;?>
						</div>
						<div class="buy">
							<div class="price">
							
							<?
								if($item["CATALOG_CURRENCY_1"] != "RUB")
								{
									$item['CATALOG_PRICE_1'] = CCurrencyRates::ConvertCurrency($item["CATALOG_PRICE_1"], $item['CATALOG_CURRENCY_1'], 'RUB');
								}
							?>
							<?=EHelper::price($item['CATALOG_PRICE_1'])?></div>
							<a class="button" href="<?=$item['DETAIL_PAGE_URL']?>">Подробнее</a>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>

<?endif;?>