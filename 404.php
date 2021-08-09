
<?php get_header(); ?>    
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col col-sm-12 col-md-9">
				<div class="single_title bg-base">
					<h1><?php single_cat_title(); ?></h1>
				</div>
				<div class="sinlge_body">
				Back to the <a class="btn" href="<?php echo home_url(); ?>">home</a>
                </div>
            </div>
            <div class="col  col-sm-12 col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
