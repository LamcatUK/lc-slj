<section class="case_studies">
    <div class="container-xl">
        <h2 class="mb-5"><?=get_field('title')?>
        </h2>

        <?php
        $q = new WP_Query(array(
            'post_type' => 'case-studies',
            'posts_per_page' => -1
        ));
        while ($q->have_posts()) {
            $q->the_post();
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
</section>