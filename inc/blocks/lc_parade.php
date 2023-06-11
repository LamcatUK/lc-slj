<section class="parade py-5">
    <div class="container-xl">
        <div class="parade__cards">
            <?php
            $terms = get_terms(array('taxonomy' => 'attachment_category','hide_empty' => false));
            foreach ($terms as $t) {
                $model = $t->slug;
                ?>
            <a href="/gallery/?model=<?=$model?>"
                class="parade_card">
                <img src="<?=get_field('image', $t)?>"
                    alt="<?=$t->name?>">
                <div class="parade_card__title">
                    <?=$t->name?>
                </div>
                <div class="parade_card__year">
                    <?=get_field('years', $t)?>
                </div>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    jQuery(function($) {
        $('.parade__cards').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            responsive: [{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    });
</script>
<?php
});
            ?>