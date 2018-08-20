<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<header id="main-header" class="site-header">
		<div class="clipping">
			<div class="header-content">
				<?php the_header_image_tag(); ?>
				<?php
					if (display_header_text()==true){
						echo '<h1>'.get_bloginfo( 'name' ) .'</h1>';
						echo '<h2>'.get_bloginfo('description').'</h2>';                            
					} else{
						
					}
				?>
			</div>
		</div>
	</header>