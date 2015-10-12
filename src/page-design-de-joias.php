<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="wrapper">

			</div>
			<div class="imagemDesignJoias" <?php
			if (has_post_thumbnail()) {
				$url = wp_get_attachment_url( get_post_thumbnail_id() );

				echo 'style="background-image: url(' . $url . ');"';
				} ?>>
			</div>
				<div class="wrapper wDesignDeJoias">

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_title( '<h1 class="tituloMarrom">', '</h1>' ); ?>

						<h3 class="bigode"><?php the_field('bigode'); ?></h3>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<a class="entreEmContato" href="<?php echo get_permalink( get_page_by_title( 'Contato' ) ); ?>"><?php _e('Entre em contato', 'html5blank'); ?></a>

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

					<div class="lateralMenor">
						<img src="<?php echo get_template_directory_uri() . '/img/design-de-joias.png' ?>" alt="Gemas" />
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

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>