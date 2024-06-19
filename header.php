<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="ivISpVJm"></script>
    <header class="header">
      <div class="header__top bg-primary bg text-white py-3">
        <div class="container">
          <div class="md:flex justify-between items-center">
            <p class="pr-5"><b>Địa chỉ:</b> 28 Tô Hiến Thành, Phường Hoài Tân, Thị xã Hoài Nhơn, Tỉnh Bình Định, Tỉnh Bình Định, Vietnam</p>
            <p>
              <b>Hotline:</b><span class="font-bold text-xl ml-2"><a href="tel:0352227076">(+84) 035 222 7076</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="header__middle">
        <div class="container">
          <div class="md:flex justify-between items-center py-5 md:py-10 gap-10">
            <div class="logo_header flex justify-center items-center mx-auto lg:mx-0">
              <a href="<?php echo get_home_url(); ?>">
                <?php
                  if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                  }
                ?>
                <img src="<?php echo $logo[0]; ?>" alt="">
              </a>
            </div>
            <h1 class="text-2xl text-green-600 md:text-6xl md:w-2/4 text-center my-5 md:my-0">Bánh Dừa Nướng <br> Thanh Bình</h1>
            <div class="flex flex-col items-center md:gap-5">
              <span class="material-icons text-green-600 text-3xl md:text-5xl">support_agent</span>
              <span class="text-green-600 text-3xl md:text-4xl text-center">Hỗ trợ 24/7</span>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom py-2 lg:py-0 bg-primary text-white">
        <div class="container">
          <div class="flex justify-between items-center">
            <button id="btn_menu" class="flex items-center lg:hidden">
              <span class="material-icons text-3xl">menu</span>
            </button>
            <button id="btn_close_menu">
              <span class="material-icons text-3xl">close</span>
            </button>
            <?php
              $option = array(
                'menu' => 'header',
                'theme_location' => 'header',
                'container' => 'nav',
                'container_class' => 'header_navigation',
                'item_class' => 'transition-all p-3 hover:text-green-500 hover:bg-white',
                'items_wrap' => '%3$s',
                'echo' => false,
                'depth' => 0,
              );
              echo strip_tags(wp_nav_menu($option), '<nav><a>');
            ?>
            <div class="searchForm">
              <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <input
                  type="text"
                  name="s"
                  id="s"
                  value="<?php echo get_search_query();?>"
                  placeholder="Tìm sản phẩm"
                  class="rounded-3xl border-gray-300 focus:border-gray-300 text-black"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
