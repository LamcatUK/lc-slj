<?php
$classes = [ 'one_col_title py-5' ];
if (! empty($block['className'])) {
    $classes = array_merge($classes, explode(' ', $block['className']));
}
if (! empty($block['backgroundColor'])) {
    $classes[] = 'has-background';
    $classes[] = 'has-' . $block['backgroundColor'] . '-background-color';
}
$class = esc_attr(join(' ', $classes))
?>
<section class="<?=$class?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <?php
                if (get_field('show_specialists')) {
                    ?>
                <img src="<?=get_stylesheet_directory_uri()?>/img/specialists.svg"
                    alt="specialists" class="mb-4 w-75 mx-auto d-flex">
                <?php
                }
                if (get_field('title')) {
                    ?>
                <h2 class="text-upper mb-4 one_col_title__title">
                    <?=get_field('title')?>
                </h2>
                <?php
                }
?>
                <div class="one_col_content">
                    <?=get_field('content')?>
                </div>
            </div>
        </div>
    </div>
</section>