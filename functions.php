<?php

// ////////////////////////////////// Enqueue my stylesheet ///////////////////////////// //	

function add_theme_style()
{

  wp_enqueue_style('style', get_template_directory_uri() . '/css/mystyle.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'add_theme_style');


// ////////////////////////////////// Custom Function to Include /////////////////////// //

function add_favicon()
{
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
}

add_action('wp_head', 'add_favicon');


// ////////////////////////////////// Menu Function to Include /////////////////////// //

function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'my-custom-menu' => __('My Custom Menu'),
      'extra-menu' => __('Extra Menu'),
      'second-extra-menu' => __('Second Extra Menu '),
      'third-extra-menu' => __('Third Extra Menu '),
    )
  );
}
add_action('init', 'wpb_custom_new_menu');

// ///////////////////////////////// A Filter function //////////////////

function modify_index_page_title($title_parts)
{
  if (is_front_page()) {
    $title_parts['title'] = 'Home';
    $title_parts['site'] = "Yui's Website";
  } elseif (is_home()) {
    $title_parts['title'] = 'Blog';
    $title_parts['site'] = "Yui's Website";
  } elseif (is_single()) {
    $title_parts['title'] = $title_parts['title'];
    $title_parts['site'] = "Yui's Website";
  }

  return $title_parts;
}
add_filter('document_title_parts', 'modify_index_page_title');

// ///////////////////////////////// Widget function //////////////////

function new_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Crousel Widget Area 1',
    'id'            => 'custom-index-crousel-widget-1',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Crousel Widget Area 2',
    'id'            => 'custom-index-crousel-widget-2',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Crousel Widget Area 3',
    'id'            => 'custom-index-crousel-widget-3',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 1',
    'id'            => 'custom-index-body-widget-1',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 2',
    'id'            => 'custom-index-body-widget-2',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 3',
    'id'            => 'custom-index-body-widget-3',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 4',
    'id'            => 'custom-index-body-widget-4',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 5',
    'id'            => 'custom-index-body-widget-5',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 6',
    'id'            => 'custom-index-body-widget-6',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 7',
    'id'            => 'custom-index-body-widget-7',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 8',
    'id'            => 'custom-index-body-widget-8',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 9',
    'id'            => 'custom-index-body-widget-9',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 10',
    'id'            => 'custom-index-body-widget-10',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 11',
    'id'            => 'custom-index-body-widget-11',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 12',
    'id'            => 'custom-index-body-widget-12',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Custom Index Body Widget Area 13',
    'id'            => 'custom-index-body-widget-13',
    'before_widget' => '<div class="widge">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="new-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'new_widgets_init');

// ///////////////////////////////// Search function set as default (Redirect to home) //////////////////

function redirect_search_to_front_page() {
  if (is_search()) {
      wp_redirect(home_url('/'));
      exit();
  }
}
add_action('template_redirect', 'redirect_search_to_front_page');


// Remove junk from head
remove_action('wp_head', '_wp_render_title_tag', 1);
//remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'locale_stylesheet');
remove_action('publish_future_post', 'check_and_publish_future_post', 10, 1);
remove_action('wp_head', 'wp_robots', 1);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'wp_print_styles', 2); //8
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_custom_css_cb', 101);
remove_action('wp_head', 'wp_site_icon', 99);
remove_action('wp_footer', 'wp_print_footer_scripts', 20);
remove_action('template_redirect', 'wp_shortlink_header', 11, 0);
remove_action('wp_print_footer_scripts', '_wp_footer_scripts');
remove_action('init', '_register_core_block_patterns_and_categories');
remove_action('init', 'check_theme_switched', 99);
remove_action('init', array('WP_Block_Supports', 'init'), 22);
remove_action('switch_theme', array('WP_Theme_JSON_Resolver', 'clean_cached_data'));
remove_action('start_previewing_theme', array('WP_Theme_JSON_Resolver', 'clean_cached_data'));
remove_action('after_switch_theme', '_wp_menus_changed');
remove_action('after_switch_theme', '_wp_sidebars_changed');
remove_action('wp_print_styles', 'print_emoji_styles');
