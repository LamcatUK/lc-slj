<section class="three_images__container">
    <?php
    if (get_field('container')) {
        echo '<div class="container-xl">';
    }
    ?>
    <div class="three_images">
        <?php
    while (have_rows('images')) {
        the_row();
        echo wp_get_attachment_image(get_sub_field('image'), 'large');
    }
    ?>
    </div>
    <?php
    if (get_field('container')) {
        echo '</div>';
    }
    ?>
</section>