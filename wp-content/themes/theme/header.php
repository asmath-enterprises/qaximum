<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php wp_head();?>
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "9useybi89n");
</script>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png"
        type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
    <div class="loader-wrap">
            <div class="preloader">
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        <!-- Main Header -->
        <header class="main-header header-style-one">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><?php the_custom_logo();?></div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img
                                    src="<?php bloginfo('template_directory'); ?>/assets/images/icons/icon-bar.png"
                                    alt=""></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <?php   wp_nav_menu( array( 
                                'theme_location'    => 'top-menu',
                                'depth'             =>  3,
                                'menu_class'        => 'top-bar',
                                 ) ); 
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <!--Logo-->
                               <div class="logo-box">
                            <div class="logo"><?php the_custom_logo();?></div>
                        </div>
                            <!--Nav Box-->
                            <div class="nav-outer clearfix">
                                <!--Mobile Navigation Toggler-->
                                <!--<div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt="">-->
                                <!--</div>-->

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                                <!-- Main Menu End-->

               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="https://qaximum.baboolsoft.com/"><img src="<?php bloginfo('template_directory');?>/assets/images/qaximum-white.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

 