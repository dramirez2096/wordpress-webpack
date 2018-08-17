<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vold
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-section'); ?>>
	<div class="clipping">
		<div class="post-content">
			<div class="img-section">
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title">', '</h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							// presspack_posted_on();
							// presspack_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<?php $thumbnail = get_the_post_thumbnail_url(); ?>
				<div class="featured-image" style="background-image: url('<?php echo $thumbnail;?>')"></div>
			</div>
			
			<div class="text-section">
				<div class="entry-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vold' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array( 
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vold' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> --> 