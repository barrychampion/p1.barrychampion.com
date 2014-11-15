<?php

/**
 * Enable theme features
 */
add_theme_support('soil-clean-up');         // Enable clean up from Soil
add_theme_support('soil-relative-urls');    // Enable relative URLs from Soil
add_theme_support('soil-nice-search');      // Enable /?s= to /search/ redirect from Soil
add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('jquery-cdn');            // Enable to load jQuery from the Google CDN

/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', 'UA-27091013-2'); // UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)

if (!defined('WP_ENV')) {
  define('WP_ENV', 'production');  // scripts.php checks for values 'production' or 'development'
}

/**
 * Add body class if sidebar is active
 */
function roots_sidebar_body_class($classes) {
  if (roots_display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }
  return $classes;
}
add_filter('body_class', 'roots_sidebar_body_class');

/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function roots_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404',
      'is_front_page'
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'template-custom.php'
    )
  );

  return apply_filters('roots/display_sidebar', $sidebar_config->display);
}

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
//if (!isset($content_width)) { $content_width = 1140; }

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
      $skins['rsBC'] = array(
           'label' => 'BC'//,
           //'path' => get_stylesheet_directory_uri() . '/royalslider/skins/bc/bc.css'  // get_stylesheet_directory_uri returns path to your theme folder
      );
      return $skins;
}

// Add this to your theme functions.php
// new_rs_after_js_init_code action is available since v3.1.7.
function add_additional_rs_code() {
    ?>
    // put JS code here
        $(function(){
            $(".rsFullscreenBtn").addClass("hidden-xs hidden-sm");
            $(".rsGCaption, .rsBullets").addClass("hidden-xs");
            $(".rsFullscreenIcn").addClass("fa fa-expand");
            $(".rsArrowRight .rsArrowIcn").addClass("fa fa-chevron-right");
            $(".rsArrowLeft .rsArrowIcn").addClass("fa fa-chevron-left");
        });

    // For example: get slider instance (if it's single on page)
    var sliderInstance = $('.royalSlider').data('royalSlider'); 
    <?php
}
add_action('new_rs_after_js_init_code', 'add_additional_rs_code');

function enqueue_front_page_scripts() {
    if( is_front_page() )
    {
        register_new_royalslider_files(3);
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_scripts' );