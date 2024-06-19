    <footer class="bg-slate-800 text-white py-10">
      <div class="container">
        <div class="flex flex-wrap justify-between gap-y-10">
          <div class="w-full lg:w-1/2 xl:w-1/3 flex flex-col">
            <h3 class="text-2xl mb-5 uppercase font-bold text-green-600">Kết nối với chúng tôi</h3>
            <h4 class="text-xl mb-3 uppercase font-bold"><?php echo get_bloginfo('name'); ?></h4>
            <p><span class="font-bold">Email:</span> duykhanh278.nguyen@gmail.com</p>
            <p>Số điện thoại: <span class="text-4xl text-red-500">(+84) 035 222 7076</span></p>
            <p>Địa chỉ: 28 Tô Hiến Thành, Phường Hoài Tân, Thị xã Hoài Nhơn, Tỉnh Bình Định, Tỉnh Bình Định, Vietnam</p>
          </div>
          <div class="w-full lg:w-1/2 xl:w-1/3 flex flex-col lg:px-10">
            <h3 class="text-2xl mb-5 uppercase font-bold text-green-600">
              Thông tin
            </h3>
            <?php
              $option = array(
                'menu' => 'footer',
                'theme_location' => 'footer',
                'container' => 'nav',
                'container_class' => 'flex flex-col',
                'item_class' => 'hover:underline',
                'items_wrap' => '%3$s',
                'echo' => false,
                'depth' => 0,
              );
              echo strip_tags(wp_nav_menu($option), '<nav><a>');
            ?>
          </div>
          <div class="w-full xl:w-1/3 flex flex-col">
            <div class="fb-page" data-href="https://www.facebook.com/banhduanuongthanhbinh" data-tabs="" data-width="" data-height="" data-small-header="" data-adapt-container-width="true" data-hide-cover="" data-show-facepile="true"><blockquote cite="https://www.facebook.com/banhduanuongthanhbinh" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/banhduanuongthanhbinh">Facebook</a></blockquote></div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>