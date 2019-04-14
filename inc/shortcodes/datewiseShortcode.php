<?php

function dpkone_dateWiseQuery($attr){

    $default = array(
        'cat' => '',
        'year' => '',
        'month' => '',
        'day' => '',
    );

    extract( shortcode_atts( $default, $attr, 'date_news' ) );
    $args = array(
        'status' => 'publish',
        'posts_per_page' => -1,
        'category_name' => (isset($cat)) ? $cat : '',
        'date_query' => array(
            array(
                'year'  => (isset($year)) ? $year : '',
                'month' => (isset($month)) ? $month : '',
                'day'   => (isset($day)) ? $day : '',
            ),
        ),
    );
    
    $q = new WP_Query($args);
    
    $html = sprintf("");
    if($q->found_posts > 0) :

    $cat_id = get_cat_ID($cat);
    $cat_link = get_category_link($cat_id);

    $html .= sprintf('<div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="category-news-bar">
                            <a href="%s"><h3>%s</h3>
                            <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">', $cat_link, $cat);
            while($q->have_posts()): $q->the_post();
                $id = get_the_ID();
                $title = get_the_title();
                $date = get_the_date('F j, Y');
                $location=get_post_meta( "dp_w_location", true );
                $the_post_cover = get_the_post_thumbnail($id, '', array('class'=> 'img-fluid', 'alt'=> 'DainikPurbokone'));
            
                $html.= sprintf('<div class="col-lg-6 col-sm-6 mb-2">
                        <div class="single-news">');
                    if($q->current_post <=3 ):
                        $html .= sprintf('<div class="single-news-img">
                                    <a href="%s">%s</a>
                                    <div class="single-news-img-date-time">
                                        <p class="single-date-time">%s</p>
                                        <p class="single-division">%s</p>
                                    </div>
                                </div>
                                <div class="single-news-heding">
                                    <a href="%s">
                                        <h6>%s</h6>
                                    </a>
                                </div>',get_permalink(), $the_post_cover, $date, $location, get_permalink(), $title);          
                        else:
                            $html .= sprintf('<a href="%s">%s</a>', get_permalink(), $title);
                        endif;
                $html .= sprintf('</div></div>');        
            endwhile;
        wp_reset_postdata();
    $html .= sprintf('</div></div>');    
    endif;

    return $html;

}
add_shortcode('date_news', 'dpkone_dateWiseQuery');

function dpkone_archive($attr){

    $today = getdate();
    $default = array(
        'year'  => $today['year'],
        'month' => $today['mon'],
        'day'   => $today['mday'],
    );

    extract( shortcode_atts( $default, $attr, 'archive_news' ) );
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    
    $args = array(
        'status' => 'publish',
        'posts_per_page' => 10,
        'paged'          => $paged,
        'date_query' => array(
            array(
                'year'  => (isset($year)) ? $year : '',
                'month' => (isset($month)) ? $month : '',
                'day'   => (isset($day)) ? $day : '',
            )
        ),
    );
    
    $q = new WP_Query($args);

    $html = "";    
    if($q->have_posts()) :

    $html .= sprintf('<div class="article">');

    while($q->have_posts()): $q->the_post();
        $id = get_the_ID();

        $title = get_the_title();
        $permalink = get_permalink();
        $author = get_the_author();
        $content = wp_trim_words(get_the_content(),25,'');
        $date = get_the_date('F j, Y');
        $location = get_post_meta( $id, "dp_w_location", true );

        $the_post_cover = get_the_post_thumbnail($id, '', array('class'=> 'img-fluid', 'alt'=> 'DainikPurbokone'));

        $html .= sprintf('<div class="single-article">
                            <div class="left_image_article">
                                <div class="left_image_holder">
                                    <div class="image_holder">
                                        <a href="%s">%s</a>
                                    </div>
                                </div>

                            <div class="right_content_holder">
                                <div class="title_time_author_holder">
                                    <h2 class="title_holder">
                                        <a href="%s">
                                            <span class="artitle_title">%s</span>
                                        </a>
                                    </h2>

                                    <div class="author_time_holder">
                                        <div class="author_holder"><span class="author">
                                            <i class="fa fa-user"></i>%s</span>
                                        </div>
                                        <div class="time_info">
                                            <span class="time">প্রকাশিত : %s</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="summery">
                                    <a href="%s">%s</a>
                                </div>
                            </div>
                        </div>
                    <div class="article_bottom">
                        <div class="bottom_info">
                            </div>
                                <a class="more" title="বিস্তারিত" href="%s"><span> <i class="icofont-rounded-double-right"></i>
                                    </span>
                                </a>
                        </div>
                    </div>',$permalink,$the_post_cover,$permalink,$title,$author,$date,$permalink,$content,$permalink);
        
    endwhile;
    $html .= sprintf('</div>');
    $html .= sprintf('<div class="pagination">');
    $html .= paginate_links();
    $html .= sprintf('</div>');
    endif;
    return $html;
}
add_shortcode('archive_news','dpkone_archive');