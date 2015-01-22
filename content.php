<?php
/**
 * @package wows
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php 
// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
  the_post_thumbnail( 'thumbnail' );
} 

the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    <?php endif; ?>
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
      <?php wows_posted_on(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
