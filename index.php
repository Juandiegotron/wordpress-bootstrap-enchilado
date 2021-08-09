<?php get_header(); ?>
<?php get_template_part('partials/main-carousel'); ?>
<main id="main">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-9">
				<div class="menu menu_news">
					<?php wp_nav_menu( array(
                        'theme_location' => 'secondary'
                        )
                    );?>
				</div>
				<div class="row">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('partials/snippet-post'); ?>
					<?php endwhile; endif; ?>
					<div class="col col-sm-12">
						<?php numeric_posts_nav(); ?>
					</div>
				</div>
			</div>
			<div class="col col-sm-12 col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>