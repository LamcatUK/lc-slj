<?php
/**
 * Case Studies archive index
 *
 * @package lc-slj
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main class="cs-index">
    <div class="has-slj-dark-background-color py-5 text-center">
        <img src="<?=get_stylesheet_directory_uri()?>/img/slj-logo.png"
            width="100" height="100" class="mb-4">
        <div class="bc"><a href="/about-us/">About Us</a> / <h1>Case Studies</h1>
        </div>
    </div>
    <div class="case_studies container-xl py-5">
        <?php
        while (have_posts()) {
            the_post();
            $preview = get_field('preview', get_the_ID());
            ?>
        <div class="row">
            <div class="col-md-4 order-md-2">
                <div class="case_studies__image_container">
                    <img class="imgMain"
                        src="<?=wp_get_attachment_image_url($preview['main_image'], 'large')?>">
                    <img class="imgSecond"
                        src="<?=wp_get_attachment_image_url($preview['second_image'], 'large')?>">
                    <img class="imgThird"
                        src="<?=wp_get_attachment_image_url($preview['third_image'], 'large')?>">
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <h3><?=get_the_title()?></h3>
                <p class="case_studies__date">
                    <?=get_the_date('F Y')?>
                </p>
                <p><?=$preview['teaser']?></p>
                <a href="<?=get_the_permalink()?>"
                    class="arrowlink">Read more</a>
            </div>
        </div>
        <hr>
        <?php
        }
?>
    </div>
</main>
<?php
get_footer();
?>