//Блоки одной высоты
jQuery.fn.equivalent = function (){
	var jQueryblocks = jQuery(this),
		maxH = jQueryblocks.eq(0).height();
	jQueryblocks.each(function(){
		maxH = ( jQuery(this).height() > maxH ) ? jQuery(this).height() : maxH;
	});
	jQueryblocks.height(maxH);
};
jQuery('footer .container .row>div').equivalent(); // вызов скрипта
jQuery('.block-catalog .item').equivalent(); // вызов скрипта
jQuery('.block-tabs .tab-inf').equivalent(); // вызов скрипта
jQuery('.block-dostavkaInf .row >div .box').equivalent(); // вызов скрипта