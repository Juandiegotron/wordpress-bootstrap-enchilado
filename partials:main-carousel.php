<div id="mainHeroe" class="heroe">
	<div class="container">
        <div data-main="slide" class="banner">
            <div class="slide-container" data-type="container">
                <?php query_posts('posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="slide-item">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                            } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/placeholder.png" alt="<?php the_title(); ?>"  class="w-100"/>
                        <?php } ?>
                        <div class="banner_text bg-base">
                            <a href="<?php the_permalink(); ?>" class="h2 banner_title"><?php the_title(); ?></a><br>
                            <span class="meta"><?php echo the_category(' '); ?></span>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <div data-action="prev" class="banner_arrows banner_left">
                <svg enable-background="new 0 0 511.641 511.641" version="1.1" viewBox="0 0 511.641 511.641" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m148.32 255.76l237.76-237.76c4.053-4.267 3.947-10.987-0.213-15.04-4.16-3.947-10.667-3.947-14.827 0l-245.33 245.33c-4.16 4.16-4.16 10.88 0 15.04l245.33 245.33c4.267 4.053 10.987 3.947 15.04-0.213 3.947-4.16 3.947-10.667 0-14.827l-237.76-237.87z"/>
                </svg>                    
            </div>
            <div data-action="next" class="banner_arrows banner_right">
                <svg enable-background="new 0 0 511.949 511.949" version="1.1" viewBox="0 0 511.949 511.949" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m386.24 248.31l-245.33-245.33c-4.267-4.053-10.987-3.947-15.04 0.213-3.947 4.16-3.947 10.667 0 14.827l237.76 237.76-237.76 237.87c-4.267 4.053-4.373 10.88-0.213 15.04 4.053 4.267 10.88 4.373 15.04 0.213l0.213-0.213 245.33-245.33c4.16-4.161 4.16-10.881 0-15.041z"/>
                </svg>                    
            </div>
        </div>
    </div>
</div>