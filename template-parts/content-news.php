<section class="news py-5 bg-green-100">
  <div class="container">
    <h2 class="text-2xl text-center py-3 mb-5 uppercase text-green-500 font-bold border-b-4">Tin tức bánh dừa nướng</h2>

    <ul class="news_list flex flex-wrap justify-between gap-y-5">
      <?php
        $query_news = new WP_query(array(
          'post_type' => 'news',
          'posts_per_page' => 4,
          'order' => 'ASC'
        ));

        if ($query_news->have_posts()) :
          while($query_news->have_posts()) : $query_news->the_post();?>
          <li class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <a
              href="<?php the_permalink(); ?>"
              class="flex flex-col px-3 rounded-lg py-1 hover:opacity-80 transition-all"
            >
              <?php the_post_thumbnail(); ?>
              <h3 class="text-lg text-red-700 font-bold my-3"><?php the_title(); ?></h3>
              <div class="text-justify">
                <?php the_excerpt(); ?>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        <?php else: ?>
          <li>Chưa có đăng bài tin tức nào</li>
      <?php endif; ?>
    </ul>

    <div class="text-center mt-5">
      <a
        href="/news/"
        class="text-white inline-block rounded-lg bg-primary py-3 px-10 hover:bg-green-400 transition-all text-center"
        >Xem tất cả</a>
    </div>
  </div>
</section>