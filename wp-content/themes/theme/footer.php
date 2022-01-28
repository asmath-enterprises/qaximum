        <!-- Main Footer -->

        <footer class="main-footer sp-two">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-3">

                            <div class="footer-widget logo-widget">

                                <div id="footer-1">
                                    <?php
                                            if(is_active_sidebar('footer-1')){
                                            dynamic_sidebar('footer-1');
                                            }
                                            ?>
                                </div>

                            </div>

                        </div>

                        <!--Column-->
                        <div class="column col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="footer-widget links-widget">
                                        <div id="footer-2">

                                            <?php
                                            if(is_active_sidebar('footer-2')){
                                            dynamic_sidebar('footer-2');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="footer-widget links-widget">
                                        <div id="footer-3">

                                            <?php if(is_active_sidebar('footer-3'))
                                            {
                                            dynamic_sidebar('footer-3');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="column col-lg-5">


                                    <div id="footer-4">

                                        <?php if(is_active_sidebar('footer-4')){
                                        dynamic_sidebar('footer-4');
                                        }
                                        ?>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <!--Column-->


                    </div>

                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="auto-container">
                <div class="footer-bottom">

                    <div id="footer-5">

                        <?php if(is_active_sidebar('footer-5')){
                        dynamic_sidebar('footer-5');
                        }
                    ?>
                    </div>


                    <div class="copyright">© 2021 <a href="https://baboolsoft.com/">baboolsoft</a>, All
                        Rights Reserved.</div>

                </div>
            </div>
        </footer>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>



   
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap-select.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.fancybox.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/isotope.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/appear.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/lazyload.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/scrollbar.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/TweenMax.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/swiper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>





        <?php wp_footer();?>

        </body>

        </html>