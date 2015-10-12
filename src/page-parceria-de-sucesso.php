<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url = $thumb['0'];
				?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_title( '<h1 class="tituloMarrom">', '</h1>' ); ?>

					<h3 class="bigode"><?php the_field('bigode'); ?></h3>

					<?php the_content(); ?>
					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<a class="entreEmContato" href="<?php echo get_permalink( get_page_by_title( 'Contato' ) ); ?>"><?php _e('Entre em contato', 'html5blank'); ?></a>

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
