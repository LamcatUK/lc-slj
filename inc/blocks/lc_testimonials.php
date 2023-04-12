<?php
$classes = [ 'testimonials py-5' ];
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
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-lg-6">

                <?php
$q = new WP_Query(array(
    'post_type' => 'testimonials',
    'posts_per_page' => -1,
));
while ($q->have_posts()) {
    $q->the_post();
    ?>
                <div class="testimonial">
                    <h3><?=get_field('testimonial_title', get_the_ID())?>
                    </h3>
                    <?=get_the_content()?>
                    <div class="testimonial__cite">
                        <?=get_the_title()?>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
</section>