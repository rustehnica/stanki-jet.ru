<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//IncludeTemplateLangFile(__FILE__);
/*if ($APP->isAjax()) {
    return;
}*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=960">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic-ext" type="text/css" rel="stylesheet">
	<meta name="yandex-verification" content="56f0428cd76863a3" />
	<meta name="google-site-verification" content="H1i5SqTqwlZnRFmiByXY5q76sWRLHROnjN3dV598gsM" />

	<?$page = $APPLICATION->GetCurPageParam();if(strstr($page, '?')) {echo '<meta name="robots" content="noindex, nofollow" />';}?>
	
 <?
      CJSCore::Init(array("jquery"));
 ?>

    <?$APPLICATION->AddHeadString('<script>var APP = {};</script>');?>

    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
	
</head>
<body>

<?$APPLICATION->ShowPanel()?>
<div class="layout">

<header style="margin-bottom: 25px;">
    <div class="work-area">
        <div class="left">
            <div class="logo">
                    <img src="/bitrix/templates/print/images/logo.png">
            </div>
        </div>
        <div class="middle">
            
            <div class="phone">
                <div class="number">8 800 301 56 24</div>
                <div class="caption">звонок по России бесплатный</div>
            </div>
            <div class="work-time">
                <p>пн-пт: <span style="color: #e74030;">9.00</span> до <span style="color: #e74030;">18.00</span>

               </p>
            </div>
        </div>
        <div class="right">
		
			<div align="center" style="color:#e74030;font-weight:bold;;margin-top: 5px;width: 300px;float:right;">
				
				<table style="float:right;">
				
					<tr>
					
						<td style="padding: 0 5px 0 0;"><span style=" border-bottom: 1px dashed #e74030;">Барнаул:</span></td><td>8 (3852) 22-32-60</td>
					
					</tr>				
					
					<tr>
					
						<td style="padding: 0 5px 0 0;"><span style=" border-bottom: 1px dashed #e74030;">Кемерово:</span></td><td>8 (3842) 77-71-36 </td>
					
					</tr>
					
					<tr>
					
						<td style="padding: 0 5px 0 0;"><span style=" border-bottom: 1px dashed #e74030;">Томск:</span></td><td>8 (3822) 28-39-56</td>
					
					</tr>
					
					<tr>
					
						<td style="padding: 0 5px 0 0;"><span style=" border-bottom: 1px dashed #e74030;">Омск:</span></td><td>8 (3812) 20-83-71 </td>
					
					</tr>
				
				</table>
				
				
			
			</div>
		
		
          
        </div>
    </div>
</header>

<main>
   <div class="work-area">        

	<?if (strpos($APPLICATION->GetCurDir(), 'catalog') != false):?>
	<img src="/bitrix/templates/print/images/555.png" style="width:100%;"/>
	<div style="height: 10px;"></div>
	<?endif;?>