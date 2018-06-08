<?php
/**
 * Template Name: Treatments
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>

<div class="treatments-wrapper">

    <?php
    if (have_posts() ):
        while (have_posts()): the_post(); ?>

            <h1><?php the_title(); ?></h1>

    <?php
    endwhile;
    endif; ?>

    <div class="treatments-grid">

        <div class="treatment-block" id="b1">
            <?php if( get_field('aromamassage_bild') ): ?>
                <img class="treatment-img" src="<?php the_field('aromamassage_bild'); ?>" />
			<?php endif; ?>

            <div class="treatment-titel">
                <h2>
                    <?php
                    if(get_field('aromamassage_rubrik')){
                        echo  get_field('aromamassage_rubrik') ;
                    }
                    ?>
                </h2>
            </div>
            <div class="treatment-text">
                <?php
                if(get_field('aromamassage_text')){
                    $content = get_field('aromamassage_text') ;
                    echo mb_strimwidth($content, 0, 250, '...');
                }
                ?>

            </div>
            <a class="read-more-link aroma-popup" ><span>Läs mer</span></a>
        </div>
        <div class="treatment-block" id="b2">
            <?php if( get_field('reiki_bild') ): ?>
				<img class="treatment-img" src="<?php the_field('reiki_bild'); ?>" />
			<?php endif; ?>

            <div class="treatment-titel">
                <h2>
                    <?php
                    if(get_field('reiki_rubrik')){
                        echo  get_field('reiki_rubrik') ;
                    }
                    ?>
                </h2>
            </div>
            <div class="treatment-text">
                <?php
                if(get_field('reiki_text')){
                    $content = get_field('reiki_text') ;
                    echo mb_strimwidth($content, 0, 250, '...');
                }
                ?>
            </div>
            <a class="read-more-link reiki-popup" ><span>Läs mer</span></a>
        </div>
        <div class="treatment-block b3">
            <?php if( get_field('hot_stone_bild') ): ?>
				<img class="treatment-img" src="<?php the_field('hot_stone_bild'); ?>" />
			<?php endif; ?>

            <div class="treatment-titel">
                <h2>
                    <?php
                    if(get_field('hot_stone_rubrik')){
                        echo  get_field('hot_stone_rubrik') ;
                    }
                    ?>
                </h2>
            </div>
            <div class="treatment-text">
                <?php
                if(get_field('hot_stone_text')){
                    $content = get_field('hot_stone_text') ;
                    echo mb_strimwidth($content, 0, 250, '...');
                }
                ?>
            </div>
            <a class="read-more-link hot-stone-popup" ><span>Läs mer</span></a>
        </div>
        <div class="treatment-block b4">
            <?php if( get_field('kraniosakral_bild') ): ?>
                <img class="treatment-img" src="<?php the_field('kraniosakral_bild'); ?>" />
			<?php endif; ?>

            <div class="treatment-titel">
                <h2>
                    <?php
                    if(get_field('kraniosakral_rubrik')){
                        echo  get_field('kraniosakral_rubrik') ;
                    }
                    ?>
                </h2>
            </div>
            <div class="treatment-text">
                <?php
                if(get_field('kraniosakral_text')){
                    $content = get_field('kraniosakral_text') ;
                    echo mb_strimwidth($content, 0, 250, '...');
                }
                ?>
            </div>
            <a class="read-more-link kraniosakral-popup" ><span>Läs mer</span></a>
        </div>

    </div>
    <div class="booking">
        <div class="booking-wrap">
            <div class="booking-titel">Boka tid</div>
            <p>
                <?php
                if(get_field('boka_text', 9)){
                    echo  get_field('boka_text', 9) ;
                }
                ?>
            </p>
            <a class="booking-button" href="http://www.bokadirekt.se/Bookings/Default.aspx?sru=12288" target="_blank">Boka tid</a>
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
