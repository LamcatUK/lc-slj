<section class="parade py-5">
    <div class="container-xl">
        <h2 class="text-center has-divider">Own a Bristol?</h2>
        <p class="text-center ff-heading mb-4">Find your model, get in touch and tell us all about it.</p>
        <div class="parade__cards">
            <?php
while (have_rows('cars', 'options')) {
    the_row();
    ?>
            <a href="/contact/?subject=<?=get_sub_field('title')?>"
                class="parade_card">
                <img src="<?=get_sub_field('image')?>"
                    alt="<?=get_sub_field('title')?>">
                <div class="parade_card__title">
                    <?=get_sub_field('title')?>
                </div>
                <div class="parade_card__year">
                    <?=get_sub_field('years')?>
                </div>
                <hr>
                <div class="parade_card__link">Get in touch</div>
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