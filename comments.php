<?php if( have_comments() ) 
	{ ?> 
	<h4><?php comments_number( 'There are % comments' ); ?></h4> 
	<?php wp_list_comments(); paginate_comments_links(); ?> 
	<?php } ?> 
<?php comment_form(); ?>