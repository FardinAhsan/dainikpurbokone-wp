<div class="col-lg-3 my-3 sidebar">
<div class="theiaStickySidebar">
<div class="purbokon-live-tv">
<div class="title live-tv-title">
<h3>পূর্বকোন লাইভ</h3>
</div>
<div class="live-tv-video-area mb-2">
<iframe src="https://www.youtube.com/embed/EqPtz5qN7HM" frameborder="0" allow="autoplay; encrypted-media"
    allowfullscreen=""></iframe>
</div>
</div>
<div class="epaper">
<img class="w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/epaper.jpg" alt="<?php echo get_bloginfo('name') ?>">
</div>
<div class="social-media">
<div class="social facebook-page">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=478846445961241&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-page" data-href="https://www.facebook.com/DailyPurbokone/" data-tabs="timeline" data-width="253px" data-height="250px" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DailyPurbokone/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DailyPurbokone/">Dainik Purbokone</a></blockquote></div>
</div>

<div class="social youtube">
    <div target="_blank" class="g-ytsubscribe" data-channelid="UCPczt8v8G_NtXh8vbTUOh6Q" data-layout="full" data-theme="default" data-count="default"></div>
</div>
</div>
<div class="add">
<img class="w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/addvertise.png" alt="dainik purbokone adds">
</div>
<div class="most-view-section">
<div class="nav_tab_head">
<span id="most_popular" class="tab">সর্বাধিক পঠিত</span>
<span id="recent" class="tab">সর্বশেষ</span>
</div>
<div class="tab_body">
<div id="most_popular_tab">

<?php
$args = array(
 'status'         => 'publish',
 'post_type'      => 'post',
 'meta_key'       => 'post_views_count ',
 'orderby'        => 'meta_value_num',
 'posts_per_page' => 5,
 'order'          => 'DESC',
);
$most_view_post = new WP_Query($args);
$converter      = new LanguageConverter();
if ($most_view_post->have_posts()):
 while ($most_view_post->have_posts()): $most_view_post->the_post();
  $date = " " . $converter->en2bn(get_the_date());
  ?>
				                                                                                <div class="latest_post">
				                                                                                    <a class="left" href="<?php the_permalink();?>">
				                                                                                        <?php
  $post_attr = array(
   'alt'   => get_the_title(),
   'class' => "media-object",
   'title' => 'দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক',
  );
  the_post_thumbnail('', $post_attr);
  ?>
				                                                                                    </a>
				                                                                                    <div class="right">
				                                                                                        <h4 class="right-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
				                                                                                        <div class="right-meta">
				                                                                                            <span class="entry-date">
				                                                                                            <i class="fas fa-calendar-alt"><?php echo $date; ?></i>
				                                                                                            </span>
				                                                                                        </div>
				                                                                                    </div>
				                                                                                </div>
				                                                                                <?php
 endwhile;
 wp_reset_postdata();
else:
 _e("no posts fonud");
endif;
?>
</div>
<div id="recent_tab">
<?php
$args = array(
 'status'         => 'publish',
 'post_type'      => 'post',
 'posts_per_page' => 5,
 'orderby'        => 'date',
 'order'          => 'DESC',
);
$recent = new WP_Query($args);
if ($recent->have_posts()):
 while ($recent->have_posts()): $recent->the_post();
  $date = " " . $converter->en2bn(get_the_date());

  ?>
				                                                                                    <div class="latest_post">
				                                                                                    <a class="left" href="<?php the_permalink();?>">
				                                                                                        <?php
  $post_thumbnail_attr = array(
   'alt'   => get_the_title(),
   'class' => "",
   'title' => 'দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক',
  );
  the_post_thumbnail('', $post_thumbnail_attr);
  ?>
				                                                                                    </a>
				                                                                                    <div class="right">
				                                                                                        <h4 class="right-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
				                                                                                        <div class="right-meta">
				                                                                                            <span class="entry-date">
				                                                                                            <i class="fas fa-calendar-alt"><?php echo $date; ?></i>
				                                                                                            </span>
				                                                                                        </div>
				                                                                                    </div>
				                                                                                </div>
				                                                                                <?php
 endwhile;
 wp_reset_postdata();
else:
 _e("no posts fonud");
endif;
?>
</div>
</div>

</div>


