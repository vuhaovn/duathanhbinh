<?php get_header(); ?>
<main>
  <div class="container">
    <div class="py-10">
      <ul class="product_list flex flex-wrap justify-between">
        <?php
          if(have_posts()):
            while(have_posts()): the_post();
            ?>
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
            <li>Không tìm thấy bài viết nào nào</li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</main>
<?php get_footer(); ?>