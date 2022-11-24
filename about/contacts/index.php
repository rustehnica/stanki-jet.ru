<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты JET-центр Алтай");
?><h1>Контактная информация</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
<ul class="contactList">
	<li>
	<table>
	<tbody>
	<tr>
		<td>
                         <img alt="cont1.png" src="/bitrix/templates/dresscode/images/cont1.png" title="cont1.png">
		</td>
		<td>
			 <?=Regions::get_phone_region()[0]?><br>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
                          <img alt="cont2.png" src="/bitrix/templates/dresscode/images/cont2.png" title="cont2.png">
		</td>
		<td>
                          <a href="mailto:zakaz@stanki-jet.ru">zakaz@stanki-jet.ru</a><br>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
                        <img alt="cont3.png" src="/bitrix/templates/dresscode/images/cont3.png" title="cont3.png">
		</td>
		<td>
			<?=Regions::get_address_region()?>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
	<li>
	<table>
	<tbody>
	<tr>
		<td>
 <img alt="cont4.png" src="/bitrix/templates/dresscode/images/cont4.png" title="cont4.png">
		</td>
		<td>
			 Пн-Пт : с 09:00 до 18:00<br>
			 Сб, Вс : выходной<br>
		</td>
	</tr>
	</tbody>
	</table>
 </li>
</ul>
 <style>
