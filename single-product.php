<?php get_header(); ?>
<main>
  <div class="container">
      <?php
        get_template_part('template-parts/content', 'breadcrumb');
      ?>

    <div class="py-10">
      <h2 class="text-5xl mb-5"><?php the_title(); ?></h2>
      <div class="md:flex">
        <div class="thumbnail w-full md:w-1/3">
          <?php the_post_thumbnail('large');?>
        </div>
        <div class="information w-full md:w-1/2 md:ml-5 mt-5">
          <?php the_content();?>
        </div>
      </div>

      <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>