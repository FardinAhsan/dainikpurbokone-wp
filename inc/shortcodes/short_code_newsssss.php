<?php

function dpkone_important_news_shortcode($attr){

    $default = array(
        'cat' => 'জাতীয়',
    );

    extract( shortcode_atts( $default, $attr, 'important_news' ) );


    $html = '<div class="row mb-2">
            <div class="col-lg-12">
                <div class="important-news-head">
                    <a href="category/'.$cat.'"><h2>'.$cat.'</h2>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">';

    $args = array(
        'status' => 'publish',
        'post_type'=> 'post',
        'category_name'=> $cat,
        'posts_per_page'=>5,
        'orderby' => 'meta_value_num',
    );

    $q = new WP_Query($args);
    $count = 0;
    $div = 5;
    $totalPost = 5;

    while($q->have_posts()):
        $count++;
        $remainder = $count % $div;
        $q->the_post();




        $id = get_the_ID();
        $title = get_the_title();
        $date = get_the_date('F j, Y');


        $year = get_the_time('Y');
        $month = get_the_time('n');
        $day = get_the_time('j');

        $the_post_cover = get_the_post_thumbnail($id, '', array('class'=> 'img-fluid w-100', 'alt'=> 'DainikPurbokone'));

        if ($remainder == 1){
            $html.= '<div class="col-lg-6">
                <div class="important-single-news">
                    <div class="important-single-news-img">
                        <a href="'.get_permalink().'">'.$the_post_cover.'</a>
                        <div class="news-img-date-time">
                            <p class="date-time"><a href="'.esc_url(get_day_link($year, $month, $day)).'">'.$date .'</a></p>
                            <p class="division">চট্টগ্রাম</p>
                        </div>
                    </div>
                    <div class="important-single-news-heding">
                        <a href="'.get_permalink().'">
                            <h4>'.$title.'</h4>
                        </a>
                    </div>
                </div>
            </div>';
        }
        else{
            if ($remainder ==2){
                $html.='<div class="col-lg-6">
                            <div class="row">';
            }
            $html.='<div class="col-lg-6 col-sm-6 mb-2">
                    <div class="single-news">
                        <div class="single-news-img">
                            <a href="'.get_permalink().'">'.$the_post_cover.'</a>
                            <div class="single-news-img-date-time">
                                <p class="single-date-time"><a href="'.esc_url(get_day_link($year, $month, $day)).'">'.$date.'</a></p>
                                <p class="single-division">চট্টগ্রাম</p>
                            </div>
                        </div>
                        <div class="single-news-heding">
                            <a href="'.get_permalink().'">
                                <h6>'.$title.'</h6>
                            </a>
                        </div>

                        <div class="news-border"></div>
                    </div>
                </div>';

            if ($remainder == 0 || $count == $totalPost) {
                $html.='</div>
                        </div>
                    ';
            }
        }



        wp_reset_query();



        endwhile;
$html.='</div>';

return $html;
}
add_shortcode('important_news', 'dpkone_important_news_shortcode');


function dpkone_category_news_shortcode($attr){

    $default = array(
        'cat' => 'জাতীয়',
    );

    extract( shortcode_atts( $default, $attr, 'category_news' ) );


    $html = '
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="category-news-bar">
                            <a href="category/'.$cat.'"><h3>'.$cat.'</h3>
                            <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">';


    $args = array(
        'status' => 'publish',
        'post_type'=> 'post',
        'category_name'=> $cat,
        'posts_per_page'=> 4
    );

    $q = new WP_Query($args);

    while($q->have_posts()): $q->the_post();

        $id = get_the_ID();
        $title = get_the_title();
        $date = get_the_date('F j, Y');
        $location=get_post_meta( "dp_w_location", true );
        $the_post_cover = get_the_post_thumbnail($id, '', array('class'=> 'img-fluid', 'alt'=> 'DainikPurbokone'));

        $html .= '<div class="col-lg-6 col-sm-6 mb-2">
                <div class="single-news">
                    <div class="single-news-img">
                        <a href="'.get_permalink().'">'.$the_post_cover.'</a>
                        <div class="single-news-img-date-time">
                            <p class="single-date-time">'.$date.'</p>
                            <p class="single-division">'.$location.'</p>
                        </div>
                    </div>
                    <div class="single-news-heding">
                        <a href="'.get_permalink().'">
                            <h6>'.$title.'</h6>
                        </a>
                    </div>
                </div>
            </div>';

    endwhile;
    wp_reset_query();

    $html .='
            </div>
            </div>';

    return $html;

}
add_shortcode('category_news', 'dpkone_category_news_shortcode');


















function dpkone_parent_category_news_shortcode($attr, $content){
    $html ='<div class="category-news">
        <div class="row">';
    $html .= do_shortcode($content);
    $html .='</div>
            </div>';

    return $html;
}
add_shortcode('all_news', 'dpkone_parent_category_news_shortcode');


function dpkone_parent_shortcode($attr, $content){
    $html ='<div class="col-lg-9 my-3">';
    $html .= do_shortcode($content);
    $html .='</div>';

    return $html;
}
add_shortcode('main_news', 'dpkone_parent_shortcode');

