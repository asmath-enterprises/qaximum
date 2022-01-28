<?php get_header();?>

<?php $Home = get_field('top_slider');?>
<!-- Banner Section -->
<section class="banner-section style-one">
    <div class="banner-carousel theme_carousel owl-theme owl-carousel"
        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
        <!-- Slide Item -->
        <div class="slide-item">
            <?php
            $sliderimages = get_field('top_slider');
            if( $sliderimages ): ?>
             <div class="image-layer lazy-image" data-bg="url('<?php echo esc_url( $sliderimages['slider_image_1']['url'] ); ?>')"></div>
            <?php endif; ?>

            <div class="auto-container">
                <div class="content-box justify-content-end">
                    <div>
                        <h2><?php echo $Home['slider_1_heading'];?></h2>
                        <div class="text"><?php echo $Home['slider_1_text'];?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <?php
            $sliderimages = get_field('top_slider');
            if( $sliderimages ): ?>
             <div class="image-layer lazy-image" data-bg="url('<?php echo esc_url( $sliderimages['slider_image_2']['url'] ); ?>')"></div>

            <?php endif; ?>


            <div class="auto-container">
                <div class="content-box text-center style-two">
                    <div>
                        <h3><?php echo $Home['slider_2_heading'];?></h3>
                        <h2><?php echo $Home['slider_2_text'];?></h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <?php
            $sliderimages = get_field('top_slider');
            if( $sliderimages ): ?>
             <div class="image-layer lazy-image" data-bg="url('<?php echo esc_url( $sliderimages['slider_image_3']['url'] ); ?>')"></div>
            <?php endif; ?>

            <div class="auto-container">
                <div class="content-box">
                    <div>
                        <h2><?php echo $Home['slider_3_heading'];?></h2>
                        <div class="text"><?php echo $Home['slider_3_text'];?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- Features Section -->
<?php $Home = get_field('features_section');?>
<section class="features-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2><?php the_field('feature_section_heading'); ?></h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row">

            <?php if( have_rows('feature_section_block') ):?>

            <?php while( have_rows('feature_section_block') ) : the_row();

            $featureimage = get_sub_field('image');?>
            <div class="col-lg-4 feature-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <?php if( !empty( $featureimage ) ): ?>
                    <div class="image">
                        <div class="icon"><span class="flaticon-career"></span></div>
                        <img class="lazy-image owl-lazy" src="<?php echo esc_url($featureimage['url']); ?>" />
                    </div>
                    <?php endif; ?>
                    <div class="content">
                        <h5><?php the_sub_field('heading'); ?></h5>
                        <h4><?php the_sub_field('text'); ?></h4>
                    </div>
                    <div class="overlay">
                        <div class="content">
                            <h5><?php the_sub_field('heading'); ?></h5>
                            <h4><?php the_sub_field('text'); ?></h4>
                        </div>
                        <div class="text" style="background-repeat: no-repeat;background-size: cover;background-image: url(<?php echo esc_url($featureimage['url']); ?>);">
                            <p><?php the_sub_field('para'); ?></p>

                            <div class="link-btn"><a href="<?php the_sub_field('link.'); ?>"><i
                                        class="flaticon-right-arrow"></i></a></div>

                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
        <div class="bottom-content text-center">
            <div class="space"><?php the_field('feature_section_para'); ?></div>
        </div>
    </div>
</section>

<!-- About Section -->
<?php $topimage=get_field('top_image','option');
 $bottomimage=get_field('bottom_image','option');
 $heading=get_field('heading','option');
 $content=get_field('content','option');
 $signature=get_field('signature_image','option');
 $authorname=get_field('author_name','option');
 $authorposition=get_field('author_position','option');


 ?>
