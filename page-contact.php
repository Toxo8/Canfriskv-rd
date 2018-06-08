<?php
/**
 * Template Name: Contact
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>


<div class="contact-wrapper">
    <div class="contact-grid">
        <?php
    	if (have_posts() ):
            while (have_posts()): the_post(); ?>

        <div class="contact-content">
            <div class="contact-block">
                <h1><?php the_title(); ?></h1>
                <div class="contact-text">
                    <?php
    				if(get_field('kontakt_text')){
    					echo  get_field('kontakt_text');
    				}
    				?>
                </div>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="411" title="Kontakta mig"]'); ?>
                </div>
            </div>
            <div class="instagram-block">
                <div class="instagram-titel">
    				<?php
    				if(get_field('instagram_rubrik')){
    					echo  get_field('instagram_rubrik') ;
    				}
    				?>
    			</div>
                <?php echo do_shortcode('[instagram-feed]'); ?>
                <a class="booking-button" href="http://www.instagram.com/canfriskvard" target="_blank">Följ mig på Instagram</a>
            </div>
            <div class="fb-block">
                <a class="booking-button" href="https://www.facebook.com/canfriskvard/" target="_blank">Följ mig på Facebook</a>
            </div>
        </div>

        <div class="contact-map">
            <iframe src="https://snazzymaps.com/embed/73471" width="100%" height="100%" style="border:none;"></iframe>
        </div>

        <div class="booking">
            <p>Boka gärna tid hos mig på Mariecare Hälsocentrum i Farsta via knappen nedan!</p>
            <a class="booking-button" href="http://www.bokadirekt.se/Bookings/Default.aspx?sru=12288" target="_blank">Boka tid</a>
        </div>

        <div class="newsletter">
            <div class="email-block">
    			<div class="email-titel">
                    <h2>
        				<?php
        				if(get_field('nyhetsbrev_rubrik', 2)){
        					echo  get_field('nyhetsbrev_rubrik', 2) ;
        				}
        				?>
                    </h2>
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
