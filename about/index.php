<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?><h1>О магазине</h1>
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
<div class="global-block-container">
	<p style="color: #555555;">
 <span style="color: #000000;">JET центр Алтай является официальными представителем</span><span style="color: #000000;">&nbsp;лидера о</span><span style="color: #000000;">течественного рынка станочного оборудования</span><span style="color: #000000;">&nbsp;JET в Алтайском крае</span>. С<span style="color: #000000;">тараясь постоянно совершенствовать&nbsp;инновационные технологии и идеи налаживания контактов между производителем и покупателями.</span>
	</p>
 <span style="color: #000000;"> </span>
	<p>
 <span style="color: #000000;">Компания JET является официальным партнером концерна JPW Group на российском рынке, занимаясь реализацией, поставкой и обслуживанием металлообрабатывающих и деревообрабатывающих&nbsp;станков, оборудования лучших зарубежных производителей. </span>Совместная деятельность дает большие преимущества не только в широких финансовых возможностях, но и гарантирует соблюдение качества поставляемой техники, увеличение объемов реализации и сервисного обслуживания станков на территории России.
	</p>
 <span style="color: #000000;"> </span>
	<p>
 <span style="color: #000000;">Продукция под логотипом&nbsp;JET&nbsp; и другие&nbsp;инструменты под логотипами Wilton, Kreg и другими, поставляется нами в близлежащие регионы Алтайского края.&nbsp;</span>Большинство оборудования выпускается на заводах Европы, США и Тайваня. Нашим клиентам мы предлагаем выгодное сотрудничество и партнерские отношения.
	</p>
 <span style="color: #000000;"> </span>
	<p>
 <span style="color: #000000;">
		Удобные формы расчета, поставка оборудования в лизинг, гарантийные обязательства и полноценное сервисное обслуживание, наладка&nbsp; - основные критерии нашей деятельности. Продукция известных мировых брендов вместе с нами станет для вас доступнее. Вы по достоинству сможете оценить преимущества металлообрабатывающих станков и другого промышленного оборудования известной марки, используя приобретенную у нас технику на собственном производстве. </span>
	</p>
 <span style="color: #000000;"> </span>
	<p align="center">
 <span style="color: #000000;"> </span>
	</p>
	<h2 style="color: #222222;"><b>НАШИ МЕНЕДЖЕРЫ</b></h2>
	<div class="tiles-list actions-list">
		<div class="tile-wrap">
			<div class="tile">
				<div class="tb">
					<div class="tc">
						<div class="tile-text">
							<h3><b>Специалист по деревообработке</b></h3>
							<p>
 <img width="307" alt="IMG_20190904_172641.jpg" src="/upload/medialibrary/ea8/ea85c766cb3bb42085f5ebceaa4ae512.jpg" height="206" title="IMG_20190904_172641.jpg">
							</p>
							<p style="font-weight: bold;">
								 Роман Симонов
							</p>
							<p>
 <a href="mailto:stanki@ruteh.ru">instrument@ruteh.ru</a>
							</p>
							<p style="font-weight: bold;">
 <a href="tel:89612344994">8 (961) 234 49 94</a>
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
 <img width="307" alt="IMG_20190904_172920.jpg" src="/upload/medialibrary/552/5528496e56456a9c116d3bb414bb8887.jpg" height="225" title="IMG_20190904_172920.jpg">
							</p>
							<p style="font-weight: bold;">
								 Андрей Степкин
							</p>
							<p>
 <a href="mailto:stanki@ruteh.ru">stanki@ruteh.ru</a>
							</p>
							<p style="font-weight: bold;">
 <a href="tel:89635243553">8 (963) 524 35 53</a>
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
							<h3><b>Руководитель JET-ЦЕНТР</b><img src="https://stanki-jet.ru/bitrix/images/1.gif" title="" id="bxid803674953"><b>&nbsp;</b><b>АЛТАЙ</b><img src="https://stanki-jet.ru/bitrix/images/1.gif" title="" id="bxid857213617"></h3>
 <img width="307" alt="DSCN3178.JPG" src="/upload/medialibrary/b39/b39642f9071645517f30f35078516c44.JPG" height="230" title="DSCN3178.JPG">
							<p style="font-weight: bold;">
								 Сергей Бородулин
							</p>
							<p>
 <a href="mailto:101@ruteh.ru">101@ruteh.ru</a>
							</p>
							<p style="font-weight: bold;">
 <a href="tel:89130903995">8 (913) 090 39 95</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="clear:both;">
	</div>
 <img src="/upload/medialibrary/70a/70ad4a5cff184ef4004168d2cdf1258c.jpg"><br>
	<h2 style="color: #222222;"><b>Главный офис, склад, сервисный центр:</b></h2>
	<p style="color: #222222;">
		 656922, г. Барнаул, ул. Попова, 181
	</p>
 <br>
	<h3 style="color: #222222;"><b>Представительство в г. Новосибирск:</b></h3>
	<p style="color: #222222;">
		 630110, г. Новосибирск, ул. Писемского, 2г, офис 8
	</p>
 <span style="color: #222222;">&nbsp;&nbsp;</span><br>
	<p style="text-align:center;font-size: 1.5rem;margin:0.7rem 0;line-height:1.5rem;">
		 Телефоны поддержки клиентов в регионах
	</p>
	<p style="text-align:center;font-size: 1.5rem;font-weight:bold;margin:0.7rem 0;line-height:1.5rem;">
		 ЗВОНОК ПО РОССИИ БЕСПЛАТНЫЙ
	</p>
	<p style="text-align:center;font-size: 1.5rem;font-weight:bold;margin:0.7rem 0;">
 <a onclick="ym(48919781, 'reachGoal', 'PHONE'); return true;" href="tel:88007004653">8 (800) 505-40-38</a>
	</p>
 <br>
	<div class="global-information-block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>