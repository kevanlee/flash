<?php
/**
 * @package wows
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
} 
the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php wows_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wows' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wows_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_footer">
        <form action="//kevanlee.us1.list-manage.com/subscribe/post?u=269b1b68a4034096e04f017a0&amp;id=299f8ed916" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
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
