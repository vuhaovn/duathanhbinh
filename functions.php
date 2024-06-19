<?php

function duathanhbinh_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'duathanhbinh_theme_support');

function duathanhbinh_menus()
{
  $locations = array(
    'header' => "Header Menu",
    'footer' => "Footer Menu",
  );

  register_nav_menus($locations);
}

add_action('init', 'duathanhbinh_menus');

function add_class_on_a($classes, $item, $args)
{
  if (isset($args->item_class)) {
    $classes['class'] = $args->item_class;
  }
  return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_on_a', 1, 3);

function duathanhbinh_register_style()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp', array(), 'v3.3.3',);
  wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.7.0.min.js', array(), 'v3.7.0',);
  wp_enqueue_style('material-font', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '', 'all');
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), 'swiper@10', 'all');
  wp_enqueue_style('tailwind-local', get_template_directory_uri() . '/assets/css/tailwind.css', array(), $version, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'duathanhbinh_register_style');

function duathanhbinh_register_script()
{
  $version = wp_get_theme()->get('Version');

  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), 'swiper@10', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'duathanhbinh_register_script');

/**
 * custom post type
 */

function custom_post_type_product()
{
  $args = array(
    'public' => true,
    'label' => 'Sản phẩm',
    'menu_icon' => 'dashicons-products',
    'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('product', $args);
};

function custom_post_type_news()
{
  $args = array(
    'public' => true,
    'label' => 'Tin tức',
    'menu_icon' => 'dashicons-megaphone',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
  );
  register_post_type('news', $args);
};

function custom_post_type_giaychungnhan()
{
  $args = array(
    'public' => true,
    'label' => 'Giấy chứng nhận',
    'menu_icon' => 'dashicons-awards',
    'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('giaychungnhan', $args); // 'product' là tên gọi của Custom Post Type
};

function custom_post_type_advertise()
{
  $args = array(
    'public' => true,
    'label' => 'Banner quảng cáo',
    'menu_icon' => 'dashicons-palmtree',
    'supports' => array('title', 'editor', 'thumbnail'),
  );
  register_post_type('advertise', $args); // 'product' là tên gọi của Custom Post Type
};

add_action('init', 'custom_post_type_news');
add_action('init', 'custom_post_type_product');
add_action('init', 'custom_post_type_giaychungnhan');
add_action('init', 'custom_post_type_advertise');

/**
 * redirect
 */

function redirect_to_home()
{
  if (is_page('home')) {
    wp_redirect(home_url());
    exit;
  }
};

add_action('template_redirect', 'redirect_to_home');

/**
 * filter search
 */

function custom_search_filter($query)
{
  if ($query->is_search) {
    $post_types_to_search = array('product', 'news');
    $query->set('post_type', $post_types_to_search);
  }
  return $query;
}

add_filter('pre_get_posts', 'custom_search_filter');
