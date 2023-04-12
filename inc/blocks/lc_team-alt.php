<?php
$team = get_field('team');
?>
<section class="team pb-4">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-3">
                <h3 class="mb-4"><?=get_term($team)->name?></h3>
            </div>
            <div class="col-md-9 people-cards px-2">
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

$biodata = array();
while ($q->have_posts()) {
    $q->the_post();
    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
                <button
                    id="<?=basename(get_permalink(get_the_ID()))?>"
                    class="person-card">
                    <figure>
                        <img src="<?=$img?>"
                            alt="<?=get_the_title()?>">
                    </figure>
                    <figcaption>
                        <div class="card__name">
                            <?=get_the_title()?><br>
                            (<?=get_field('role', get_the_ID())?>)
                        </div>
                    </figcaption>
                </button>
                <?php
                $bio = get_the_content(get_the_ID());
    $biodata[] = '<div class="bio-card" id="' . basename(get_permalink(get_the_ID())) . '-info"><h3>' . get_the_title() . '<span class="icon icon--close"></span></h3><p>' . $bio . '</p></div>';
}
?>
            </div>
        </div>
    </div>
    <div class="bio-data">
        <?php
        foreach ($biodata as $b) {
            echo $b;
        }
?>
    </div>
</section>