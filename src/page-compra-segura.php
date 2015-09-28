<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">

			<!-- <h1><?php the_title(); ?></h1> -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url = $thumb['0'];
				?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<svg class="compra-segura"><use xlink:href="#compra-segura"></use></svg>

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->


				<div class="lateral" style="background-image:url(<?php echo $url ?>)"></div>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
