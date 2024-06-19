<?php get_header(); ?>
<main>
  <div class="container">
    <div class="py-10">
      <?php if( get_post_type() === 'product' ): ?>
        <ul class="product_list flex flex-wrap justify-between">
          <?php if(have_posts()) :
            while(have_posts()) :
              the_post(); ?>
                <li class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                  <a href="<?php the_permalink(); ?>" class="flex flex-col items-center hover:opacity-70 transition-opacity">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <span class="text-xl mt-3"><?php the_title(); ?></span>
                    <span class="text-xl text-red-700"><?php the_field('price'); ?> VNĐ</span>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else:?>
              <li class="text-xl mt-3">Không có sản phẩm nào</li>
            <?php endif;?>
        </ul>

      <?php else: ?>
        <ul class="news_list flex flex-wrap justify-between gap-y-5">
          <?php if(have_posts()) :
            while(have_posts()) :
              the_post(); ?>
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
            <?php else:?>
              <li class="text-xl mt-3">Không có bài viết nào</li>
            <?php endif;?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>