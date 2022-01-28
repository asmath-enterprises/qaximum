<?php get_header();?>
<section class="page-title"
	style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/background/bg-17.jpg);">
	<div class="auto-container">
		<div class="content-box">
			<div class="content-wrapper">
				<div class="title">
					<h1><?php the_title();?></h1>
				</div>
				<ul class="bread-crumb clearfix">
					<li><a href="http://localhost/wordpress/">Home</a></li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php 
//Monthly package one
$packages=get_field('packages_section_heading','option');
 $package_offertext=get_field('package_offer_text','option');
 $heading=get_field('pack_one','option');
 $pricesymbol=get_field('price_symbol','option');
 $priceone=get_field('price_one','option');
 $priceformooranone=get_field('price_for_mo_or_an_one','option');
 $packagelabeltextone=get_field('package_label_text_one','option');
 $packagesparaone=get_field('packages_para_one','option');
 
 //Monthly package Two
 $heading2=get_field('pack_two','option');
 $pricesymbol2=get_field('price_symbol_two','option');
 $price2=get_field('price_two','option');
 $priceformooran2=get_field('price_for_mo_or_an_two','option');
 $packagelabeltext2=get_field('package_label_text_two','option');
 $packagespara2=get_field('packages_para_two','option');
 
  //Monthly package Three
 $heading3=get_field('pack_three','option');
 $pricesymbol3=get_field('price_symbol_three','option');
 $price3=get_field('price_three','option');
 $priceformooran3=get_field('price_for_mo_or_an_three','option');
 $packagelabeltext3=get_field('package_label_text_three','option');
 $packagespara3=get_field('packages_para_three','option');

 //Annualy package one
$package_offertexta=get_field('package_offer_text.','option');
$headinga=get_field('pack_one.','option');
$pricesymbola=get_field('price_symbol.','option');
$priceonea=get_field('price_one.','option');
$priceformooranonea=get_field('price_for_mo_or_an_one.','option');
$packagelabeltextonea=get_field('package_label_text_one.','option');
$packagesparaonea=get_field('packages_para_one.','option');

//Annualy package Two
$heading2a=get_field('pack_two.','option');
$pricesymbol2a=get_field('price_symbol_two.','option');
$price2a=get_field('price_two.','option');
$priceformooran2a=get_field('price_for_mo_or_an_two.','option');
$packagelabeltext2a=get_field('package_label_text_two.','option');
$packagespara2a=get_field('packages_para_two.','option');

 //Annualy package Three
$heading3a=get_field('pack_three.','option');
$pricesymbol3a=get_field('price_symbol_three.','option');
$price3a=get_field('price_three.','option');
$priceformooran3a=get_field('price_for_mo_or_an_three.','option');
$packagelabeltext3a=get_field('package_label_text_three.','option');
$packagespara3a=get_field('packages_para_three.','option');
 ?>
<section class="pricing-section" style="padding: 0px;
    margin-top: -35px;margin-bottom: 100px;">
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
                                                <span><?php echo $pricesymbol ?></span><?php echo $priceone ?><sub><?php echo $priceformooranone; ?></sub>
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
                                                <span><?php echo $pricesymbol2 ?></span><?php echo $price2 ?><sub><?php echo $priceformooran2; ?></sub>
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
                                                <span><?php echo $pricesymbol3 ?></span><?php echo $price2 ?><sub><?php echo $priceformooran2; ?></sub>
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
                                                <span><?php echo $pricesymbola ?></span><?php echo $priceonea ?><sub><?php echo $priceformooranonea; ?></sub>
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
                                                <span><?php echo $pricesymbol2a?></span><?php echo $price2a ?><sub><?php echo $priceformooran2a; ?></sub>
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
                                                <span><?php echo $pricesymbol3a ?></span><?php echo $price2 ?><sub><?php echo $priceformooran2a; ?></sub>
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