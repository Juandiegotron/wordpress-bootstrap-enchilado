<?php
/*
Template Name: Category
*/
get_header(); ?>
<main id="main">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-9">
				<h1 class="h2 border-bottom"><?php single_cat_title(); ?></h1>
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
<?php get_footer(); ?>s