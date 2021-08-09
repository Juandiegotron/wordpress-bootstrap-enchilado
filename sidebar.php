<aside id="mainAside" class="aside">
	<?php if( is_active_sidebar('main_sidebar') ) {
		dynamic_sidebar ('main_sidebar');
		} else  { ?>
		<div class="search mt-1">
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
				<svg class="search_icon" enable-background="new 0 0 339.921 339.921" version="1.1" viewBox="0 0 339.921 339.921" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path d="m335.16 292.07l-81.385-84.077c-5.836-6.032-13.13-8.447-16.29-5.363-3.171 3.062-10.47 0.653-16.306-5.379l-1.164-1.207c36.425-47.907 32.89-116.5-10.851-160.24-47.739-47.739-125.14-47.739-172.88 0-47.739 47.739-47.739 125.13 0 172.87 44.486 44.492 114.7 47.472 162.7 9.045l0.511 0.533c5.825 6.032 7.995 13.402 4.814 16.469-3.166 3.068-1.012 10.443 4.83 16.464l81.341 84.11c5.836 6.016 15.452 6.195 21.49 0.354l22.828-22.088c6.015-5.827 6.178-15.437 0.353-21.491zm-152.86-110.26c-32.852 32.857-86.312 32.857-119.16 0.011-32.852-32.852-32.847-86.318 0-119.16 32.847-32.852 86.307-32.847 119.15 5e-3 32.857 32.847 32.857 86.302 0.011 119.15z"/>
				</svg>
			</form>
		</div>
	<?php } ?>
</aside>

