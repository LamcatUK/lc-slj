<?php
$class = get_field('columns') == 2 ? 'two' : 'three';

$classes = $block['className'] ?? null;
?>
<section
    class="<?=$class?>_images__container <?=$classes?>">
    <?php
    if (get_field('container')) {
        echo '<div class="container-xl">';
    }
?>
    <div class="<?=$class?>_images">
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