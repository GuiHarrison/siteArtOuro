<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="wrapper">

				<h4 class="chapeu">
					<?php the_field('chapeu'); ?>
				</h4>

			</div>
			<div class="imagemFW" <?php
			if (has_post_thumbnail()) {
				$url = wp_get_attachment_url( get_post_thumbnail_id() );

				echo 'style="background-image: url(' . $url . ');"';
				} ?>>
			</div>
			<div class="cinza">
				<div class="wrapper">

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


						<?php the_title('<h1 class="tituloBranco">','</h1>'); ?>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

					<div class="lateralMenor">
						<img src="<?php echo get_template_directory_uri() . '/img/gemas.png' ?>" alt="Gemas" />
					</div>


				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</div>

			</div>

			<div class="wrapper">
				<article>
					<?php echo do_shortcode( '[formidable id="7" title="1"]' ); ?>
				</article>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>