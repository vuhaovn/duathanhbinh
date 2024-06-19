<section class="giaychungnhan my-10 py-10">
  <div class="container">
    <h2
      class="text-2xl text-center py-3 mb-5 uppercase text-green-500 font-bold border-b-4"
    >
      Giấy chứng nhận các sản phẩm
    </h2>
    <p class="mb-5">
      A lot of the time, duplication like this isn’t even a real problem
      because it’s all together in one place, or doesn’t even actually
      exist because you’re iterating over an array of items and only
      writing the markup once
    </p>
    <div class="flex flex-wrap justify-center gap-5">
      <?php
        $query_giaychungnhan = new WP_query(array(
          'post_type' => 'giaychungnhan',
          'posts_per_page' => 3,
        ));

        if ($query_giaychungnhan->have_posts()) :
          while($query_giaychungnhan->have_posts()) : $query_giaychungnhan->the_post();?>
          <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</section>