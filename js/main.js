 jQuery(document).ready(function ($) {
	let mHeight = $('.wbm_banner_image.banner').height();
	let mWidth = $('.archive.tax-product_cat div#primary').width();

	$('.archive.tax-product_cat div#primary').css('margin-top', mHeight+15);
	$('.banner_default_title_row').css('maxWidth', mWidth);


 });