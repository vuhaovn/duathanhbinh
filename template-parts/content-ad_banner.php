<section class="md:py-10 flex justify-center">
    <?php
      $query_advertise = new WP_query(array(
        'post_type' => 'advertise',
        'posts_per_page' => 1,
      ));

      if ($query_advertise->have_posts()) :
        while($query_advertise->have_posts()) : $query_advertise->the_post();
      ?>
        <div class="w-full md:w-1/2 py-5 flex justify-center">
          <a href="https://www.facebook.com/banhduanuongthanhbinh" target="_blank" class="transition-all hover:opacity-80">
            <?php the_post_thumbnail(); ?>
          </a>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
</section>