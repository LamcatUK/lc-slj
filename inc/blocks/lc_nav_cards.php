<section class="nav_cards py-5">
    <div class="container-xl">
        <div class="row justify-content-center g-1">
            <?php
            while (have_rows('pages')) {
                the_row();
                ?>
            <div class="col-sm-4 col-lg-3">
                <a href="<?=get_the_permalink(get_sub_field('page_link'))?>"
                    class="nav_card">
                    <div class="nav_card__image">
                        <img src="<?=wp_get_attachment_image_url(get_sub_field('card_image'), 'large')?>"
                            alt="<?=get_the_title(get_sub_field('page_link'))?>"
                            class="w-100">
                    </div>
                    <div class="nav_card__title">
                        <?=get_the_title(get_sub_field('page_link'))?>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>