<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?if(!empty($arResult["ITEMS"])):?>
	<div id="middleSlider">
		<ul class="slideBox">
			<?foreach($arResult["ITEMS"] as $i => $arElement):?>
				<?
					$this->AddEditAction($arElement["ID"], $arElement["EDIT_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arElement["ID"], $arElement["DELETE_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array());
				?>
				<li id="<?=$this->GetEditAreaId($arElement["ID"]);?>">
					<?if(!empty($arElement["PROPERTIES"]["LINK"]["VALUE"])):?>
						<a href="<?=str_replace("#SITE_DIR#", SITE_DIR, $arElement["PROPERTIES"]["LINK"]["VALUE"])?>">
					<?endif;?>
					<?if($arParams["LAZY_LOAD_PICTURES"] == "Y"):?>
						<img src="<?=$templateFolder?>/images/lazy.jpg" data-lazy="<?=$arElement["DETAIL_PICTURE"]["src"]?>" class="lazy" alt="">
					<?else:?>
							<?if($arElement["PROPERTIES"]["URL_BANNER"]["VALUE"]):?><a href="<?=$arElement["PROPERTIES"]["URL_BANNER"]["VALUE"]?>"><?endif;?><img src="<?=$arElement["DETAIL_PICTURE"]["src"]?>" class="lazy" alt=""><?if($arElement["PROPERTIES"]["URL_BANNER"]["VALUE"]):?></a><?endif;?>
					<?endif;?>
					<?if(!empty($arElement["PROPERTIES"]["LINK"]["VALUE"])):?>
						</a>
					<?endif;?>
				</li>
			<?endforeach;?>
		</ul>
		<a href="#" class="middleSliderBtnLeft"></a>
		<a href="#" class="middleSliderBtnRight"></a>
	</div>
<?endif;?>
