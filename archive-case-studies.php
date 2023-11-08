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
    <div class="cs-hero has-slj-dark-background-color py-5 text-center">
        <div class="bc"><a href="/about-us/">About Us</a> / <h1>Case Studies</h1>
        </div>
    </div>
    <div class="case_studies container-xl py-5">
        <?php
        while (have_posts()) {
            the_post();
            ?>
        <div class="row">
            <div class="col-md-3 order-md-2">
                <img class="case_studies__image"
                    src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>">
            </div>
            <div class="col-md-9 order-md-1">
                <h3 class="mb-4"><?=get_the_title()?></h3>
                <p><?=get_field('teaser', get_the_ID())?>
                </p>
                <a href="<?=get_the_permalink()?>"
                    class="arrowlink">Read
                    more</a>
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