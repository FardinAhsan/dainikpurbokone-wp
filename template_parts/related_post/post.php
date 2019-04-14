<div class="col-lg-12">
<div class="single-news">
    <div class="single-news-img">
        <a href="<?php the_permalink()?>"><?php the_post_thumbnail('', array('class'=>'img-fluid', 'alt'=> 'news-image'))?></a>
        <div class="single-news-img-date-time">
            <p class="single-date-time"><a href="<?php echo esc_url(get_day_link(false, false, false)); ?>"><?php echo get_the_date();?></a></p>
            <p class="single-division">চট্টগ্রাম</p>
        </div>
    </div>
    <div class="single-news-heding">
        <a href="<?php the_permalink()?>">
            <h6><?php the_title()?></h6>
        </a>
    </div>
</div>
</div>