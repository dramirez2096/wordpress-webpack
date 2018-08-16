<div class="container">
  <?php get_header(); ?>

  <!-- <div>
    <h1>hello world!</h1>
	</div> -->
	<?php
		$custom_classes = array(
			0=>'section-1',
			1=>'section-2',
			2=>'section-3',
			3=>'section-4',
		);
		$i = 0;
	?>

  <?php
		if ( have_posts() ) : 
      /* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<div <?php echo post_class($custom_classes[$i++]); ?>>
				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				get_template_part( 'src/templates/content', get_post_type() );
				?>
				</div>
	<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'src/templates/content', 'none' );

		endif;
	?>

  <?php get_footer(); ?>
</div>
