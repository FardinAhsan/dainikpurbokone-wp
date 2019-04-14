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
                    <?php echo do_shortcode('[archive_news]');?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>

