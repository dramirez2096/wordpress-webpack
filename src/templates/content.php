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
			<div class="panel">
				<div class="img-section">
					<header class="entry-header">
						<h2 class="entry-title"></h2>
					</header><!-- .entry-header -->

					<?php $thumbnail = get_the_post_thumbnail_url(); ?>
					<div class="featured-image" style="background-image: url('<?php echo $thumbnail;?>')"></div>
				</div> <!-- end of image-section -->
			
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
							the_title('<h2>', '</h2>')
						) );
						?>
					</div><!-- .entry-content -->
				</div> <!-- end of text-section -->
				
			</div> <!-- end of panel -->
		</div> <!-- end of post-content -->
	</div> <!-- end of clipping div -->
</article><!-- #post-<?php the_ID(); ?> --> 