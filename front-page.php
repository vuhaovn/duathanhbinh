<?php get_header(); ?>
    <main>
      <?php
        get_template_part('template-parts/content', 'main_banner');
      ?>

      <?php
        get_template_part('template-parts/content', 'introduce');
      ?>

      <?php
        get_template_part('template-parts/content', 'newproduct');
      ?>

      <?php
        get_template_part('template-parts/content', 'ad_banner');
      ?>

      <?php
        get_template_part('template-parts/content', 'news');
      ?>

      <?php
        get_template_part('template-parts/content', 'feedback');
      ?>

      <?php
        get_template_part('template-parts/content', 'giaychungnhan');
      ?>

    </main>
<?php get_footer(); ?>