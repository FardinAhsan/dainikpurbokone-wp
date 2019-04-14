<?php get_header(); ?>



<div class="home-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="category-news">
                    <div class="row mb-2">
                        <div class="col-lg-12">
                        <h2 class="display-5">
                            সংবাদ আর্কাইভ : 
                            <?php 
                                $converter = new LanguageConverter();
                                if(is_year()){
                                    $year = get_query_var('year');
                                    echo $converter->en2bn($year);
                                } elseif(is_month()){
                                    $month = get_query_var('monthnum');
                                    $dateObj = DateTime::createFromFormat("!m", $month);
                                    $monthName = $dateObj->format("F");
                                    echo $converter->en2bn($monthName) ." ". $converter->en2bn($year);
                                }elseif(is_day()){
                                    $year = get_query_var('year');
                                    $month = get_query_var('monthnum');
                                    $day = get_query_var('day');
                                    $dateObj = DateTime::createFromFormat("!m", $month);
                                    $monthName = $dateObj->format("F");
                                    echo $converter->en2bn($monthName) ." ". $converter->en2bn($day).", ". $converter->en2bn($year);
                                }
                            ?>
                        </h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            echo do_shortcode("[archive_news year='{$year}' month='{$month}' day='{$day}']");
                        ?>
                    </div>    
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>












<?php get_footer(); 