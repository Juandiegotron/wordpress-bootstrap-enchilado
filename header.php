<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo(); ?></title>

	<!-- The good ol' fun stuff -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header id="mainHeader" class="header bg-white">
        <div class="container">
            <div id="mainNav" class="nav">
                <div class="row">
                    <div class="col col-md-1">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class="w-100 mt-1"></a>
                    </div>
                    <div class="col col-md-11 mt-1 text-right p-initial">
                        <span class="btn btn-secondary d-sm" onclick="openNav()">
						<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.86453V0.475372H18V2.86453H0ZM0 8.83744H18V6.44828H0V8.83744ZM0 14.8104H18V12.4212H0V14.8104Z" fill="black"/>
						</svg>
                        </span>
                        <div id="nav" class="menu menu_main d-lg w-100sm">
                            <span class="btn btn-secondary btn-cls d-sm" onclick="closeNav()">
                                ×
                            </span>
                            <?php wp_nav_menu( array(
                                'menu_class' => 'menu_primary', 
								'theme_location' => 'primary'
								)
							);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
