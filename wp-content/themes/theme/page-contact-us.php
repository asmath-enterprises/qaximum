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
<section class="contact-details-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2><?php the_field('title'); ?></h2>
            <div class="text"><?php the_field('para'); ?></div>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>

    </div>
</section>
<section class="contact-form-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="live-contact">
                    <div class="image"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/resource/image-40.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon"><span class="flaticon-support-1"></span></div>
                        <h4><?php the_field('chat_heading'); ?></h4>
                        <div class="text"><?php the_field('chat_text'); ?></div>
                        <div class="link-btn"><a href="https://wa.me/+91<?php the_field('mobile_number'); ?>?"
                                class="theme-btn btn-style-one"><span class="btn-title">LIVE CHAT</span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sec-title">
                    <h2><?php the_field('form_heading'); ?></h2>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>
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

<section class="map-section-two">
    <h4><h4>
    <h5><?php the_field('info_heading'); ?></h5>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contacts">
                    <p><?php the_field('info_title'); ?></P>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>

                    </div>
                    <div class="icons-group">

                        <ul>
                            <li><a class="icons-group-item" href="<?php the_field('map_link'); ?>"><i
                                        class="fas fa-map-marker-alt"></i><?php the_field('address'); ?></a></li>
                            <li><a class="icons-group-item" href="mailto:<?php the_field('mail_id'); ?>"><i
                                        class="fas fa-envelope"></i><?php the_field('mail_id'); ?></a></li>
                            <li><a class="icons-group-item" href="tel:+919600757711"><i class="fas fa-phone"></i>+91
                            <?php the_field('mobile_number'); ?></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="mapp">
                  <?php the_field('embed_google_map'); ?>
                </div>

            </div>
        </div>



</section>

<?php get_footer();?>