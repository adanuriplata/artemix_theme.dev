<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110577987-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
	<header id="header" class="header">
 		<?php if (has_custom_logo()) { ?>
			<div class="header__logo"> <?php the_custom_logo(); ?> </div>
		<?php } else { ?>
		<div class="header__logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/artemix-logo-512.png" alt="Logo artemix">
			</a>
		</div>
		<?php } ?>
			<?php $args = array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'container_class' => 'header__menu'
			);
			wp_nav_menu($args);
			?>
	</div>
</header>
<?php edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); ?>