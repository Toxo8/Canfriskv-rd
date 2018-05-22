<?php
/**
 * Template Name: About
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>
<div class="about-wrapper">
    <div class="about-grid">
        <?php
    	if (have_posts() ):
            while (have_posts()): the_post(); ?>

        <div class="about-content">
            <?php the_content(); ?>
        </div>

        <div class="about-img"><?php the_post_thumbnail('full', array( 'class' => 'img-about' )); ?></div>

        <div class="booking">
            <p>Boka gärna tid hos mig på Mariecare Hälsocentrum i Farsta via knappen nedan!</p>
            <a class="booking-button" href="http://www.bokadirekt.se/Bookings/Default.aspx?sru=12288" target="_blank">Boka tid</a>
        </div>

        <div class="newsletter">
            <div class="email-block">
    			<div class="email-titel">
    				<?php
    				if(get_field('nyhetsbrev_rubrik', 2)){
    					echo  get_field('nyhetsbrev_rubrik', 2) ;
    				}
    				?>
    			</div>
    			<div class="email-text">
    				<?php
    				if(get_field('nyhetsbrev_text', 2)){
    					echo  get_field('nyhetsbrev_text', 2) ;
    				}
    				?>
    			</div>

    			<?php echo do_shortcode('[contact-form-7 id="391" title="Nyhetsbrev"]'); ?>
    		</div>
        </div>

        <?php
        endwhile;
        endif; ?>
    </div>
</div>
<div class="home-block-three">

	<div class="comment-block">
		<div class="quotes">”</div>
		<div class="comment-content"><?php echo do_shortcode('[slide-anything id="25"]'); ?></div>
	</div>

</div>

<?php get_footer() ?>
