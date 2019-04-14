<?php get_header(); ?>

<div class="homepage_content">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-9">            
                <?php echo do_shortcode('[main_news]'); ?>
                <?php echo do_shortcode('[two_sides_news ]'); ?>


                
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="addVertise">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/addvertise.png" alt="Dainik Purbokone" class="img-fluid">
                        </div>                        
                    </div>
                </div>

                <?php echo do_shortcode('[two_sides_news cat_one="আন্তর্জাতিক" cat_two="অর্থ- বানিজ্য"]'); ?>                

                <div class="row">
                    <div class="cat-area">
                        <div class="title-before">
                            <nav class="title-area" id="firsttab">
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-cat-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                        খেলা
                                    </a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-cat-profile" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">
                                        ক্রিকেট
                                    </a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                    href="#nav-cat-contact" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">
                                        ফুটবল
                                    </a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-cat-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row my-3">
                                    <div class="col-lg-7">
                                        <div class="left-feed-content">
                                            <div class="overlay"></div>
                                            <div class="left-news-feed-thumb">
                                                <a href="">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                        alt="DainikPurbokone">
                                                </a>
                                            </div>

                                            <div class="left-news-feed-content">

                                                <h2 class="m-3">
                                                    <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, dolore!
                                                    </a>
                                                </h2>
                                                <span class="mx-3"><i class="far fa-clock mr-2"></i> 26 October 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="right-feed-content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-cat-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row my-3">
                                    <div class="col-lg-7">
                                        <div class="left-feed-content">
                                            <div class="overlay"></div>
                                            <div class="left-news-feed-thumb">
                                                <a href="">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                        alt="DainikPurbokone">
                                                </a>
                                            </div>

                                            <div class="left-news-feed-content">

                                                <h2 class="m-3">
                                                    <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, dolore!
                                                    </a>
                                                </h2>
                                                <span class="mx-3"><i class="far fa-clock mr-2"></i> 26 October 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="right-feed-content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-cat-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row my-3">
                                    <div class="col-lg-7">
                                        <div class="left-feed-content">
                                            <div class="overlay"></div>
                                            <div class="left-news-feed-thumb">
                                                <a href="">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                        alt="DainikPurbokone">
                                                </a>
                                            </div>

                                            <div class="left-news-feed-content">

                                                <h2 class="m-3">
                                                    <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, dolore!
                                                    </a>
                                                </h2>
                                                <span class="mx-3"><i class="far fa-clock mr-2"></i> 26 October 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="right-feed-content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <div class="right-news-feed-thumb">
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/20180901_154216.jpg"
                                                                alt="DainikPurbokone">
                                                        </a>
                                                    </div>
                                                    <div class="right-news-feed-content">
                                                        <a href="">
                                                            <h3 class="mt-1">শিক্ষিত ও সচেতন মায়েরাই পারে শিক্ষিত জাতি গঠনে ভূমিকা
                                                                রাখতে</h3>
                                                            <span><i class="far fa-clock mr-1"></i>26 October 2018</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer(); ?>