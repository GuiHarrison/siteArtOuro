<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="wrapper">


			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<h4 class="chapeu">
					<?php the_field('descricao'); ?>
				</h4>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<h1 class="historia">
						<?php the_field('titulo') ?>
					</h1>

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->


				<div class="lateral lateralNossaMarca">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
					} ?>
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
