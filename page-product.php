<?php get_header(); ?>
<main>
  <div class="container">
    <?php
      get_template_part('template-parts/content', 'breadcrumb');
    ?>
    <div class="py-10">
      <h2 class="text-5xl mb-5">Danh sách <?php the_title(); ?></h2>
      <ul class="product_list flex flex-wrap gap-y-5">
        <?php
          $query_cake = new WP_query(array(
            'post_type' => 'product',
            'posts_per_page' => -1,
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
                  <span class="text-xl mt-3"><?php the_title(); ?></span>
                  <span class="text-xl text-red-700"><?php the_field('price'); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          <?php else: ?>
            <li>Chưa có sản phẫm nào</li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</main>
<?php get_footer(); ?>