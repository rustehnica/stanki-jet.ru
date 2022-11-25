
(function(APP, $, undefined) {

    APP             = APP || {};
    APP.Controls    = APP.Controls || {};

    /**
     * BOOTSTRAP
     */
    $(function() {
        //$('select').select2();

        // Просмотренные товары
        /*$('.js-user-panel .head .opener').on('click', function() {
            $(this).closest('.user-panel').find('.body').slideToggle();
        });*/

        // Попапы
       //$('.js-popup').fancybox();

        //APP.miniCart = new APP.Controls.MiniCart($('.js-mini-basket'));

        //$('.js-basket')             .each(function(k, el) {new APP.Controls.Сart(el)});
        //$('.js-catalog-filter')     .each(function(k, el) {new APP.Controls.CatalogFilter(el)});
        //$('.js-catalog-section')    .each(function(k, el) {new APP.Controls.CatalogSection(el)});
     
        //$('.js-product-page')       .each(function(k, el) {new APP.Controls.ProductPage(el)});
       
        //$('.js-order-update')       .each(function(k, el) {new APP.Controls.OrderUpdate(el)});
    });

    /**
     * GLOBAL FUNCTIONS
     */
    APP.getRandomId = function(str) {
        if (str == undefined) {
            str = 'element'
        }

        var suffix = Math.floor(Math.random() * 1000);
        var id = str + suffix;
        while ($('#' + id).length > 0) {
            suffix = Math.floor(Math.random() * 1000);
            id = str + suffix;
        }

        return id;
    }

})(window.APP, jQuery);

function fullname(target_items){
	$(target_items).each(function(i){
	
		var name = $(this).find('.name a');
		
		$(this).mouseover(function(){
		
			name.css({"white-space":"normal", overflow:"visible"});
			name.parent().css({height:130});
			name.parent().next().hide();
			
		}).mouseout(function(){
		
			name.css({"white-space":"nowrap", overflow:"hidden"});
			name.parent().css({height:20});
			name.parent().next().show();
			
		});
		
	});
	
}

$(document).ready(function(){

	fullname(".products-slider .item");
	$('.all-products-link').mouseenter(function(){
	
		$('.catalog-menu').show();
	
	});
	$('.catalog-menu').mouseleave(function(){
	
		$('.catalog-menu').hide();
	
	});

	
});
/*
(function($){
	$(function() {

	  $('span.jQtooltip').each(function() {
		var el = $(this);
		var title = el.attr('title');
		if (title && title != '') {
		  el.attr('title', '').append('<div>' + title + '</div>');
		  var width = el.find('div').width();
		  var height = el.find('div').height();
		  el.hover(
			function() {
			  el.find('div')
				.clearQueue()
				.delay(200)
				.animate({width: width + 20, height: height + 20}, 200).show(200)
				.animate({width: width, height: height}, 200);
			},
			function() {
			  el.find('div')
				.animate({width: width + 20, height: height + 20}, 150)
				.animate({width: 'hide', height: 'hide'}, 150);
			}
		  ).mouseleave(function() {
			if (el.children().is(':hidden')) el.find('div').clearQueue();
		  });
		}
	  })

	})
})(jQuery)*/