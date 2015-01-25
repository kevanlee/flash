<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wows
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
  <script type="text/javascript" src="http://test.kevanlee.com/wp-includes/js/jquery/jquery.js?ver=1.11.1"></script><style type="text/css"></style>
  <script type="text/javascript" src="http://test.kevanlee.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
  <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
  <div id="featured_image" style="background: linear-gradient(
  rgba(32, 32, 32, 0.45),
  rgba(32, 32, 32, 0.45)
  ),  url('<?php header_image(); ?>'); background-position:center top; background-size:cover;"></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wows' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'wows' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


        <!-- Begin MailChimp Signup Form -->
        <?php echo get_option( 'text_test' ); ?>


        <!--End mc_embed_signup-->

	<div id="content" class="site-content">
