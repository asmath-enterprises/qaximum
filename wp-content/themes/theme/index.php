<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
<section class="sidebar-page-container">
	<div class="auto-container">
	
			<div class="inner-box">
				<div class="post-content">
					<?php the_content();?>
				</div>
			</div>

</section>


<?php endwhile; else : ?>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <div class="error-section">
            <div class="auto-container">
                <div class="text-center">
                    <div class="image" style="
    margin-top: 50px;
    margin-bottom: 50px;
"><img src="<?php bloginfo('template_directory');?>/assets/images/resource/404.png" alt=""></div>
                    <div class="content" >
                        <h1>Page is not found</h1>
                        <div class="text">We're not being able to find this page.</div>
                        <div class="link-btn" style="margin-bottom: 50px;"><a href="index.html" class="theme-btn btn-style-one"><span class="btn-title">BACK TO HOME</span></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php get_footer();?>