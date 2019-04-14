<?php 

function eis_main_news_content($atts, $content){

    $defaults = array(
        'per_page' => -1,
        'order'          => 'DESC',
        'type'      => 'post',
        'cat_name'  => 'প্রধান খবর',
    );

    $data = shortcode_atts($defaults, $attr, 'main_news');

    $today = getdate();
    $q = new WP_Query(
        array(
            'posts_per_page'    => $data['per_page'],
            'order'             => $data['order'],
            'post_type'         => $data['type'],
            'category_name'     => $data['cat_name'],

            // 'date_query'        => array(
                // 'year'  => $today['year'],
                // 'month' => $today['mon'],
                // 'day'   => $today['mday'],
            // )
        ) 
    );

    $html = '';
    $html .= '<div class="row mb-2">
        <div class="col-lg-12">
            <div class="news_category_head fix">
                <a class="float-left" href="#">প্রধান খবর</a>                                    
            </div>
        </div>
    </div>
    <div class="row">';

        while ($q->have_posts()) : $q->the_post();

        $id = get_the_ID();
        $cats = get_the_category($id);

        $cat_name = $cats[0]->cat_name;
        $cat_id = get_cat_ID($cat_name);
        $cat_link = get_category_link( $cat_id );
        
        $title = get_the_title($id);
        $img = get_the_post_thumbnail( $id, 'full', array("class" => "img-fluid", 'alt' => $title ) );

        if(0 == $q->current_post ) :
        $html .= '<div class="col-lg-9">                                                                 
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="main_news main_news_relative ">                                    
                        <div class="main_news_thumb main_news_overlay">';
        $html .=              sprintf($img);
        $html .=        '</div><div class="main_news_content">';
        $html .=         sprintf('<h3 class="%s"><a href="%s">%s</a></h3>',esc_attr('main_news_title'), esc_url(get_permalink()), $title);
                            
        $html .=        '<p>';
        $html .=            sprintf('<span class="news_date">%s</span> ', esc_html(get_the_date()) );
        $html .=            '<span class="float-right">';
        $html .=                sprintf('<a href="%s">%s</a>', $cat_link, $cat_name);
        $html .=            '</span>
                        </p>
                       </div>
                    </div>                                
                </div>';

        elseif($q->current_post > 0 && $q->current_post < 4) :
        $html .=   '<div class="col-lg-4">
                    <div class="main_news">
                        <div class="main_news_thumb">';
        $html .=          sprintf($img);                                            
        $html .=        '</div>
                        <div class="main_news_content">';
        $html .=        '<p>';
        $html .=            sprintf('<span class="news_date">%s</span> ', esc_html(get_the_date()) );
        $html .=            '<span class="float-right">';
        $html .=                sprintf('<a href="%s">%s</a>', $cat_link, $cat_name);
        $html .=            '</span>
                        </p>';
        $html .=         sprintf('<h4 class="%s"><a href="%s">%s</a></h4>',esc_attr('main_news_title'), esc_url(get_permalink()), $title);
        $html .=      '</div>
                    </div>                                
                </div>';

        elseif(4 == $q->current_post) :
        $html .= '</div>
                </div>
            <div class="col-lg-3">
            <div class="row">';
        elseif($q->current_post > 3 && $q->current_post > 3 ):

        $html .=   '<div class="col-lg-12">
                    <div class="main_news">
                        <div class="main_news_thumb">';
        $html .=          sprintf($img);                                            
        $html .=        '</div>
                        <div class="main_news_content">';
        $html .=        '<p>';
        $html .=            sprintf('<span class="news_date">%s</span> ', esc_html(get_the_date()) );
        $html .=            '<span class="float-right">';
        $html .=                sprintf('<a href="%s">%s</a>', $cat_link, $cat_name);
        $html .=            '</span>';
        $html .=         sprintf('<h4 class="%s"><a href="%s">%s</a></h4>',esc_attr('main_news_title'), esc_url(get_permalink()), $title);
        $html .=                    '</p>
                        </div>
                    </div>                                
                </div>';

        endif; $q->wp_reset_postdata; endwhile;

        $html .= '</div>
            </div>
        </div>';

        return $html;
}
add_shortcode('main_news', 'eis_main_news_content');



