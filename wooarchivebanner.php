<?php
/*
Plugin Name: Woo Archive Banner
Plugin URI: https://github.com/HeyMehedi/WooArchiveBanner
Description: ...
Author: Mehedi Hasan
Author URI: https://heymehedi.com
version: 1.0
*/

add_action('wp_enqueue_scripts','woo_archive_banner_init');

function woo_archive_banner_init() {
    wp_enqueue_script( 'woo_archive_banner-js', plugins_url( '/js/main.js', __FILE__ ));
    wp_enqueue_style( 'woo_archive_banner-css', plugins_url( '/css/style.css', __FILE__ ));
}

// 

function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    ?>
			<div class="wbm_banner_image banner" style="background-image: url('<?php echo $image; ?>');"> 
				<div class="banner_default_title_row">
					<h2 class="banner_default_title" style="color:; font-size: 50px;"><?php woocommerce_page_title(); ?></h2>
				</div>
			</div>
			<?php
		}
	}
}

add_action( 'woocommerce_before_main_content', 'woocommerce_category_image', 10 );
