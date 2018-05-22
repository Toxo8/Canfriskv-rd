<?php
/**
 * The header content
 *
 *
 *
 * @package Canfriskvård
 * @since Canfriskvård 1.0
 */

?>

<html>

<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0"/>
	<title>Dev Canfriskvård</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<main>

<div class="header-wrapper">

	<div class="header-contact-info">
	<div class="line-break"></div>
		<?php
			if(get_field('email', 7)){ ?>
				<div><a href="<?php echo antispambot('mailto:' . get_field('email', 7)); ?> "> &#9993; <?php echo antispambot( get_field('email', 7));?></a></div>
			<?php
			}
		?>
		<?php
			if(get_field('telefon', 7)){ ?>
				<div><a href="<?php echo antispambot('tel://' . get_field('telefon', 7) ); ?> "> &#9990; <?php echo antispambot( get_field('telefon', 7));?></a></div>
			<?php }
		?>
	</div>

	<div class="logga">
		<a href="<?php echo home_url(); ?>" >
		<?php $image_attributes = wp_get_attachment_image_src( $attachment_id = 28, $size = 'auto' );
			if ( $image_attributes ) : ?>
				<img class="img-logga" src="<?php echo $image_attributes[0]; ?>" />
			<?php endif; ?>
		</a>
	</div>

	<div class="header-menu">

		<div class="hamburger" id="hamburger-1">
			 <span class="line"></span>
			 <span class="line"></span>
			 <span class="line"></span>
		 </div>

		<div class="nav-menu">
			<?php wp_nav_menu(); ?>
		</div>
	</div>

</div>
