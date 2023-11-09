<?php
/* Template Name: Plain Page */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$modal = 0;
?>
<style>
    strong {
        font-family: var(--ff-heading);
    }
</style>
<main id="main" class="plain-page pt-5">
    <div class="container-xl py-5">
        <h1 class="mb-4 text-center"><?=get_the_title()?></h1>
        <?php
        the_post();
the_content();
?>
    </div>
</main>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    var header = document.getElementById("navbar");
    header.classList.add('plain');
</script>
<?php
});

get_footer();
?>