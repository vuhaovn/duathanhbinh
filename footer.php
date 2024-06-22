    <footer class="bg-slate-800 text-white py-10">
      <div class="container">
        <div class="flex flex-wrap justify-between gap-y-10">
          <div class="w-full lg:w-1/2 xl:w-1/4 pr-5">
            <h3 class="text-2xl mb-1 uppercase font-bold text-green-600">Kết nối với chúng tôi</h3>
            <h4 class="text-xl mb-1 font-bold"><?php echo get_bloginfo('name'); ?></h4>
            <div class="flex items-start gap-1">
              <span class="material-icons text-base">call</span>
              <p>Hotline: 035 222 7076</p>
            </div>
            <div class="flex items-start gap-1">
              <span class="material-icons text-base">home</span>
              <p>Địa chỉ: 28 Tô Hiến Thành, Phường Hoài Tân, Thị xã Hoài Nhơn, Tỉnh Bình Định, Vietnam</p>
            </div>
            <div class="flex items-start gap-1">
              <span class="material-icons text-base">mail</span>
              <p>Email: duykhanh278.nguyen@gmail.com</p>
            </div>
          </div>
          <div class="w-full lg:w-1/2 xl:w-1/4">
            <h3 class="text-2xl mb-1 uppercase font-bold text-green-600">
              Thông tin
            </h3>
            <?php
            $option = array(
              'menu' => 'footer',
              'theme_location' => 'footer',
              'container' => 'nav',
              'container_class' => 'flex flex-col',
              'item_class' => 'link-arrow hover:underline',
              'items_wrap' => '%3$s',
              'echo' => false,
              'depth' => 0,
            );
            echo strip_tags(wp_nav_menu($option), '<nav><a>');
            ?>
          </div>
          <div class="w-full lg:w-1/2 xl:w-1/4">
            <h3 class="text-2xl mb-1 uppercase font-bold text-green-600">
              Sản phẩm
            </h3>
            <nav class="flex flex-col">
              <?php
              $args = array(
                'post_type' => 'product'
              );
              $all_products = new WP_Query($args);
              if ($all_products->have_posts()) :
                while ($all_products->have_posts()) : $all_products->the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="link-arrow hover:underline"><?php the_title(); ?></a>
                <?php endwhile; ?>
              <?php endif; ?>
            </nav>
          </div>
          <div class="w-full lg:w-1/2 xl:w-1/4">
            <h3 class="text-2xl mb-1 uppercase font-bold text-green-600">
              Mạng xã hội
            </h3>
            <?php
            $attr = array(
              'width' => '25', //input only number, in pixel
              'height' => '25', //input only number, in pixel
              'margin' => '10', //input only number, in pixel
              'display' => 'horizontal', //horizontal | vertical
              'alignment' => 'left', //center | left | right
              'selected_icons' => array('1', '2', '3', '4')
              //you can get the icon ID form All Icons page
            );
            if (function_exists('cn_social_icon')) echo cn_social_icon($attr);
            ?>
          </div>
          <!-- <div class="w-full xl:w-1/3 flex flex-col">
            <div class="fb-page" data-href="https://www.facebook.com/banhduanuongthanhbinh" data-tabs="" data-width="" data-height="" data-small-header="" data-adapt-container-width="true" data-hide-cover="" data-show-facepile="true"><blockquote cite="https://www.facebook.com/banhduanuongthanhbinh" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/banhduanuongthanhbinh">Facebook</a></blockquote></div>
          </div> -->
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>