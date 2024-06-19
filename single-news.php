<?php get_header(); ?>
<main>
  <div class="container">
    <?php
      get_template_part('template-parts/content', 'breadcrumb');
    ?>
    <div class="py-10">
      <h2 class="text-5xl mb-5"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>