<?php get_header(); ?>    
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col col-sm-12 col-md-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="article single border-bottom bg-white">
                    <header class="single_header">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="banner">
                                <?php the_post_thumbnail(); ?>
                                <div class="banner_text single_title bg-base">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                            </div>
                            <?php else : ?>
                            <div class="single_title bg-base">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div class="sinlge_body">
                        <?php the_content(); ?>
                    </div>
                    <p><small class="single-meta-bottom-tags meta"><?php the_tags() ?></small></p>
                </article>
                <?php endwhile; endif; ?>
            </div>
            <div class="col  col-sm-12 col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>s