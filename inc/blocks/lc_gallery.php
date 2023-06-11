<?php

$filter = null;

if (isset($_GET['model'])) {
    $filter = $_GET['model'];
}

?>
<section class="gallery pt-4 pb-5 has-slj-dark-background-color">
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-1 ff-heading d-flex justify-content-center align-items-center">Model:</div>
            <div class="col-md-5">
                <select name="model" id="model" class="form-select">
                    <option value="">All</option>
                    <?php
        $terms = get_terms(array('taxonomy' => 'attachment_category'));
foreach ($terms as $t) {
    $selected = $t->slug == $filter ? 'selected' : '';
    ?>
                    <option value="<?=$t->slug?>" <?=$selected?>>
                        <?=$t->name?>
                    </option>
                    <?php
}
?>
                </select>
            </div>
        </div>

        <div class="gallery-grid" id="gallery">
            <?php
foreach (get_field('gallery') as $img) {
    // $terms = get_attachment_taxonomies($img);
    $objTerms = wp_get_object_terms($img, 'attachment_category');

    // if ($objTerms[0] ?? null) {
    //     echo '<span>NO MATCH</span>';
    //     continue;
    // } elseif ($objTerms[0]->slug != $filter) {
    //     echo '<span>NO MATCH</span>';
    //     continue;
    // }

    if ($filter != null) {
        if ($objTerms) {
            if ($objTerms[0]->slug != $filter) {
                continue;
            } else {
                // echo 'TERM = ' . $objTerms[0]->slug;
            }
        } else {
            continue;
        }
    }
    ?>
            <li class="item">
                <span class="imageframe">
                    <a href="<?=wp_get_attachment_image_url($img, 'full')?>"
                        data-fancybox="gallery" class="grid-item text-center" aria-label="View image">
                        <?=wp_get_attachment_image($img, 'large')?></a>
                </span>
            </li>
            <?php
}
?>
        </div>

    </div>
</section>
<?php
add_action('wp_footer', function () {
    $the_theme = wp_get_theme();
    ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script>
    Fancybox.bind("[data-fancybox]", {});

    document.getElementById("model").addEventListener("change", function() {
        var model = ''
        if (this.value) {
            model = '/?model=' + this.value
        }
        var goto = location.protocol + '//' + location.host + location.pathname + model
        window.location = goto
    });
</script>
<?php
}, 9999);
?>