<div class="temperature">
<div class="title temperature-title">
<h3>অাজ‌কের তাপমাত্রা</h3>
</div>
<div class="temperature-content">
<?php
$jsonurl = "https://api.openweathermap.org/data/2.5/weather?id=1205733&appid=da9a5cb53c0305c4545c069e57f8308c";
$json    = file_get_contents($jsonurl);

$weather            = json_decode($json);
$kelvin             = $weather->main->temp;
$celcius            = $kelvin - 273.15;
$converter          = new LanguageConverter();
$current_temprature = $converter->en2bn($celcius);

?>
<h3><?php echo $current_temprature; ?> ডিগ্রি সেলসিয়াস</h3>
</div>
</div>
<div class="namaz-time">
<div class="title namaz-time-title">
<h3>নামাজের সময়</h3>
</div>
<div class="namaz-content">
<div class="sigle-namaz-content">
    <p><strong>ফজরঃ </strong>সকাল ৪ টা ২৮ মিনিট।</p>
</div>
<div class="sigle-namaz-content">
    <p><strong>যোহরঃ </strong>সকাল ১১ টা ৪৫ মিনিট।</p>
</div>
<div class="sigle-namaz-content">
    <p><strong>আসরঃ </strong>বিকাল ৪ টা ৭ মিনিট।</p>
</div>
<div class="sigle-namaz-content">
    <p><strong>মাগরিবঃ </strong>বিকাল ৫ টা ৪৯ মিনিট।</p>
</div>
<div class="sigle-namaz-content">
    <p><strong>এশাঃ </strong>সন্ধ্যা ৭ টা ১০ মিনিট।</p>
</div>
</div>
</div>
<div class="online-vote">
<div class="title online-vote-title">
<h3>অনলাইন জরিপ</h3>
</div>
<?php dynamic_sidebar('poll');?>
</div>
<div class="archive">
<div class="title archive-title">
<h3>আর্কাইভ</h3>
</div>
<div class="archive-content">
<form action="" method="post" enctype="multipart/form-data" id="dpkone_archive_filter">
    <div class="single-archive-content">
        <?php wp_nonce_field('date_archive', 'af'); ?>
    </div>
    <div class="single-archive-content">
        <select class="form-control form-control-sm" name="archive-year" id="archive-year">
            <option value="">বছর</option>
            <option value="2018" >২০১৮</option>
        </select>
    </div>
    <div class="single-archive-content">
        <select name="archive-month" id="archive-month" class="form-control form-control-sm">
            <option value="">মাস</option>
            <option value="1">জানুয়ারী</option>
            <option value="2">ফেব্রুয়ারী</option>
            <option value="3">মার্চ</option>
            <option value="4">এপ্রিল</option>
            <option value="5">মে</option>
            <option value="6">জুন</option>
            <option value="7">জুলাই</option>
            <option value="8">অগাস্ট</option>
            <option value="9">সেপ্টেম্বর</option>
            <option value="10">অক্টোবর</option>
            <option value="11">নভেম্বর</option>
            <option value="12">ডিসেম্বর</option>
        </select>
    </div>
    <div class="single-archive-content">
        <select class="form-control form-control-sm" name="archive-day" id="archive-day">
            <option value="">দিন</option>
            <option value="01"  >০১</option>
            <option value="02"  >০২</option>
            <option value="03"  >০৩</option>
            <option value="04"  >০৪</option>
            <option value="05"  >০৫</option>
            <option value="06"  >০৬</option>
            <option value="07"  >০৭</option>
            <option value="08"  >০৮</option>
            <option value="09"  >০৯</option>
            <option value="10"  >১০</option>
            <option value="11"  >১১</option>
            <option value="12"  >১২</option>
            <option value="13"  >১৩</option>
            <option value="14"  >১৪</option>
            <option value="15"  >১৫</option>
            <option value="16"  >১৬</option>
            <option value="17"  >১৭</option>
            <option value="18"  >১৮</option>
            <option value="19"  >১৯</option>
            <option value="20"  >২০</option>
            <option value="21"  >২১</option>
            <option value="22"  >২২</option>
            <option value="23"  >২৩</option>
            <option value="24"  >২৪</option>
            <option value="25"  >২৫</option>
            <option value="26"  >২৬</option>
            <option value="27"  >২৭</option>
            <option value="28"  >২৮</option>
            <option value="29"  >২৯</option>
            <option value="30"  >৩০</option>
            <option value="31"  >৩১</option>
        </select>
    </div>
    <input type="submit" class="btn btn-outline-secondary archive-btn" id="af_btn" value="দেখান">
</form>
</div>
</div>
</div>
</div>