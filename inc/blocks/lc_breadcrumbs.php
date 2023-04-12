<?php
$classes = [ 'breadcrumbs py-4' ];
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
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
?>
    </div>
</section>