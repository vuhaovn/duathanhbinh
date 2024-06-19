<section class="feedback my-10 py-10">
  <div class="container">
    <h2
      class="text-2xl text-center py-3 mb-5 uppercase text-green-500 font-bold border-b-4"
    >
      Phản hồi của khách hàng
    </h2>
    <div class="swiper">
      <div class="feedback_list swiper-wrapper">
        <?php
          $query_feedback = new WP_query(array(
            'category_name' => 'feedback',
            'posts_per_page' => -1,
          ));

          if($query_feedback->have_posts()):
            while($query_feedback->have_posts()): $query_feedback->the_post();?>
              <div class="swiper-slide">
                <div class="flex flex-col items-center">
                  <?php the_post_thumbnail(); ?>
                  <h3 class="text-lg my-3 font-bold"><?php the_title(); ?></h3>
                  <div class="text-center">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php else: ?>
              <div class="text-3xl text-center py-10">Chưa có ai phản hồi về sản phẫm</div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>