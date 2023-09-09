<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$modal = 0;

$class = is_front_page() ? 'front' : 'main';

?>
<main id="main" class="<?=$class?>">
    <?php the_post();
the_content(); ?>
    </section> <!-- end .content -->
</main>
<?php
get_footer();
