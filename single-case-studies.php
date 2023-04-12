<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$class = is_front_page() ? '' : 'main';

?>
<main id="main" class="<?=$class?> single-case-studies">
    <section class="cs-hero carousel slide mb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'full')?>"
                    class="d-block w-100" alt="">
            </div>
        </div>
        <div class="overlay">
            <div class="cs-hero__title">Spencer Lane-Jones / Case Study</div>
        </div>
    </section>
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-lg-6">
                <h1 class="cs-title"><?=get_the_title()?></h1>
                <div class="cs-date">
                    <?=get_the_date('F Y')?>
                </div>
                <hr>
                <?php
                $model = get_field('model_image');
while (have_rows('cars', 'options')) {
    the_row();
    if (get_sub_field('title') == $model) {
        ?>
                <img class="cs-model_image"
                    src="<?=get_sub_field('image')?>"
                    alt="<?=get_sub_field('title')?>">
                <?php
    }
}
?>
                <br>
                <div class="cs-overview">
                    <div><strong>Vehicle Model:</strong>
                        <?=get_field('vehicle_model')?>
                    </div>
                    <div><strong>Registration:</strong>
                        <?=get_field('registration')?>
                    </div>
                    <div><strong>Year of Manufacture:</strong>
                        <?=get_field('year_of_manufacture')?>
                    </div>
                </div>
                <?php
the_post();
the_content();
?>

                <hr>
                <a href="/about-us/case-studies/" class="arrowbefore">Back</a>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>