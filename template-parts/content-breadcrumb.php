<div class="breadcrumb mt-10">
    <a href="<?php echo home_url(); ?>">Trang chủ</a>
    <?php
        if (is_single()) {
            echo " > ";
            $post_type = get_post_type_object(get_post_type());
            echo '<a href="'. home_url() .'/'. $post_type->name . '">' . $post_type->label . '</a>';
            echo " > ";
            the_title();
        } elseif (is_post_type_archive()) {
            $post_type = get_post_type_object(get_post_type());
            echo " > " . $post_type->label;
        } elseif (is_tax()) {
            $term = get_queried_object();
            $taxonomy = get_taxonomy($term->taxonomy);
            echo " > ";
            echo '<a href="' . get_post_type_archive_link($taxonomy->object_type[0]) . '">' . $taxonomy->labels->singular_name . '</a>';
            echo " > ";
            echo $term->name;
        } elseif (is_page()) {
            echo " > ";
            the_title();
        }
    ?>
</div>