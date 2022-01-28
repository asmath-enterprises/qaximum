<?php get_header();?>
<section class="page-title"
    style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg-17.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1><?php the_title();?></h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
        <!-- Page Title -->

        <!-- Portfolio Section -->
        <section class="portfolio-section">
            <div class="auto-container">
                <!--Sortable Galery-->
                <div class="sortable-masonry">
                    <!--Filter-->

                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter=".all">All Topics<span class="count">0</span></li>
                            <?php if( have_rows('menus') ):?>
                                            <?php while( have_rows('menus') ) : the_row();?>
                                             <li class="filter" data-role="button" data-filter=".<?php the_sub_field('menu_class_name'); ?>"> <?php the_sub_field('menu_name'); ?><span class="count">0</span></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                        </ul>
                    </div>

                    <div class="items-container row clearfix">
                        <!-- Case Block -->


                        <?php if( have_rows('cases') ):?>

<?php while( have_rows('cases') ) : the_row();

$blockimage = get_sub_field('block_images');?>
<div class="case-block-one masonry-item all <?php the_sub_field('class_name'); ?> col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">

        <?php if( !empty( $blockimage ) ): ?>
            <div class="image">
                                    <img src="<?php echo esc_url($blockimage['url']); ?>">
                                </div>

        <?php endif; ?>
        <div class="overlay">
                                    <div class="link-btn"><a href="<?php the_sub_field('link'); ?>"><i class="flaticon-right-arrow"></i></a></div>
                                    <div class="content">
                                        <h4><?php the_sub_field('heading'); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endwhile;?>

<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer();?>