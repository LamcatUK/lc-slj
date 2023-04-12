<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$modal = 0;
?>
<main id="main" class="plain-page">
    <div class="container-xl pb-5">
        <h1 class="mb-4">404</h1>
        <div class="h2">Page not found</div>
        <div class="pb-4">The page you were looking for cannot be found.</div>
        <div class="pb-4">Please return to the <a
                href="<?=get_home_url()?>">homepage</a></div>
    </div>
</main>
<?php


get_footer();
