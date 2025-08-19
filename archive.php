<?php get_header(); ?>

<?php 
if (have_posts()) :
  while (have_posts()) : the_post();
    echo '<h1 class="entry-title">';
    the_title(); 
    echo '</h1>';
    echo '<div class="blog-container">';
    the_content(); 
    echo '</div>';
  endwhile;
else :
  echo 'No posts found.';
endif;
?>

<?php
get_footer();