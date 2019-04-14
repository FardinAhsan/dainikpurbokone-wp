<?php
(site_url() == 'http://localhost/dainikpurbokone') ? define('VERSION', time()) : define('VERSION', wp_get_theme()->get('Version'));

require_once('inc/shortcodes/news_shortcode.php');
require_once('inc/shortcodes/datewiseShortcode.php');
require_once('inc/language_converter/language_converter.php');

function dpkone_init(){
    load_theme_textdomain("dpkone", get_theme_file_path('/languages'));
    register_nav_menus(
        array(
            'header_nav' => __('Header Nav', 'dpkone'),
            'footer_nav' => __('Footer Nav', 'dpkone'),
        )
    );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-formats', array('standard', 'video', 'link', 'quote'));
    add_theme_support('html5', 'comment-list', 'comment-form', 'gallery', 'caption', 'search-form');
    add_theme_support('automatic-feed-links');

    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');

    add_image_size( 'small_news_thumb', 220, 130);

}
add_action('after_setup_theme', 'dpkone_init');

function dpkone_assets(){
    wp_enqueue_style('boot', get_theme_file_uri('assets/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('owl-transition', get_theme_file_uri('assets/css/owl-transition.css'));
    wp_enqueue_style('owl-min', get_theme_file_uri('assets/css/owl.carousel.min.css'));
    wp_enqueue_style('owl-theme', get_theme_file_uri('assets/css/owl.theme.default.min.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('assets/fontawesome/css/all.min.css'));
    wp_enqueue_style('icofont', get_theme_file_uri('assets/icofont/icofont.min.css'));
    wp_enqueue_style('pgwslideshow', get_theme_file_uri('assets/css/pgwslideshow.css'));
    wp_enqueue_style('animate', get_theme_file_uri('assets/css/animate.css'));
    wp_enqueue_style('slickNav', get_theme_file_uri('assets/css/slicknav.css'));
    wp_enqueue_style('eis_tab', get_theme_file_uri('eis_tab.css'),null,VERSION,'all');
    wp_enqueue_style('eis_nav', get_theme_file_uri('eis_nav_style.css'),null,VERSION,'all');
    wp_enqueue_style('parent', get_stylesheet_uri(), null,VERSION);
    wp_enqueue_style('responsive', get_theme_file_uri('assets/css/responsive.css'), null,VERSION);

    wp_enqueue_script('popper',get_theme_file_uri('assets/js/popper.min.js'),array('jquery'),1.0,true);
    wp_enqueue_script('boot',get_theme_file_uri('assets/bootstrap/js/bootstrap.min.js'),array('popper'),1.0,true);
    wp_enqueue_script('owl-new-ver',get_theme_file_uri('assets/js/owl.carousel.min.js'),array('jquery'),1.0,true);
    wp_enqueue_script('pgwslideshowjs',get_theme_file_uri('assets/js/pgwslideshow.js'),array('jquery'),1.0,true);
    wp_enqueue_script('html5gallary',get_theme_file_uri('assets/js/html5gallery.js'),array('jquery'),1.0,true);
    wp_enqueue_script('slickNav',get_theme_file_uri('assets/js/jquery.slicknav.js'),array('jquery'),1.0,true);
    wp_enqueue_script('webticker',get_theme_file_uri('assets/js/jquery.tickerNews.min.js'),array('jquery'),1.0,true);
    wp_enqueue_script('scroll',get_theme_file_uri('assets/js/scroll-top.js'),array('jquery'),1.0,true);
    wp_enqueue_script('api',get_theme_file_uri('assets/js/platform.js'),array('jquery'),1.0,true);
    wp_enqueue_script('custom',get_theme_file_uri('assets/js/custom.js'),array('jquery'),VERSION,true);
    wp_enqueue_script('sidebar_tab',get_theme_file_uri('assets/js/sidebar_tab.js'),array('jquery'),VERSION,true);

    wp_enqueue_script('archive_filter',get_theme_file_uri('assets/js/dpkone_archive_filter.js'),array('jquery'),VERSION,true);    
    $ajax_url = admin_url('admin-ajax.php');
    wp_localize_script('archive_filter', 'url', array('ajax_url' => $ajax_url));

}
add_action('wp_enqueue_scripts', 'dpkone_assets');

/*================= Post View Count ===================*/
function customSetPostViews($postID)
{
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    } else {
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

function dpkone_widgets_init()
{
register_sidebar(array(
    'name' => 'poll',
    'id' => 'poll',
    'description' => 'অনলাইন জরিপ',
));
}
add_action('widgets_init', 'dpkone_widgets_init');

// Breadcrumbs
function custom_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow"><i class="fa fa-home"></i></a>';
    if (is_category() || is_single()) {
        echo '<i class="fas fa-angle-double-right bread-icon"></i>';
        the_category(' &bull; ');
        if (is_single()) {
            echo '<i class="fas fa-angle-double-right bread-icon"></i>';
            the_title();
        }
    } elseif (is_page()) {
        echo '<i class="fas fa-angle-double-right bread-icon"></i>';
        echo the_title();
    } elseif (is_search()) {
        echo '<i class="fas fa-angle-double-right bread-icon"></i>Search Results for... ';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

function custom_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function dpkone_archive_filter(){
    if(check_ajax_referer('date_archive', 'af')){

        $year   = sanitize_text_field($_POST['year']);
        $month  = sanitize_text_field($_POST['month']);
        $day    = sanitize_text_field($_POST['day']);

        $data = array(
            url => esc_url( site_url( "{$year}/{$month}/{$day}" ) )
        );

        wp_send_json_success($data);

    }else{
        echo "Not Found Any data";
    }
    die();
}
add_action('wp_ajax_date_archive', 'dpkone_archive_filter');
add_action('wp_ajax_nopriv_date_archive', 'dpkone_archive_filter');