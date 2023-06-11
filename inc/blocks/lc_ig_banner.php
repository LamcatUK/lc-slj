<section class="ig_banner">
    <a class="ig_banner__container"
        href="<?=get_field('social', 'options')['instagram_url']?>">
        <?php
    while (have_rows('images')) {
        the_row();
        echo wp_get_attachment_image(get_sub_field('image'), 'large');
    }
        ?>
    </a>
    <div class="container-xl">
        <?=do_shortcode('[social_ig_banner]')?>
    </div>
</section>