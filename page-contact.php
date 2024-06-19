<?php get_header(); ?>
<main>
  <div class="container">
  <?php
      get_template_part('template-parts/content', 'breadcrumb');
    ?>
    <div class="py-10">
      <h2 class="text-5xl mb-5"><?php the_title(); ?></h2>
      <div class="md:flex">
        <div class="form w-full md:w-1/3">
          <?php the_content(); ?>
        </div>
        <div class="maps w-full md:w-2/3 md:px-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.365191140107!2d109.02492079752348!3d14.463707381258413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3168c51ebf5d6d7b%3A0xf0cc50af1fe85ec0!2zVFgvMjggVMO0IEhp4bq_biBUaMOgbmgsIEhvw6BpIFTDom4sIEhvw6BpIE5oxqFuLCBCw6xuaCDEkOG7i25oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1691401441197!5m2!1sen!2s" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>