<section class="about-section">
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
<!-- Funfacts Section -->
<?php $Home = get_field('fact_section');?>
<section class="funfacts-section">
    <div class="pattern"
        style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/shape/pattern-2.png);">
    </div>
    <div class="auto-container">
        <!-- Fact Counter -->
        <div class="fact-counter">
            <div class="row">
                <!--Column-->
                <div class="column counter-column col-lg-4">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon-box">
                                <div class="icon">
                                    <?php
                                    $aboutimages = get_field('fact_section');
                                    if( $aboutimages ): ?>
                                    <img class="lazy-image owl-lazy"
                                        src="<?php echo esc_url( $aboutimages['block_1_icon']['url'] ); ?>"
                                        alt="<?php echo esc_attr( $aboutimages['block_1_icon']['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="counter-title"><?php echo $Home['block_1_title'];?></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000"
                                    data-stop="<?php echo $Home['block_1_counter'];?>">0</span><span>K</span>
                            </div>
                            <div class="text"><?php echo $Home['block_1_text'];?></div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-lg-4">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon-box">
                                <div class="icon">
                                    <?php
                                    $aboutimages = get_field('fact_section');
                                    if( $aboutimages ): ?>
                                    <img class="lazy-image owl-lazy"
                                        src="<?php echo esc_url( $aboutimages['block_2_icon']['url'] ); ?>"
                                        alt="<?php echo esc_attr( $aboutimages['block_2_icon']['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="counter-title"><?php echo $Home['block_2_title'];?></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000"
                                    data-stop="<?php echo $Home['block_2_counter'];?>">0</span><span>+</span>
                            </div>
                            <div class="text"><?php echo $Home['block_2_text'];?></div>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="column counter-column col-lg-4">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon-box">
                                <div class="icon">
                                    <?php
                                $aboutimages = get_field('fact_section');
                                if( $aboutimages ): ?>

                                    <img class="lazy-image owl-lazy"
                                        src="<?php echo esc_url( $aboutimages['block_3_icon']['url'] ); ?>"
                                        alt="<?php echo esc_attr( $aboutimages['block_3_icon']['alt'] ); ?>" />

                                    <?php endif; ?>
                                </div>
                                <div class="counter-title"><?php echo $Home['block_3_title'];?></div>
                            </div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000"
                                    data-stop="<?php echo $Home['block_3_counter'];?>">0</span><span>%</span>
                            </div>
                            <div class="text"><?php echo $Home['block_3_text'];?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose us -->
<?php $Home = get_field('choose_us_section');?>
<section class="why-choose-us-section">
    <?php
    $sideimage = get_field('choose_us_section');
    if( $sideimage ): ?>
    <div class="side-image">
        <img class="lazy-image owl-lazy" src="<?php echo esc_url( $sideimage['side_image']['url'] ); ?>"
            alt="<?php echo esc_attr( $sideimage['side_image']['alt'] ); ?>" />
    </div>
    <?php endif; ?>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="sec-title light">
                    <h2><?php echo $Home['section_title'];?></h2>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>

                <ul>
                <?php
                if( have_rows('list') ):?>
                <?php while( have_rows('list') ) : the_row();
                $text = get_sub_field('list_title');
                $para = get_sub_field('list_para');
                ?>
                    <li class="single-feature-item">
                        <h5><?php echo $text;?></h5>
                        <span class="text"><?php echo $para;?></span>
                    </li>
                    <?php endwhile;?>
                    <?php endif;?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="consult-form">
                    <form action="https://qaximum.baboolsoft.com/thank-you/" method="POST" class="contact-form" >
                        <h2>Request for Our <br>Free Consultation</h2>
                        <div class="row clearfix">
                            <div class="col-md-6 form-group">
                                <input type="text" name="username" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-6 form-group">
                                <select class="selectpicker" name="subject">
                                    <?php if( have_rows('form_options','options') ):?>
                                    <?php while( have_rows('form_options','options') ) : the_row();
                                    $optns = get_sub_field('optionss','options');
                                    ?>
                                    <option value="<?php echo $optns;?>"><?php echo $optns;?></option>
                                    <?php endwhile;?>
                                    <?php endif;?>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea rows="6" name="comment" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="theme-btnn btn-style-new" type="submit" name="submit-form"><span
                                        class="btn-title">submit</span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- Clients Section -->
