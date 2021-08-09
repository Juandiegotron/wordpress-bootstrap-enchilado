
	<footer id="mainFooter" class="footer bg-base border-top">
        <div class="container">
            <div id="footerCenter" class="footer_center mt-1">
                <div class="row">
                    <div class="col  col-sm-12 col-md-1">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php bloginfo(); ?>" class="logo"></a>
                    </div>
                    <div class="col col-sm-12 col-md-11">
                        <div class="menu menu_right">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'third'
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footerBottom" class="footer_bottom">
                <div class="row">
                    <div class="col col-sm-12 col-md-5 footer_links menu">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'fourth'
                            )
                        );?>
                    </div>
                    <div class="col col-sm-12 col-md-7 text-right">
                        <p><?php bloginfo('description'); ?>, <?php echo date('Y'); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>