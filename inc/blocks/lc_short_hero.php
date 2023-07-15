<section class="short_hero container-fluid">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4 right-third">
                <img src="<?=wp_get_attachment_image_url(get_field('image'), 'full')?>"
                    class="fit">
            </div>
            <div class="col-lg-8 py-5 ps-lg-5 left-side">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icon--<?=get_field('icon')?>--wo.svg"
                    alt="">
                <h1><?=get_field('title')?></h1>
            </div>
        </div>
    </div>
</section>