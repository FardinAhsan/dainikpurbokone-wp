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
            <p><a href="<?php echo esc_url(get_day_link()); ?>"><?php echo get_the_date();?></a></p>
        </div>
        <div class="category-page-news-heading">
            <a href="<?php the_permalink()?>"><h4><?php the_title()?></h4></a>
        </div>
    </div>
</div>