function eis_two_sides_cat_news($attr, $content){    

        $defaults = array(
            'per_page'  => 4,
            'type'      => 'post',
            'cat_one'   => 'চট্টগ্রাম',
            'cat_two'   => 'জাতীয়'
        );

        $data = shortcode_atts( $defaults, $attr, 'two_sides_news' );

        $q = new WP_Query(array(
            'posts_per_page'    => $data['per_page'],
            'post_type'         => $data['type'],
            'category_name'     => $data['cat_one'],
        ));

        $cat_id = get_cat_ID($data['cat_one']);        
        $cat_link = get_category_link( $cat_id );

        $html = '';

        $html .='<div class="row mb-3">
                    <div class="col-lg-6">
                        <div class="row my-2">
                            <div class="col-lg-12 fix">                                
                                <div class="news_category_head fix">
                                    <a class="float-left" href="'.$cat_link.'">'. $data['cat_one'] .'</a>
                                    <a class="float-right" href="'.$cat_link.'"> আরোও <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">';
                while($q->have_posts()) : $q->the_post();
                    $id = get_the_ID();
                    $cats = get_the_category($id);
                    $cat_name = $cats[0]->cat_name;
                    $cat_id = get_cat_ID($cat_name);
                    $cat_link = get_category_link( $cat_id );
                    
                    $title = get_the_title($id);
                    $img = get_the_post_thumbnail( $id, 'full', array("class" => "img-fluid", 'alt' => $title ) );

                    $html .='<div class="col-lg-6 mb-4">
                                <div class="main_news cat_news ">
                                    <div class="main_news_thumb">';
                    $html .=           sprintf($img);
                    $html .=        '</div>
                                    <div class="main_news_content">                                       
                                        <p>';
                    $html .=                sprintf('<i class="icofont-clock-time"></i> <span class="news_date">%s</span> ', esc_html(get_the_date()) );
                    $html .=            '</p>';
                    $html .=            sprintf('<h4 class="%s"><a href="%s">%s</a></h4>',esc_attr("main_news_title"), esc_url(get_permalink()), $title);
                    $html .=        '</div>
                                </div>
                            </div>';                 
                endwhile;
                wp_reset_postdata();
        $html .= '</div>
                </div>';

        $qn = new WP_Query(array(
            'posts_per_page'    => $data['per_page'],
            'post_type'         => $data['type'],
            'category_name'     => $data['cat_two'],
        ));

        $cat_id_two = get_cat_ID($data['cat_two']);        
        $cat_link_two = get_category_link( $cat_id_two );

        $html .= '<div class="col-lg-6">
                    <div class="row my-2">
                        <div class="col-lg-12">
                            <div class="news_category_head fix">
                                <a class="float-left" href="'.$cat_link_two.'">'. $data['cat_two'] .'</a>
                                <a class="float-right" href="'.$cat_link_two.'"> আরোও <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>                        
                    <div class="row">';
        
        while($qn->have_posts()) : $qn->the_post();
            $id = get_the_ID();
            $cats = get_the_category($id);

            $cat_name = $cats[0]->cat_name;
            $cat_id = get_cat_ID($cat_name);
            $cat_link = get_category_link( $cat_id );
            
            $title = get_the_title($id);
            $img = get_the_post_thumbnail( $id, 'full', array("class" => "img-fluid", 'alt' => $title ) );

            $html .= '<div class="col-lg-6 mb-4">
                        <div class="main_news cat_news">
                            <div class="main_news_thumb">';
            $html .=        sprintf($img);
            $html .=       '</div>
                            <div class="main_news_content">                                        
                                <p>';
            $html .=            sprintf('<i class="icofont-clock-time"></i> <span class="news_date">%s</span> ', esc_html(get_the_date()) );
            $html .=        '</p>';
            $html .=            sprintf('<h4 class="%s"><a href="%s">%s</a></h4>',esc_attr("main_news_title"), esc_url(get_permalink()), $title);
            $html .=   '</div>
                    </div>
                </div>';                  
        endwhile;

        wp_reset_postdata();
        $html .= '</div>
            </div>
        </div>';
        return $html;

}
add_shortcode('two_sides_news', 'eis_two_sides_cat_news');



function eis_newsTicker($atts, $content){
    $defaults = array(
        'type' => 'post',
        'per_page' => -1,
        'order' => 'DESC',
    );
    
    $data = shortcode_atts($defaults, $atts, 'newsticker');

    $q = new WP_Query(array(
        'post_type'         => $data['type'],
        'posts_per_page'    => $data['per_page'],
        'order'             => $data['order'],
    ));

    $html = '';
    $html .= '<div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsticker_container fix">';

                    $html .= '<div class="newsticker_title float-left">';
                        $html .= sprintf('<h3 class="headline">%s</h3>', 'সর্বশেষ:');
                    $html .= '</div>';

                    $html .= '<div class="newsticker_content float-left">';
                        $html .= '<div class="TickerNews" id="T1">
                                    <div class="ti_wrapper">
                                        <div class="ti_slide">
                                            <div class="ti_content">';
                                    while($q->have_posts()) : $q->the_post();
                                        $html .= sprintf('<div class="ti_news"><a href="%s"><i class="icofont-rounded-double-right"></i> %s</a></div>', esc_url(get_permalink()) , esc_html(get_the_title()));
                                    endwhile;
                                $html .= '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    
    wp_reset_postdata();

    return $html;

}
add_shortcode('newsticker', 'eis_newsTicker');








function eis_category_tab_news($atts, $content){

    $defaults = array(
        'per_page'  => '5',
        'type'      => 'post',
        'order'     => 'DESC'
    );

    $data = shortcode_atts($defaults, $atts, 'tab_news');
    return $html;
}
add_shortcode('tab_news', 'eis_category_tab_news');