<?php
$team = get_field('team');
?>
<section class="team pb-4">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-3">
                <h3 class="mb-4"><?=get_term($team)->name?></h3>
            </div>
            <div class="col-md-9 people">
                <?php
                $q = new WP_Query(array(
                    'post_type' => 'people',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'team',
                            'field' => 'term_id',
                            'terms' => $team
                        )
                    )
                ));

while ($q->have_posts()) {
    $q->the_post();
    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
                <div class="person">
                    <img class="person__image" src="<?=$img?>">
                    <div class="person__detail">
                        <div class="person__name">
                            <?=get_the_title()?><br>
                            (<?=get_field('role', get_the_ID())?>)
                        </div>
                        <div class="person__bio">
                            <?=get_the_content(get_the_ID())?>
                        </div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
</section>