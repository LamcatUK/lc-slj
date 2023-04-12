<?php

$half = get_field('order') == 'text_left' ? 'right-half' : 'left-half';
$offset = get_field('order') == 'text_left' ? '' : 'offset-lg-6';

?>
<section class="left_right_text_image container-fluid half-fluid">
    <div class="container-xl">
        <div class="row">
            <div
                class="col-lg-6 position-lg-absolute <?=$half?> h-100">
                <?=wp_get_attachment_image(get_field('image'), 'full', false, [ 'class' => 'fit' ])?>
            </div>
            <div
                class="col-lg-6 <?=$offset?> py-5 ps-lg-5 text-half">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <?php
                    if (get_field('title')) {
                        ?>
                    <h2><?=get_field('title')?>
                    </h2>
                    <?php
                    }
?>
                    <div>
                        <?=get_field('content')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>