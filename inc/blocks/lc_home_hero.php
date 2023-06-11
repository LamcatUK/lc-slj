<section class="home-hero">
    <div class="home-hero__left carousel slide carousel-fade" data-bs-ride="carousel" id="heroCarousel">
        <?php
        $slideCount = count(get_field('background'));
        if ($slideCount > 1) {
            $active = 'active';
            ?>
        <div class="carousel-indicators">
            <?php
            for ($i = 0; $i < $slideCount; $i++) {
                ?>
            <button type="button" data-bs-target="#heroCarousel"
                data-bs-slide-to="<?=$i?>"
                class="<?=$active?>"></button>
            <?php
                $active = '';
            }
            ?>
        </div>
        <?php
        }
        ?>
        <div class="carousel-inner">
            <?php
            $active = 'active';
        while (have_rows('background')) {
            the_row();
            ?>
            <div class="carousel-item <?=$active?>"
                style="background-image:url(<?=wp_get_attachment_image_url(get_sub_field('image'), 'full')?>)">
            </div>
            <?php
            $active = '';
        }
        ?>
        </div>

    </div>
    <div class="home-hero__right">
        <div class="home-hero__right_inner py-4">
            <img class="home-hero__logo"
                src="<?=get_stylesheet_directory_uri()?>/img/slj-logo.png"
                width="100" height="100">
            <h1 class="home-hero__title">
                Bristol Motor Car
            </h1>
            <img src="<?=get_stylesheet_directory_uri()?>/img/specialists.svg"
                alt="specialists" class="home-hero__specialists">
            <img src="<?=get_stylesheet_directory_uri()?>/img/bristol-logo.png"
                alt="" class="home-hero__bristol">
        </div>
    </div>

</section>