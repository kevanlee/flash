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
  <script type="text/javascript">
  jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
      ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
      if( $(this).scrollTop() > offset_opacity ) {
        $back_to_top.addClass('cd-fade-out');
      }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
      event.preventDefault();
      $('body,html').animate({
        scrollTop: 0 ,
      }, scroll_top_duration
    );
  });

});</script>
</head>

<body <?php body_class(); ?>>
  <div id="featured_image" style="background: linear-gradient(
  rgba(32, 32, 32, 0.45),
  rgba(32, 32, 32, 0.45)
  ),  url(http://i.imgur.com/aNDDRUB.jpg); background-position:center top; background-size:cover;"></div>
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
        <div id="mc_embed_signup">
          <form action="//kevanlee.us1.list-manage.com/subscribe/post?u=269b1b68a4034096e04f017a0&amp;id=299f8ed916" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <h2>Subscribe to our mailing list</h2>
              <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address </label>
                <input type="email" value="" name="EMAIL" placeholder="Email Address" class="required email" id="mce-EMAIL"><input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_269b1b68a4034096e04f017a0_299f8ed916" tabindex="-1" value=""></div>
            </div>
          </form>
        </div>

        <!--End mc_embed_signup-->

	<div id="content" class="site-content">
