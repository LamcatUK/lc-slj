<?php
$classes = $block['className'] ?? null;
$bg = $block['backgroundColor'] ? 'has-' . $block['backgroundColor'] . '-background-color' : null;

$vimeo_id = get_field('vimeo_id') ?? null;

?>
<!-- vimeo_block -->
<section
    class="vimeo_block <?=$bg?> <?=$classes?>">
    <div class="container-xl">
        <div class="col-lg-6 offset-lg-3 d-flex flex-column justify-content-center">
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://player.vimeo.com/video/<?=$vimeo_id?>?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;"
                    allow="autoplay; fullscreen; picture-in-picture"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" title=""></iframe>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script src="https://player.vimeo.com/api/player.js"></script>
<?php
});
?>