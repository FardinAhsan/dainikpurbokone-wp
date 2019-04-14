<?php get_header(); ?>

<!-- +++++++++++++++++++++++++++ HTML Code Start From Here ++++++++++++++++++++++++++++++++++ -->
    
    <div class="home-page">
        <div class="container">
            <div class="row">
                
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>

    <div class="img-gallary">
        <div class="container">
            <div class="gallary-header">
                <a href="">
                    <h3>ফটো গ্যালারি</h3>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 img-gallary-carousel">
                    <ul class="pgwSlideshow">
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li><a href="http://encoderitsolution.net">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                        <li>
                            <a href="http://en.wikipedia.org/wiki/Monaco">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/int3.jpg" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 image-pos">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                       
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                       
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fa fa-camera-retro"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="video-gallary">
        <div class="container">
            <div class="gallary-header">
                <a href="">
                    <h3>ভিডিও গ্যালারি</h3>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 img-gallary-carousel">
                    <ul class="pgwSlideshow">
                        <?php
                        foreach ($videoList->items as $item) { ?>
                        <li>
                            <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId?>" target="_blank">
                                <img src="<?php echo $item->snippet->thumbnails->high->url; ?>" alt="<?php get_bloginfo('name')?>">
                            </a>
                        </li>
                         <?php } ?>   
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 image-pos">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-height">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-height">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="left-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/GA-20180922091346.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২২ সেপ্টেম্বর, ২০১৮</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 gallary-margin gallary-height">
                            <div class="right-gallary">
                                <a href="">
                                    <i class="fab fa-youtube"></i>
                                    <img src="https://www.banglanews24.com/media/PhotoAlbum/2018September/album20180921101310.jpg"
                                        class="img-responsive" alt="দৈনিক পূর্বকোণ - চট্টগ্রামের দৈনিক">
                                    <p>২১ সেপ্টেম্বর ২০১৮</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<!-- +++++++++++++++++++++++++++ পরিবর্তনের কারিগর ++++++++++++++++++++++++++++++++++ -->

<?php
$apiKey = 'AIzaSyB-dvyToNij735-XnlTLEkmPBQG3lrzsis';
$poriborton_playlistId = 'PL-rxNniS1W0c5AtwJbXHoChrClnC30WcI';
$maxResults = 1;

$Dainikplaylist = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' . $poriborton_playlistId . '&maxResults=' . $maxResults . '&key=' . $apiKey . '&orderby=time'));
?>
 <!-- +++++++++++++++++++++++++++ গোলটেবিল আলোচনা ++++++++++++++++++++++++++++++++++ -->
<?php
$roundTable_playlistId = 'PL-rxNniS1W0c5AtwJbXHoChrClnC30WcI';

$Dainikplaylist = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' . $roundTable_playlistId . '&maxResults=' . $maxResults . '&key=' . $apiKey . '&orderby=time'));
?>

 <!-- +++++++++++++++++++++++++++ ALL Videos ++++++++++++++++++++++++++++++++++ -->
 <?php
$channelID = 'UCPczt8v8G_NtXh8vbTUOh6Q';
$MaxResults = 50;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=' . $channelID . '&maxResults=' . $MaxResults . '&key=' . $apiKey . ''));

?>

<?php
    echo "<pre>";
    print_r($videoList);
    echo "</pre>";
?>



    <?php 
        // $args = array(
        //     "type" => 'yearly',
        //     "format" => 'option',
        //     "show_post_count" => 1
        // );
        // printf('<select>');
        //     printf('<option>%s<option>', __('Select Day', 'epkone'));
        //     wp_get_archives($args); 
        // printf('</select>');

        // foreach ($Dainikplaylist->items as $item) {
        //     printf('<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=%s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', $item->snippet->playlistId);
        // }
    ?>

<?php get_footer(); ?>