<?php
/**
 * Template Name: Products
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>

<div class="products-wrapper">

    <div class="products-grid">
        <?php
    	if (have_posts() ):
            while (have_posts()): the_post(); ?>

        <div class="products-content">
            <?php the_content(); ?>
        </div>

        <div class="products-img"><?php the_post_thumbnail('full', array( 'class' => 'img-products' )); ?></div>

        <div class="booking">
            <p>
                <?php
                if(get_field('webbshop_text')){
                    echo  get_field('webbshop_text') ;
                }
                ?>
            </p>
            <a class="products-button" href="http://www.myaloevera.se/britt" target="_blank">Gå till webbshop</a>
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
