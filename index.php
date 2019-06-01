<?php get_header(); ?>
<section id="indexContent" class="content">
<?php if (have_posts()) : ?>
<div class="POST-GRID">
  <?php while (have_posts()) : the_post(); ?>
  <div class="post">
  <div class="post-thumbnail">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <h3 class="post-title">
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
  </div>
  <?php endwhile; ?>

</div>
<?php else : ?>
<p class="nothing">
Il n'y a pas de Post à afficher !
</p>
<?php endif; ?>
</section>
<?php get_footer(); ?>
<div class="loader screen-splash" hidden></div>
