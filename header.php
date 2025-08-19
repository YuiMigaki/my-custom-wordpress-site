<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo wp_get_document_title(); ?></title> 
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 
  <div class="site-header">

        <?php
        if (is_active_sidebar('custom-header-widget')) :
        ?>
          <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
            <?php dynamic_sidebar('custom-header-widget');
            ?>
          </div>

        <?php endif;
        ?>

  </div>

  <div class="top menu-wrap">
    <input type="checkbox" id="checkbox"> <!-- Checkbox allows for opening and closing of the hamburger menu -->
    <label for="checkbox" class="menu-icon">☰</label>
    
    <div class="search-container">
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input type="text" placeholder="Search.." name="s" value="<?php echo get_search_query(); ?>">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>


    <div class="custom-menu-class">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'my-custom-menu',
        'container_class' => 'custom-menu-class'
      ));
      ?>
    </div>
  </div>
