<?php
get_header();
$term = get_the_terms($post->ID, 'category');
?>

<div class="category-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 my-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb"><?php custom_breadcrumb();?></div>
                        <div class="category-page-heading">
                            <h2><?php echo $term[0]->name; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $arr = array(
                            'status'=>'publish',
                            'post_type'=>'post',
                            'category_name'=>$term[0]->slug,
                            'posts_per_page'=> -1,
                            'order'=>'DESC'
                        );

                    $q = new WP_Query($arr);

                        if ($q->have_posts()){

                            $post_count=0;

                            while ($q->have_posts()): $q->the_post(); $post_count++;

                                $location = get_post_meta( get_the_ID(), "dp_w_location", true );

                                if ($post_count==1){?>
                                    <div class="col-lg-12 col-sm-12 col-12 my-2">
                                        <div class="category-page-first-news mb-5">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="category-page-first-news-image">
                                                        <a href="<?php the_permalink()?>">
                                                            <?php the_post_thumbnail('', array(
                                                                'class' => 'img-fluid',
                                                                'alt' => 'news Image'
                                                            )); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="category-page-first-news-heading mb-2">
                                                        <a href="<?php the_permalink()?>"><h4><?php the_title()?></h4></a>
                                                    </div>
                                                    <div class="first-news-content">
                                                        <?php the_excerpt();?>
                                                    </div>
                                                    <div class="category-first-news-meta-info">
                                                        <p class="first-news-date"><?php echo get_the_date(); ?>, <?php echo $location; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } else{ ?>
                                        <div class="col-lg-4 col-sm-6 col-12 my-2">
                                            <div class="category-page-news">
                                                <div class="category-page-news-image">
                                                    <a href="<?php the_permalink()?>">
                                                        <?php the_post_thumbnail('', array(
                                                            'class' => 'img-fluid',
                                                            'alt' => 'news Image'
                                                        )); ?>
                                                    </a>
                                                </div>
                                                <div class="category-news-meta-info">
                                                    <p class="category-news-date"><?php echo get_the_date();?></p>
                                                    <p class="category-news-location"><?php echo $location; ?></p>
                                                </div>
                                                <div class="category-page-news-heading">
                                                    <a href="<?php the_permalink()?>"><h4><?php the_title()?></h4></a>
                                                </div>
                                            </div>
                                        </div>


                                <?php }


                            endwhile;

                            wp_reset_postdata();
                        }else{
                            echo "<h3>There is no Content In this Category</h3>";
                        }

                    ?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>

