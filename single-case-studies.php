<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$class = is_front_page() ? '' : 'main';

?>
<main id="main" class="<?=$class?> single-case-studies">
    <section class="cs-hero has-slj-dark-background-color py-5 text-start">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <h1 class="bc"><?=get_the_title()?></h1>
                </div>
            </div>
    </section>
    <section style="background:linear-gradient(180deg, var(--clr-dark-900) 33%, transparent 33%)" class="mb-5">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'full')?>"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-lg-6">
                <?php
                $model = get_field('vehicle_model');
$name = $model->name;
$img = get_field('image', $model);
?>
                <img class="cs-model_image" src="<?=$img?>" alt="">
                <br>
                <div class="cs-overview">
                    <div><strong>Vehicle Model:</strong>
                        <?=$name?>
                    </div>
                    <?php
                    if (get_field('registration') ?? null) {
                        ?>
                    <div><strong>Registration:</strong>
                        <?=get_field('registration')?>
                    </div>
                    <?php
                    }
if (get_field('year_of_manufacture') ?? null) {
    ?>
                    <div><strong>Year of Manufacture:</strong>
                        <?=get_field('year_of_manufacture')?>
                    </div>
                    <?php
}
?>
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