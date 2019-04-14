                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="news_category_head fix">
                            <a class="float-left" href="#">প্রধান খবর</a>                                    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $today = getdate();
                        $q = new WP_Query(
                            array(
                                'posts_per_page'    => -1,
                                'order'             => 'DESC',
                                'post_type'         => 'post',
                                'category_name'     => 'প্রধান খবর',
                                // 'date_query'        => array(
                                //     'year'  => $today['year'],
                                //     'month' => $today['mon'],
                                //     'day'   => $today['mday'],
                                // )
                            ) 
                        );

                        while ($q->have_posts()) : $q->the_post();
                    ?>
                    <?php if(0 == $q->current_post ) : ?>
                    <div class="col-lg-9">                                                                 
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="main_news main_news_relative ">                                    
                                    <div class="main_news_thumb main_news_overlay">
                                        <?php the_post_thumbnail('full', array("class" => "img-fluid thumbnail", 'alt' => 'Thumb Image of Main News Of Dainik Purbokone')); ?>
                                    </div>
                                    <div class="main_news_content">
                                        <?php the_title(sprintf('<h3 class="%s"><a href="%s">',  esc_attr("main_news_title"), esc_url(get_permalink())),'</a></h3>') ?>
                                        <p>
                                            <?php 
                                                echo sprintf('<span class="news_date"> <i class="icofont-clock-time"></i> %s</span> ', esc_html(get_the_date()) );
                                            ?>
                                            <span class="float-right">
                                                <?php the_category(', '); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                    <?php elseif($q->current_post > 0 && $q->current_post < 4) :?>
                            <div class="col-lg-4">
                                <div class="main_news">
                                    <div class="main_news_thumb">
                                        <?php the_post_thumbnail('', array("class" => "img-fluid thumbnail", 'alt' => 'Thumb Image of Main News Of Dainik Purbokone')); ?>
                                    </div>
                                    <div class="main_news_content">
                                        <?php the_title(sprintf('<h4 class="%s"><a href="%s">', esc_attr("main_news_title"), esc_url(get_permalink())), '</a></h4>' ); ?>
                                        <p>
                                            <?php 
                                                echo sprintf('<span class="float-left">%s</span> ', esc_html(get_the_date()) );
                                            ?>
                                            <span class="float-right">
                                                <?php the_category(', '); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php elseif(4 == $q->current_post) :?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                    <?php elseif($q->current_post > 3 && $q->current_post > 3 ): ?>
                            <div class="col-lg-12">
                                <div class="main_news">
                                    <div class="main_news_thumb">
                                        <?php the_post_thumbnail('', array("class" => "img-fluid thumbnail", 'alt' => 'Thumb Image of Main News Of Dainik Purbokone')); ?>
                                    </div>
                                    <div class="main_news_content">
                                        <?php the_title(sprintf('<h4 class="%s"><a href="%s">', esc_attr("main_news_title"), esc_url(get_permalink())), '</a></h4>' ); ?>
                                        <p>
                                            <?php 
                                                echo sprintf('<span class="float-left">%s</span> ', esc_html(get_the_date()) );
                                            ?>
                                            <span class="float-right">
                                                <?php the_category(', '); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                    <?php endif; $q->wp_reset_postdata; endwhile; ?>
                        </div>
                    </div>
                </div>