<?php if( have_rows('clients') ):?>
<section class="cases-section pb-0">
    <div class="sec-bg"
        style="background-image: url(<?php bloginfo('template_directory'); ?>./assets/images/background/bg-1.jpg);">
    </div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2><?php the_field('client_section'); ?></h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row">
            <?php while( have_rows('clients') ) : the_row();
            $image = get_sub_field('logo_image');?>
            <div class="col-lg-4 case-block-one">
                <div class="inner-box">
                    <div class="image">
                        <?php 
                            if( !empty( $image ) ): ?>
                        <img class="lazy-image owl-lazy" src="<?php echo esc_url($image['url']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="overlay">
                        <div class="content">
                            <h4><?php the_sub_field('logo_description'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <div class="col-lg-4 case-block-one">
                <div class="inner-box">
                    <div class="read-more-btn">
                        <?php $link = get_field('link');
                        if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>"><?php the_field('link_text'); ?></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <div class="testimonial-outer">
            <div class="testimonial-carousel">
                <div class="row m-0">
                    <div class="col-xl-6 p-0">
                        <!-- Swiper -->
                        <div class="swiper-container testimonial-thumbs">
                            <div class="swiper-wrapper">

                                <?php if( have_rows('testimonial_block') ):?>

                                <?php while( have_rows('testimonial_block') ) : the_row();

                                $testimage = get_sub_field('testimonial_image');?>

                                <?php if( !empty( $testimage ) ): ?>

                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="<?php echo esc_url($testimage['url']); ?>">
                                    </div>

                                </div>

                                <?php endif; ?>


                                <?php endwhile;?>

                                <?php endif; ?>




                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 p-0">
                        <div class="swiper-container testimonial-content wow fadeInUp" data-wow-delay="300ms"
                            style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg-2.jpg);">
                            <div class="swiper-wrapper">

                                <?php if( have_rows('testimonial_block') ):?>


                                <?php while( have_rows('testimonial_block') ) : the_row();?>

                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="icon"><span class="flaticon-blog"></span></div>
                                            <h4><?php the_sub_field('testimonial_heading'); ?></h4>
                                            <div class="text"><?php the_sub_field('testimonial_text'); ?></div>
                                            <div class="author-title"><?php the_sub_field('testimonial_author'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php endwhile;?>

                                <?php endif; ?>


                            </div>
                            <div class="swiper-nav-button">
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>
                                <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section -->
<?php 
//Monthly package one
$packages=get_field('packages_section_heading','option');
 $package_offertext=get_field('package_offer_text','option');
 $heading=get_field('pack_one','option');
 $priceone=get_field('price_one','option');
 $priceformooranone=get_field('price_for_mo_or_an_one','option');
 $packagelabeltextone=get_field('package_label_text_one','option');
 $packagesparaone=get_field('packages_para_one','option');
 
 //Monthly package Two
 $heading2=get_field('pack_two','option');
 $price2=get_field('price_two','option');
 $priceformooran2=get_field('price_for_mo_or_an_two','option');
 $packagelabeltext2=get_field('package_label_text_two','option');
 $packagespara2=get_field('packages_para_two','option');
 
  //Monthly package Three
 $heading3=get_field('pack_three','option');
 $price3=get_field('price_three','option');
 $priceformooran3=get_field('price_for_mo_or_an_three','option');
 $packagelabeltext3=get_field('package_label_text_three','option');
 $packagespara3=get_field('packages_para_three','option');

 //Annualy package one
$package_offertexta=get_field('package_offer_text.','option');
$headinga=get_field('pack_one.','option');
$priceonea=get_field('price_one.','option');
$priceformooranonea=get_field('price_for_mo_or_an_one.','option');
$packagelabeltextonea=get_field('package_label_text_one.','option');
$packagesparaonea=get_field('packages_para_one.','option');

//Annualy package Two
$heading2a=get_field('pack_two.','option');
$price2a=get_field('price_two.','option');
$priceformooran2a=get_field('price_for_mo_or_an_two.','option');
$packagelabeltext2a=get_field('package_label_text_two.','option');
$packagespara2a=get_field('packages_para_two.','option');

 //Annualy package Three
$heading3a=get_field('pack_three.','option');
$price3a=get_field('price_three.','option');
$priceformooran3a=get_field('price_for_mo_or_an_three.','option');
$packagelabeltext3a=get_field('package_label_text_three.','option');
$packagespara3a=get_field('packages_para_three.','option');
 ?>
<section class="pricing-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2><?php echo $packages ?></h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="text-center">
            <div class="pricing-btn">
                <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="price-tab-one-area" data-toggle="tab" href="#price-tab-one"
                            role="tab" aria-controls="price-tab-one" aria-selected="true">Monthly
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="price-tab-two-area" data-toggle="tab" href="#price-tab-two" role="tab"
                            aria-controls="price-tab-two" aria-selected="false">
                            Annually
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pricing-content">
            <!-- Tab panes -->
            <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                <div class="tab-pane fadeInUp animated active" id="price-tab-one" role="tabpanel"
                    aria-labelledby="price-tab-one">
                    <h3><?php echo $package_offertext ?></h3>
                    <div class="wrapper-box">
                        <div class="row m-0">
                            <div class="col-lg-4 pricing-block animated fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <!-- pack 1 -->
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $heading ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $priceone ?><sub><?php echo $priceformooranone; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltextone; ?></h5>
                                        <h4><?php echo $packagesparaone; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_one','option') ):?>
                                            <?php while( have_rows('packages_list_one','option') ) : the_row();
                                            $packagelist1 = get_sub_field('packages_list_1','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist1;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                        <div class="link-btn">

                                            <?php 
                                            $packagelink1 = get_field('button_one_link','option');
                                            if( $packagelink1 ): ?>
                                            <a href="<?php echo esc_url( $packagelink1 ); ?>"
                                                style="margin-top:<?php the_field('button_one_spacing','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_one_text','option'); ?></span></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--pack 2-->

                            <div class="col-lg-4 pricing-block active animated fadeInLeft" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $heading2 ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $price2 ?><sub><?php echo $priceformooran2; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltext2; ?></h5>
                                        <h4><?php echo $packagespara2; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_two','option') ):?>
                                            <?php while( have_rows('packages_list_two','option') ) : the_row();
                                            $packagelist2 = get_sub_field('packages_list_2','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist2;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                        <div class="link-btn">

                                            <?php 
                                            $packagelink2 = get_field('button_two_link','option');
                                            if( $packagelink2 ): ?>
                                            <a href="<?php echo esc_url( $packagelink2 ); ?>"
                                                style="margin-top:<?php the_field('button_two_spacing','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_two_text','option'); ?></span></a>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--pack 3-->


                            <div class="col-lg-4 pricing-block animated fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $heading3 ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $price2 ?><sub><?php echo $priceformooran2; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltext2; ?></h5>
                                        <h4><?php echo $packagespara3; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_three','option') ):?>
                                            <?php while( have_rows('packages_list_three','option') ) : the_row();
                                            $packagelist3 = get_sub_field('packages_list_3','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist3;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                        <div class="link-btn">

                                            <?php 
                                          $packagelink3 = get_field('button_two_link','option');
                                            if( $packagelink3 ): ?>
                                            <a href="<?php echo esc_url( $packagelink3 ); ?>"
                                                style="margin-top:<?php the_field('button_three_spacing','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_three_text','option'); ?></span></a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fadeInUp animated" id="price-tab-two" role="tabpanel"
                    aria-labelledby="price-tab-two">
                    <h3><?php echo $package_offertexta ?></h3>
                    <div class="wrapper-box">
                        <div class="row m-0">
                            <!--pack 1-->

                            <div class="col-lg-4 pricing-block animated fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $headinga ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $priceonea ?><sub><?php echo $priceformooranonea; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltextonea; ?></h5>
                                        <h4><?php echo $packagesparaonea; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_one.','option') ):?>
                                            <?php while( have_rows('packages_list_one.','option') ) : the_row();
                                            $packagelist1a = get_sub_field('packages_list_1','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist1a;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                        <div class="link-btn">

                                            <?php 
                                            $packagelink1a = get_field('button_one_link.','option');
                                            if( $packagelink1a ): ?>
                                            <a href="<?php echo esc_url( $packagelink1a ); ?>"
                                                style="margin-top:<?php the_field('button_one_spacing.','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_one_text.','option'); ?></span></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--pack 2-->

                            <div class="col-lg-4 pricing-block active animated fadeInRight" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $heading2a ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $price2a ?><sub><?php echo $priceformooran2a; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltext2a; ?></h5>
                                        <h4><?php echo $packagespara2a; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_two.','option') ):?>
                                            <?php while( have_rows('packages_list_two.','option') ) : the_row();
                                            $packagelist2a = get_sub_field('packages_list_2','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist2a;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                        <div class="link-btn">

                                            <?php 
                                            $packagelink2a = get_field('button_two_link','option');
                                            if( $packagelink2a ): ?>
                                            <a href="<?php echo esc_url( $packagelink2a); ?>"
                                                style="margin-top:<?php the_field('button_two_spacing.','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_two_text.','option'); ?></span></a>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--pack 3-->
                            <div class="col-lg-4 pricing-block animated fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1200ms">
                                <div class="inner-box">
                                    <div class="top-content">
                                        <div class="row m-0 justify-content-between">
                                            <div class="category"><?php echo $heading3a ?></div>
                                            <div class="price">
                                                <span>₹</span><?php echo $price2 ?><sub><?php echo $priceformooran2a; ?></sub>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><?php echo $packagelabeltext2a; ?></h5>
                                        <h4><?php echo $packagespara3a; ?></h4>
                                        <ul>
                                            <?php if( have_rows('packages_list_three.','option') ):?>
                                            <?php while( have_rows('packages_list_three.','option') ) : the_row();
                                            $packagelist3a = get_sub_field('packages_list_3','option');?>
                                            <li><i class="flaticon-tick"></i><?php echo $packagelist3a;?></li>
                                            <?php endwhile;?>
                                            <?php endif;?>
                                        </ul>
                                       <div class="link-btn">

                                            <?php 
                                          $packagelink3a = get_field('button_two_link.','option');
                                            if( $packagelink3 ): ?>
                                            <a href="<?php echo esc_url( $packagelink3a ); ?>"
                                                style="margin-top:<?php the_field('button_three_spacing.','option'); ?>px"
                                                class="theme-btn btn-style-two">
                                                <span
                                                    class="btn-title"><?php the_field('button_three_text.','option'); ?></span></a>
                                            <?php endif; ?>

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
</section>



<?php get_footer();?>