<div class="col col-sm-12 col-md-6">
    <article class="article snippet bg-white">
        <div class="banner snippet_banner">
            <a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
					} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/placeholder.png" alt="<?php the_title(); ?>"  class="w-100"/>
				<?php } ?>
			</a>
            <h2 class="banner_text h4 bg-base"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="snippet_body">
            <p class="meta small"><?php echo the_category(' '); ?> <?php the_time( get_option('date_format') ); ?></p>
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>
