<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
	extract($arTemplateSettings);
?>
<?
	if(!empty($TEMPLATE_TOP_MENU_FIXED)){
		$_SESSION["TOP_MENU_FIXED"] = $TEMPLATE_TOP_MENU_FIXED;
	}
?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NTKXFB4');</script>
		<!-- End Google Tag Manager -->
		<meta charset="<?=SITE_CHARSET?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#3498db">
		<?CJSCore::Init(array("fx", "ajax", "window", "popup", "date", "easing"));?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/roboto/roboto.css");?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/".$TEMPLATE_THEME_NAME."/style.css");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.11.0.min.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/rangeSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/maskedinput.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/system.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topMenu.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topSearch.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwCarousel.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/colorSwitcher.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwTimer.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwZoomer.js");?>
		<?if(DwSettings::isPagen()):?><?$APPLICATION->AddHeadString('<link rel="canonical" href="'.DwSettings::getPagenCanonical().'" />');//pagen canonical?><?endif;?>
		<?if(!DwSettings::isBot() && !empty($arTemplateSettings["TEMPLATE_METRICA_CODE"])):?><?$APPLICATION->AddHeadString($arTemplateSettings["TEMPLATE_METRICA_CODE"]);//metrica counter code?><?endif;?>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
	</head>
<body class="loading <?if (INDEX_PAGE == "Y"):?>index<?endif;?><?if(!empty($TEMPLATE_PANELS_COLOR) && $TEMPLATE_PANELS_COLOR != "default"):?> panels_<?=$TEMPLATE_PANELS_COLOR?><?endif;?>">
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTKXFB4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="foundation"<?if(!empty($TEMPLATE_SLIDER_HEIGHT) && $TEMPLATE_SLIDER_HEIGHT != "default"):?> class="slider_<?=$TEMPLATE_SLIDER_HEIGHT?>"<?endif;?>>
		<?require_once($_SERVER["DOCUMENT_ROOT"]."/".SITE_TEMPLATE_PATH."/headers/".$TEMPLATE_HEADER."/template.php");?>
		<div id="main"<?if($TEMPLATE_BACKGROUND_NAME != ""):?> class="color_<?=$TEMPLATE_BACKGROUND_NAME?>"<?endif;?>>
			<?$APPLICATION->ShowViewContent("landing_page_banner_container");?>
			<?$APPLICATION->ShowViewContent("before_breadcrumb_container");?>
			<?if(!defined("INDEX_PAGE")):?><div class="limiter"><?endif;?>

						<?if(!defined("INDEX_PAGE") && !defined("ERROR_404")):?>
							<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
								"START_FROM" => "0",
									"PATH" => "",
									"SITE_ID" => "-",
								),
								false
							);?>
						<?endif;?>
						<?$APPLICATION->ShowViewContent("after_breadcrumb_container");?>
						<?$APPLICATION->ShowViewContent("landing_page_top_text_container");?>