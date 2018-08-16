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
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php
				$vold_description = get_bloginfo( 'description', 'display' );
				if ( $vold_description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $vold_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>
		</div>
	</header>