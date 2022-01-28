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

<!-- About Section-->
<?php $topimage=get_field('top_image','option');
 $bottomimage=get_field('bottom_image','option');
 $heading=get_field('heading','option');
 $content=get_field('content','option');
 $signature=get_field('signature_image','option');
 $authorname=get_field('author_name','option');
 $authorposition=get_field('author_position','option');


 ?>
<section class="about-section about-spacing">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-block">
                            <div class="image-one wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                <img class="lazy-image owl-lazy" src="<?php echo $topimage ?>"></div>
                            </div>
                            <div class="image-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image-box"><img class="lazy-image owl-lazy" src="<?php echo $bottomimage ?>"></div>
                            </div>
                            <div class="logo"><img src="<?php bloginfo('template_directory');?>/assets/images/icons/icon-12.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <h2><?php echo $heading ?></h2>
                            <div class="text-decoration">
                                <span class="left"></span>
                                <span class="right"></span>
                            </div>
                            <div class="text"><?php echo $content ?></div>
                        </div>
                        <div class="author-box">
                            <div class="signature"><img src="<?php echo $signature ?>" alt=""></div>
                            <div class="author-info">
                                <h4><?php echo $authorname ?></h4>
                                <h5><?php echo $authorposition ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Timeline Section -->
<?php $overview=get_field('overview__content','option');?>
<section class="timeline-section">
    <div class="sec-bg"
        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg-28.jpg);">
    </div>
    <div class="auto-container">
        <div class="sec-title text-center light">
            <h2><?php echo $overview;?></h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="wrapper-box">
            <ul class="timeline-block">
                
                
                
                                           <?php if( have_rows('overview','options') ):?>

<?php while( have_rows('overview','options') ) : the_row();
$dates = get_sub_field('date');
$titles = get_sub_field('title');
$contents = get_sub_field('content');?>
          <li>
                    <div class="shape"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/shape/shape-21.png" alt="">
                    </div>
                    <div class="date"><?php echo $dates;?></div>
                    <h4><?php echo $titles;?></h4>
                    <div class="text"><?php echo $contents;?></div>
                </li>

<?php endwhile;?>

<?php endif; ?>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer();?>