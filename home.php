<?php
/**
 * The blog posts content
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>


<?php get_header(); ?>

<div class="blog-wrapper">

	<div class="blog-grid-block">
		<?php
		if (have_posts() ):

			while (have_posts()): the_post(); ?>

				<div class="blog-post">

					<div class="blog-date"><?php the_time('j F Y'); ?> </div>

					<div class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

					<div class="blog-content">
						<?php
							$content = get_the_content();
							echo mb_strimwidth($content, 0, 145, '...');
						?>
					</div>

					<a class="read-more-link" href="<?php the_permalink() ?>"><span>Läs mer</span></a>

				</div>

			<?php
			endwhile; else:

		endif; ?>
	</div>
</div>


<?php get_footer(); ?>
