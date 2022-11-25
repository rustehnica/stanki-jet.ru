<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="content">
	<div style="margin-top: 10px;" class="news-detail">
		
		<img align=left style="width: 250px;margin-right:10px;" src="<?=$arResult["DETAIL_PICTURE"]['SRC'];?>"><?=$arResult["DETAIL_TEXT"];?>
		
	</div>
</section>