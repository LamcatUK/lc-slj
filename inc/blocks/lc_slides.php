<section class="slides">
    <div class="container-xl d-flex flex-wrap justify-content-center">
        <a href="<?=get_stylesheet_directory_uri()?>/img/slides-left-1.jpg"
            data-fancybox="slides">
            <img src="<?=get_stylesheet_directory_uri()?>/img/slides-left-1.png"
                alt=""></a>
        <a href="<?=get_stylesheet_directory_uri()?>/img/slides-left-2.jpg"
            data-fancybox="slides">
            <img src="<?=get_stylesheet_directory_uri()?>/img/slides-left-2.png"
                alt=""></a>
        <a href="<?=get_stylesheet_directory_uri()?>/img/slides-right-1.jpg"
            data-fancybox="slides">
            <img src="<?=get_stylesheet_directory_uri()?>/img/slides-right-1.png"
                alt=""></a>
        <a href="<?=get_stylesheet_directory_uri()?>/img/slides-right-2.jpg"
            data-fancybox="slides">
            <img src="<?=get_stylesheet_directory_uri()?>/img/slides-right-2.png"
                alt=""></a>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script>
    Fancybox.bind("[data-fancybox]", {
        Images: {
            zoom: false,
        },
        hideScrollbar: false
    });
</script>
<?php
});
        ?>