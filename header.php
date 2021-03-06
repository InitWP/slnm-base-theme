<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slnm-base
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="l-site">
	<a class="skipLink screenReaderText" href="#content"><?php esc_html_e( 'Skip to content', 'slnm-base' ); ?></a>

	<header id="masthead" class="l-header l-container">
		<div class="branding">
			<?php
			if ( is_front_page() ) : ?>
				<h1 class="branding--title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="branding--title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="branding--description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .branding -->

		<?php if (has_nav_menu('primary')) { ?>
			<nav id="site-navigation" class="mainNavigation" role="navigation">
				<button class="mainNavigation--toggle" aria-controls="primary-menu" aria-expanded="false"><span class="screenReaderText"><?php esc_html_e( 'Menu', 'slnm-base' ); ?></span></button>
				<?php wp_nav_menu( array( 	'theme_location' => 'primary',
											'menu_id' => 'primary-menu',
											'container' => '',
											'menu_class' => 'mainNavigation--menu',
											'walker' => new slnm_base_Walker_Nav_Menu()
										) ); ?>
			</nav><!-- #site-navigation -->
		<?php } ?>


		<button class="searchformToggle" aria-controls="searchform-container" aria-label="<?php esc_html_e( 'Zoeken', 'slnm-base' ); ?>"></button>
		<div class="searchOverlay"></div>
		<div class="searchformContainer" id="searchform-container"><?php echo get_search_form(); ?></div>
	</header><!-- #masthead -->

	<?php
	if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
		yoast_breadcrumb( '<div id="breadcrumbs" class="l-container breadcrumbs">','</div>' );
	}
 	?>
