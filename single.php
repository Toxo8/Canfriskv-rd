<?php
/**
 *  Single content
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<?php get_header() ?>
<div class="event-wrapper">
    <div class="event-grid">
        <?php
        if (have_posts() ):
            while (have_posts()): the_post(); ?>


        <div class="single-content">
            <h1><?php the_title(); ?></h1>
            <div class="event-content">
                <?php the_content(); ?>
            </div>

        </div>
        <?php if (has_post_thumbnail() ): ?>
            <div class="event-img"><?php the_post_thumbnail('medium', array( 'class' => 'event-post-img' )); ?></div>
        <?php
            endif;
        endwhile;
        endif; ?>

        <div class="event-recent-posts">
            <h2>Tidigare händelser</h2>

            <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</div>

<?php get_footer() ?>
