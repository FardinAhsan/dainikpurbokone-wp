<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="thin_topbar"></div>

    <!-- Preloader -->
   <!-- <div id="preloader">
        <div id="preloader-center">
            <div id="preloader-center-block">
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
                <div class="anim"></div>
            </div>
        </div>
    </div>  -->
    <!-- End Preloader -->
    <div class="headerTopBar fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <p class="top_date"><i class="fas fa-map-marker-alt"></i> চট্টগ্রাম <i class="icofont-ui-calendar"></i> <?php echo do_shortcode('[bangla_day]'); ?>, <?php echo do_shortcode('[english_date]'); ?> | <?php echo do_shortcode('[bangla_date]'); ?></p>
                </div>
                <div class="col-lg-5"></div>
                <div class="col-lg-2 col-md-4">
                    <ul class="top_social_bar">
                        <li><a class="fb" href="" targer="_blank"><img src="<?php echo get_theme_file_uri('assets/img/insta.png'); ?>"></a></li>
                        <li><a class="yt" href="" targer="_blank"><i class="icofont-youtube-play"></i></a></li>
                        <li><a class="twit" href="" targer="_blank"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a class="insta" href="" targer="_blank"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="headerMiddleBar fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 logo-sm">
                    <div class="navbar-brand logoBar">
                    <?php
                    if (has_custom_logo()) :
                        if (function_exists(the_custom_logo())) :
                        the_custom_logo();
                    endif;
                    ?>
					<?php else : ?>

                        <a href="<?php echo esc_url(site_url('/')); ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>

                    <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="addVertise">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/addvertise.png" alt="Dainik Purbokone" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo do_shortcode('[newsticker]'); ?>

    <nav class="headerNavMenu fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                
                <?php                
                    wp_nav_menu([
                        'theme_location' => 'header_nav',
                        'container' => 'div',
                        'container_id' => 'headerNav',
                        'container_class' => 'top_header_menu',
                    ]);
                ?>                

                
                    <!-- <div class="nav_container">
                        <ul class="menu_container">
                            <li class="main_page">
                                <a href="index.html">
                                    <i class="fas fa-home home_icon"></i>
                                    মূলপাতা
                                </a>
                            </li>
                            <li>
                                <a href="">জাতীয় জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয় জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li>
                                <a href="">জাতীয়</a>
                            </li>
                            <li class="others_page">
                                <a href="">
                                    অন্যান্য বিভাগ
                                    <i class="fas fa-caret-down caret_icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </nav>