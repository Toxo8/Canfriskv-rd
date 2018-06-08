<?php
/**
 * Template Name: Homepage
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>

<div class="home-grid-block-one">
	<?php
	if (have_posts() ):

		while (have_posts()): the_post(); ?>

			<div class="intro-left">
				<div class="left-wrap">
					<div class="intro-heading">
						<h1>
							<?php
							if(get_field('intro_rubrik')){
								echo  get_field('intro_rubrik') ;
							}
							?>
						</h1>
					</div>
					<div class="intro-textfield">
						<?php
						if(get_field('intro_text')){
							echo  get_field('intro_text') ;
						}
						?>
					</div>

					<div class="intro-buttons">
						<a class="booking-button" href="http://www.bokadirekt.se/Bookings/Default.aspx?sru=12288" target="_blank">Boka tid</a>
						<a class="products-button"href="http://www.myaloevera.se/britt" target="_blank">Gå till webbshoppen</a>
					</div>
				</div>

			</div>

            <div class="intro-right">
                <?php the_post_thumbnail('full', array( 'class' => 'img-intro' )); ?>
            </div>

		<?php
		endwhile;
        endif; ?>
</div>

<div class="home-grid-block-two">

	<div class="event-grid-block">

		<div class="event-block">
			<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			<div class="event-img"><?php the_post_thumbnail('medium', array( 'class' => 'post-img' )); ?></div>
			<div class="event-block-content">
				<div class="event-cat"><?php the_category(" "); ?></div>
				<div class="event-title"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
				<div class="event-content">
					<?php
						$content = get_the_content();
						echo mb_strimwidth($content, 0, 230, '...');
					?>
				</div>
				<a class="read-more-link" href="<?php the_permalink() ?>"><span>Läs mer</span></a>
			</div>
			<?php
				endwhile;
				wp_reset_postdata();
			?>
		</div>

		<div class="email-block">
			<div class="email-titel">
				<h2>
				    <?php
				    if(get_field('nyhetsbrev_rubrik')){
				        echo  get_field('nyhetsbrev_rubrik') ;
				    }
				    ?>
				</h2>
			</div>
			<div class="email-text">
			    <?php
			    if(get_field('nyhetsbrev_text')){
			        echo  get_field('nyhetsbrev_text') ;
			    }
			    ?>
			</div>

			<?php echo do_shortcode('[contact-form-7 id="391" title="Nyhetsbrev"]'); ?>
		</div>

	</div>

</div>
</div>

<div class="home-block-three">

	<div class="comment-block">
		<div class="quotes">”</div>
		<div class="comment-content"><?php echo do_shortcode('[slide-anything id="25"]'); ?></div>
	</div>

</div>


<?php get_footer() ?>
