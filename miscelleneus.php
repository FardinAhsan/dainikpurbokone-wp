    <div class="container">
        <div class="news_stickr_area">
            <div class="row">
                <div class="col-lg-2 col-sm-2">
                    <div class="top-news-heading trending">
                        <h3>সর্বশেষ: </h3>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9 no-padding sticky_news_bg">
                    <div class="owl-carousel owl-theme all-news" id="newStickr">
                    
                    <?php 
                    
                    $args = array(
                        'status' => 'publish',
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'order' => 'DESC',
                    );

                    $stickr_news = new WP_Query($args);

                    ?>
                    <?php if ($stickr_news->have_posts()) : ?>

                    <?php while ($stickr_news->have_posts()) : $stickr_news->the_post() ?>

                        <div class="stickr-news-item">
                            <a href="<?php esc_url(the_permalink()); ?>"><i class="icofont-rounded-double-right"></i>
                                <span> <?php esc_html__(the_title()); ?></span>
                            </a>
                        </div>

                    <?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>

                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

					<?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
        <div class="news_stickr_area">
            <div class="row">
                <div class="col-lg-2 col-sm-2">
                    <div class="top-news-heading trending">
                        <h3>সর্বশেষ: </h3>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9 no-padding sticky_news_bg">
                    <div class="owl-carousel owl-theme all-news" id="newStickr">
                    
                    <?php 
                    
                    $args = array(
                        'status' => 'publish',
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'order' => 'DESC',
                    );

                    $stickr_news = new WP_Query($args);

                    ?>
                    <?php if ($stickr_news->have_posts()) : ?>

                    <?php while ($stickr_news->have_posts()) : $stickr_news->the_post() ?>

                        <div class="stickr-news-item">
                            <a href="<?php esc_url(the_permalink()); ?>"><i class="icofont-rounded-double-right"></i>
                                <span> <?php esc_html__(the_title()); ?></span>
                            </a>
                        </div>

                    <?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>

                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

					<?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>