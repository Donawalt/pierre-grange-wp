<?php get_header(); ?>
<section class="content single">
  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

      /*
       * Include the post format-specific template for the content. If you want to
       * use this in a child theme, then include a file called called content-___.php
       * (where ___ is the post format) and that will be used instead.
       */
      get_template_part( 'content', get_post_format() );

      // Previous/next post navigation.
      /*the_post_navigation( array(
          'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
              '<span class="post-title">%title</span>',
          'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
              '<span class="post-title">%title</span>',
      ) );*/

  // End the loop.
  endwhile;
  ?>
</section>
<?php get_footer(); ?>
