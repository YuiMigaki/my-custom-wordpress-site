<?php get_header(); ?>

<!-- Home page -->
<!-- This is set as Homepage as default.
    Dashboard->Setting->Reading->Homepage->Home
-->
<?php
if (is_front_page()) :
  get_template_part('front-page');
endif;
?>

<!-- Blog page -->
<!-- This is set as post-page as default.
    Dashboard->Setting->Reading->posts page->Blog
-->
<?php
if (is_home()) :
  get_template_part('archive');
endif;
?>

<!-- Posts Page (Single Post) -->
<?php
if (is_single()) :
  get_template_part('single');
endif;
?>

<?php get_footer(); ?>
