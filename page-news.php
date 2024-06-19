<?php get_header(); ?>
<main>
  <div class="container">
  <?php
      get_template_part('template-parts/content', 'breadcrumb');
    ?>
    <div class="py-10">
      <h2 class="text-5xl mb-5">Danh sách <?php the_title(); ?></h2>
      <ul class="news_list flex flex-wrap gap-y-5">
        <?php
          $query_news = new WP_query(array(
            'post_type' => 'news',
            'posts_per_page' => -1,
          ));

          if ($query_news->have_posts()) :
            while($query_news->have_posts()) : $query_news->the_post();?>
            <li class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex flex-col px-3">
              <?php the_post_thumbnail(); ?>
              <h3 class="text-lg font-bold my-3"><?php the_title(); ?></h3>
              <div>
                <?php the_excerpt(); ?>
              </div>
              <a
                href="<?php the_permalink(); ?>"
                class="text-white block rounded-lg bg-primary py-1 mt-3 hover:bg-green-400 transition-all text-center"
                >Xem chi tiết</a
              >
            </li>
            <?php endwhile; ?>
          <?php else: ?>
            <li>Chưa có đăng bài tin tức nào</li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</main>
<?php get_footer(); ?>