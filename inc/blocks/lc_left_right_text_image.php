<?php
$colour = get_field('theme');
$background = '';
switch ($colour) {
    case 'Dark':
        $background = 'bg--grey';
        break;
    case 'Light':
        $background = '';
        break;
}

$breakout = $background;

$padding = '';
if (get_field('padding')[0] ?? null && get_field('padding')[0] == 'Yes') {
    $padding = 'py-5';
}

$splitText = 'col-lg-6';
$splitImage = 'col-lg-6';

if (get_field('split') == '6040') {
    $splitText = 'col-lg-8';
    $splitImage = 'col-lg-4';
}
if (get_field('split') == '7030') {
    $splitText = 'col-lg-10';
    $splitImage = 'col-lg-2';
}

$orderText = 'order-2 order-lg-1';
$orderImage = 'order-1 order-lg-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-lg-2';
    $orderImage = 'order-1 order-lg-1';
}

$classes = $block['className'] ?? null;
?>
<section
    class="text_image <?=$breakout?> <?=$padding?> <?=$classes?>">
    <div class="container-xl <?=$background?>">
        <div class="d-lg-none">
            <h2><?=get_field('title')?></h2>
        </div>
        <div class="row align-items-center g-4 gx-lg-5">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <h2 class="d-none d-lg-block">
                    <?=get_field('title')?>
                </h2>
                <div class="mb-4">
                    <?=get_field('content')?>
                </div>
            </div>
            <div
                class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>