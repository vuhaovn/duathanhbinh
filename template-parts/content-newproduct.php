<section class="newProduct py-5 bg-green-100">
  <div class="container">
    <h2
      class="text-2xl text-center py-3 mb-5 uppercase text-green-500 font-bold border-b-4"
    >
      Sản phẩm mới nhất
    </h2>
    <ul class="product_list flex flex-wrap justify-between">
      <?php
        $query_cake = new WP_query(array(
          'post_type' => 'product',
          'posts_per_page' => 4,
          'order' => 'ASC'
        ));
        if($query_cake->have_posts()):
          while($query_cake->have_posts()): $query_cake->the_post();
          ?>
            <li class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
              <a
                href="<?php the_permalink(); ?>"
                class="flex flex-col items-center hover:opacity-70 transition-opacity"
              >
                <?php the_post_thumbnail('thumbnail'); ?>
                <span class="text-xl font-bold mt-3"><?php the_title(); ?></span>
                <span class="text-xl text-red-700"><?php the_field('price'); ?></span>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li>Chưa có sản phẫm nào</li>
      <?php endif; ?>
    </ul>

    <div class="text-center mt-5">
      <a href="/product/" class="text-white inline-block rounded-lg bg-primary py-3 px-10 hover:bg-green-400 transition-all text-center">Xem tất cả</a>
    </div>
  </div>
</section>