<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="fundo">

			<div class="imagemDetalhe" style="background-image:url(<?php if (the_field('imagem_grande')) { the_field('imagem_grande'); } ?>);">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<div id="post-<?php the_ID(); ?>" class="fundoPortfolio">

							<?php if (has_post_thumbnail()) {
								the_post_thumbnail();
							} ?>

							<h1><?php the_title(); ?></h1>

							<?php echo '<p class="abreGemas">'. get_the_content() .'</p>'; ?>

							<?php edit_post_link(); ?>

						</div>
						<!-- /article -->

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

		<div class="asGemas">
			<?php
				rewind_posts();
				$args = array(
					'post_type'      => 'gemas',
					'posts_per_page' => -1
				);

				$query = new WP_Query( $args );

				echo '<ul>';
					if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
						echo '<li>';
							echo '<a href="'. get_permalink() .'" data-tooltip="'. get_the_title() .'">';

								$url = wp_get_attachment_url( get_post_thumbnail_id() );
								echo '<img src="'. $url .'" alt="'. get_the_title() .'">';
							
							echo '</a>';
						echo '</li>';
					endwhile;
				echo '</ul>';
				endif;
			 ?>
		 </div>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
