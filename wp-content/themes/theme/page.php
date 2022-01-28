<?php get_header(); ?>
<section class="page-title"
	style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/background/bg-17.jpg);">
	<div class="auto-container">
		<div class="content-box">
			<div class="content-wrapper">
				<div class="title">
					<h1><?php the_title();?></h1>
				</div>
				<ul class="bread-crumb clearfix">
					<li><a href="http://test.baboolsoft.com/home/">Home</a></li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="sidebar-page-container">
<div class="auto-container">
	
			<div class="inner-box">
				<div class="page-content">
					<?php the_content();?>
				</div>
			</div>
</div>
</section>
<?php get_footer(); ?>