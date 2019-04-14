<?php 
    get_header();
    $term = get_the_terms($post->ID, 'category');
?>
    <div class="home-page">
        <div class="container">
            <div class="row">
                <!-- main content -->
                <div class="col-lg-9 my-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb"><?php custom_breadcrumb();?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                            <div class="single-page-news">
                            <?php
                                 customSetPostViews( get_the_ID() );//single.php
                            
                                 $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );

                            if(have_posts()):
                                while(have_posts()): the_post();

                                $converter = new LanguageConverter();
                                $date=$converter->en2bn(get_the_date());
                            ?>
                                <div class="news-content">
                                    <div class="news-content-thumb">
                                        <!-- <img class="" src="assets/images/1962880_844921348911011_8092017203188329922_n.jpg"
                                            alt="news_image"> -->
                                            <?php
                                                the_post_thumbnail();
                                            ?>
                                        <div class="img-date-repoter">
                                            <p class="date-time"><?php echo $date?></p>
                                            <p class="repoter">Fardin</p>
                                        </div>
                                    </div>
                                    <h2><?php the_title();?></h2>
                                    <p>
                                        <?php
                                            the_content();
                                        ?>
                                    </p>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
                                _e("no posts found");
                            endif;
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="social-medias">
                                <h4>শেয়ার করুন :</h4>
                                <ul>
                                    <li><a href="https://www.facebook.com" class="btn btn-circle btn-outline-primary" data-toggle="tooltip"
                                            data-placement="top" title="Click To Share On Facebook">
                                            <i class="fab fa-facebook" style="font-size: 25px"></i>
                                        </a></li>
                                    <li><a href="https://www.youtube.com" class="btn btn-circle btn-outline-primary" data-toggle="tooltip"
                                            data-placement="top" title="Click To Share On Youtube">
                                            <i class="fab fa-twitter" style="font-size: 25px"></i>
                                        </a></li>
                                    <li><a href="https://plus.google.com" class="btn btn-circle btn-outline-primary" data-toggle="tooltip"
                                            data-placement="top" title="Click To Share On Google">
                                            <i class="fab fa-google-plus-g" style="font-size: 25px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- related post -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="related-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="related-post-title">
                                            <h4>সম্পর্কিত পোস্ট</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-2">
                                    <div id="all_related_posts" class="owl-carousel owl-theme">
                                    <?php
                                        $args = array(
                                            "post_type" => "post",
                                            "status"=>"publish",
                                            "category_name" => $term[0]->slug,
                                            "posts_per_page" => -1,
                                        );
                                        $q = new WP_Query($args);

                                    if ($q->have_posts()) :
                                        while ($q->have_posts()) : $q->the_post();
                                    ?>
                                        
                                            <div class="single-news">
                                                <div class="single-news-img">
                                                    <a href="<?php esc_url(the_permalink()); ?>">
                                                        <img src="<?php the_post_thumbnail_url(); ?>"
                                                            class="img-fluid news-img" alt="<?php get_bloginfo('name'); ?>">
                                                        
                                                    </a>
                                                    <div class="single-news-img-date-time">
                                                        <p class="single-date-time"><?php the_date(); ?></p>
                                                        <p class="single-division"><?php get_post_meta(get_the_ID(),'dp_w_location',true); ?></p>
                                                    </div>
                                                </div>
                                                <div class="single-news-heding">
                                                    <a href="<?php esc_url(the_permalink()); ?>">
                                                        <h6><?php the_title()?></h6>
                                                    </a>
                                                </div>
                                            </div>
                                       
                                    <?php
                                        
                                        endwhile;
                                        wp_reset_postdata();
                                    
                                    else :
                                        _e("<h2>no posts found</h2>");
                                    endif;
                                    ?>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>