<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
return;?>

</div>
</main>

<div class="footer-spacer"></div>
</div>

<footer>
    <div class="work-area">
        <div class="contacts">
            
        </div>
        <div class="footer-middle">
            <div>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "social", array(
					"ROOT_MENU_TYPE" => "social",
						"MAX_LEVEL" => "1",
						"DELAY" => "N",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => ""
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "N"
					)
				);?>
            </div>
        </div>
        
    </div>
</footer>

<!--LIBS-->
<script src="<?=P_JS;?>libs/can.js"></script>
<script src="<?=P_JS;?>libs/jquery.fancybox.pack.js"></script>
<script src="<?=P_JS;?>libs/jquery.elevateZoom-3.0.8.min.js"></script>
<!--INITIALIZATION-->
<script src="<?=SITE_TEMPLATE_PATH;?>/main.js"></script>
<!--CONTROLS-->
<script src="<?=P_JS;?>controls/bigSlider.js"></script>
<script src="<?=P_JS;?>controls/brandsSlider.js"></script>
<script src="<?=P_JS;?>controls/rangeSlider.js"></script>
<script src="<?=P_JS;?>controls/catalogSection.js"></script>
<script src="<?=P_JS;?>controls/productPhotos.js"></script>
<script src="<?=P_JS;?>controls/tabs.js"></script>
<script src="<?=P_JS;?>controls/registration.js"></script>
<script src="<?=P_JS;?>controls/dropList.js"></script>
<script src="<?=P_JS;?>controls/profile.js"></script>
<script src="<?=P_JS;?>controls/favorite.js"></script>
<script src="<?=P_JS;?>controls/compareSlider.js"></script>
<script type="text/javascript">
	//window.print();
	//setTimeout(function(){window.close();}, 0);

</script>
</html>