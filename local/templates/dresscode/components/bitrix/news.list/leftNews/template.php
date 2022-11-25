<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if(!empty($arResult["ITEMS"])):?>
	<div class="sideBlock" id="newsBlock">
		<a class="heading" href="<?=SITE_DIR?>news/">Наши проекты</a>
		<div class="sideBlockContent">
			<?foreach($arResult["ITEMS"] as $ix => $arItem):?>
				<div class="newsPreview" id="<?=$this->GetEditAreaId($arItem["ID"]);?>">
					<div class="newsOverview">
						<?if($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="newsTitle"><?=$arItem["NAME"]?></a>
					</div>
				</div>
			<?endforeach;?>		
		</div>
	</div>
<?endif;?>