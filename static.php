<?php if (!defined('FW')) die('Forbidden');

/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Include css and js files
 */

/*****************************************************************************************
 *  Variables
 *****************************************************************************************/
$base_statics = '/shortcodes/logo-slider/static/';
$base_nodemodules = '/node_modules/';
$shortcodes_extension = fw()->extensions->get('sliders');



/*****************************************************************************************
 *  External Libraries
 *****************************************************************************************/
wp_enqueue_style(
    'fw-slick-styles',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick.css' )
);

wp_enqueue_style(
    'fw-slick-theme-styles',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick-theme.css' )
);

wp_enqueue_script(
    'fw-slick-script',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick.js' )
);



/*****************************************************************************************
 *  Shortcode Styles and Scripts
 *****************************************************************************************/
wp_enqueue_style(
    'fw-shortcode-logo-slider-styles',
    $shortcodes_extension->get_uri($base_statics. 'css/styles.css')
);

wp_enqueue_script(
    'fw-shortcode-logo-slider-script',
    $shortcodes_extension->get_uri($base_statics . 'js/scripts.js')
);