a{color:#ed1c24;}
.tiles-list { max-width: none; margin: -12px; font-size: 0.9rem; }
	.tiles-list .tile-wrap { display: inline-block; width: 33%; padding: 12px; vertical-align: top; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000;text-align:center; }
	.tiles-list .tile { height: 425px; border: 1px solid #e7e8ea; }
	.tiles-list .tb { height: 100%; }
	.tiles-list .tc { vertical-align: top; }
	.tiles-list .tile.no-image .tc { vertical-align: middle; }
	.tiles-list .tile.no-image .h3 { max-height: 60px; }
	.tiles-list .tile.center-image .image { background-size: contain; }
	.tiles-list .image-wrap { position: relative; display: block; height: 200px; overflow: hidden; }
	.tiles-list .image { position: absolute; left: 0; top: 0; width: 100%; height: 100%; display: block; background-position: center center; background-size: cover; background-repeat: no-repeat; -webkit-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; }
	.tiles-list .image-wrap:hover .image { -webkit-transform: scale(1.02); transform: scale(1.02); }
	.tiles-list .tile-text { -webkit-box-sizing: border-box; box-sizing: border-box; padding: 12px 18px 18px; }
	.tiles-list .tile-time { font-family: "robotomedium"; font-size: 13px; color: #888888; }
	.tiles-list .tile-time:after { content: ""; display: block; width: 50px; height: 1px; margin: 8px 0 12px; background: #cccccc; }
	.tiles-list .tile-date { margin-bottom: 6px; font-size: 13px; color: #cccccc; }
	.tiles-list .h3 { max-height: 40px; overflow: hidden; margin-bottom: 6px; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out; }
	.tiles-list .tile-descr { max-height: 45px; overflow: hidden; font-size: 13px; line-height: 15px; }
	.tiles-list .btn-simple { margin-top: 8px; }


	@media screen and (max-width: 1700px){
		.tiles-list { margin: -6px; }
		.tiles-list .tile-wrap { padding: 6px; }
		.tiles-list .tile-text { padding: 12px; }
	}


	@media screen and (max-width: 1600px){
		.tiles-list .tile { height: 330px; }
		.tiles-list .tile-wrap { width: 33%; }
		.tiles-list .tile-text { padding: 6px 12px; }
		.tiles-list .image-wrap { height: 160px; }
		.tiles-list .tile-time:after { margin: 3px 0 6px; }
		.tiles-list .h3 { font-size: 14px; line-height: 18px; max-height: 36px; }
		.tiles-list .tile.no-image .h3 { max-height: 51px; }
		.tiles-list .tile-wrap:first-child .h3 { max-height: 44px; font-size: 18px; line-height: 22px; }
	}

	@media screen and (max-width: 1300px){
		.tiles-list .tile-wrap { width: 33.333%; }
	}

	@media screen and (max-width: 1024px){
		.tiles-list .tile-wrap { width: 25%; }
	}

	@media screen and (max-width: 950px){
		.tiles-list .tile-wrap { width: 33.333%; }
	}

	@media screen and (max-width: 800px){
		.tiles-list .tile-wrap:nth-child(n) { width: 100%; }
		.tiles-list .tile { height: auto; padding: 18px; }
		.tiles-list .tb {  }
		.tiles-list .tc { display: table-row; }
		.tiles-list .tile-wrap:first-child .image-wrap { position: relative; left: auto; top: auto; display: table-cell; vertical-align: middle; width: 40%; height: auto; padding-right: 4%; }
		.tiles-list .image-wrap { display: table-cell; vertical-align: middle; width: 40%; height: auto; padding-right: 4%; }
		.tiles-list .image { position: relative; left: auto; top: auto; height: 140px; }
		.tiles-list .tile-date { margin-bottom: 3px; }
		.tiles-list .tile-descr { max-height: 30px; }
		.tiles-list .tile-wrap:first-child .tile-text { position: relative; left: auto; bottom: auto; width: auto; background: no-repeat; -webkit-box-shadow: none; box-shadow: none; text-align: left; color: #000; }
		.tiles-list .tile-wrap:nth-child(n) .tile-text { display: table-cell; vertical-align: middle; padding: 0; }
		.tiles-list .tile-wrap:first-child .btn-simple { display: inline-block; }
		.tiles-list .tile-wrap:first-child .tile-time { display: block; }
		.tiles-list .tile-wrap:first-child .tile-date { margin: 0 0 6px 0; }
		.tiles-list .tile-wrap:nth-child(n) .h3 { font-size: 16px; line-height: 20px; max-height: 40px; color: #000; }
	}

	@media screen and (max-width: 480px){
		.tiles-list .tile { padding: 12px; }
		.tiles-list .tile-wrap:nth-child(n) .image-wrap { display: none; }
	}
	
	.blog-list .tile-wrap:first-child .tile-text { display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; -webkit-box-align: center; -ms-flex-align: center; align-items: center; }
	.blog-list .tile-wrap:first-child .tile-date { -webkit-box-ordinal-group: 2; -ms-flex-order: 1; order: 1; margin: 6px 0 0 24px; }
	.blog-list .tile-wrap:first-child .h3 { width: 100%; }
	.blog-list .tile-wrap:first-child .tile-descr { width: 100%; }

	@media screen and (max-width: 800px){
		.blog-list .tile-wrap:first-child .tile-text { display: block; }
		.blog-list .tile-wrap:first-child .tile-date  { margin: 0 0 3px; }
	}

</style> <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>
	<h2 style="color: #222222;"><b>НАШИ МЕНЕДЖЕРЫ</b></h2>
		<div class="tiles-list actions-list">
			<div class="tile-wrap">
				<div class="tile">
					<div class="tb">
						<div class="tc">
							<div class="tile-text">
								<h3><b>Специалист по деревообработке</b></h3>
								<p>
									<img alt="IMG_20190904_172641.jpg" src="/upload/medialibrary/ea8/ea85c766cb3bb42085f5ebceaa4ae512.jpg" title="IMG_20190904_172641.jpg" width="307" height="206">
								</p>
								<p style="font-weight: bold;">
									 Роман Симонов
								</p>
								<p style="font-weight: bold;">
									<a style="color:#000;" href="mailto:derevo@stanki-jet.ru">derevo@stanki-jet.ru</a>
								</p>
								<p style="font-weight: bold;">
									<a style="color:#000;" href="tel:89675556319">8 (967) 555 63 19</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tile-wrap">
				<div class="tile">
					<div class="tb">
						<div class="tc">
							<div class="tile-text">
								<h3><b>Специалист по металлообработке</b></h3>
								<p>
									<img alt="IMG_20190904_172920.jpg" src="/upload/medialibrary/552/5528496e56456a9c116d3bb414bb8887.jpg" title="IMG_20190904_172920.jpg" width="307" height="225">
								</p>
								<p style="font-weight: bold;">
									 Андрей Степкин
								</p>
								<p style="font-weight: bold;">
									<a style="color:#000;" href="mailto:metall@stanki-jet.ru">metall@stanki-jet.ru</a>
								</p>
								<p style="font-weight: bold;">
									<a style="color:#000;" href="tel:89675553271">8 (967) 555 32 71</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tile-wrap">
				<div class="tile">
					<div class="tb">
						<div class="tc">
							<div class="tile-text">
								<h3><b>Руководитель JET-ЦЕНТР</b></h3>
								<img alt="DSCN3178.JPG" src="/upload/medialibrary/b39/b39642f9071645517f30f35078516c44.JPG" title="DSCN3178.JPG" width="307" height="230">
								<p style="font-weight: bold;">
									 Сергей Бородулин
								</p>
								<p style="font-weight: bold;">
									<!--?/*a href="tel:89130903995"-->8 (913) 090 39 95
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="global-block-container">
	<div class="detail-text-wrap">		
		<h3 style="color: #222222;"><b>Главный офис:</b></h3>
		<p style="color: #222222;">
			656922, г. Барнаул, ул. Попова, 181
		</p>
		<h3 style="color: #222222;"><b>Склад самовывоза:</b></h3>
		<p style="color: #222222;">
			<?=Regions::get_address_region()?>
		</p>
		<h3 style="color: #222222;"><b>Реквизиты для работы с юридическими лицами</b></h3>
	
		ООО «ЦПО»<br>
		ОГРН 1192225027610<br>
		ИНН 2222878470

		<h3 style="color: #222222;"><b>Реквизиты для работы с физическими лицами</b></h3>

		ИП Осяйкин<br>
		ОГРНИП 307222328400022<br>
		ИНН 222301953753
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>