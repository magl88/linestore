jQuery.fn.equivalent = function (){
// сам скрипт
	var jQueryblocks = jQuery(this),
		maxH = jQueryblocks.eq(0).height();
	jQueryblocks.each(function(){
		maxH = ( jQuery(this).height() > maxH ) ? jQuery(this).height() : maxH;
	});
	jQueryblocks.height(maxH);
};
jQuery('footer .container .row>div').equivalent(); // вызов скрипта