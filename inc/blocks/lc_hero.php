<section class="hero carousel slide carousel-fade" data-bs-ride="carousel" id="heroCarousel">
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
        <div class="carousel-item <?=$active?>">
            <img src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'full')?>"
                class="d-block w-100" alt="">
        </div>
        <?php
        $active = '';
    }
    ?>
    </div>
    <div class="overlay">
        <img class="hero__logo"
            src="<?=get_stylesheet_directory_uri()?>/img/slj-logo.png"
            width="261" height="261">
        <h1 class="hero__title">
            <?=get_field('title')?>
            HELLO
        </h1>
        <?php
            if (get_field('show_specialists')) {
                ?>
        <img class="hero__specialists"
            src="<?=get_stylesheet_directory_uri()?>/img/specialists.svg"
            width="860" height="181" alt="">
        <?php
            }
    ?>
    </div>
</section>