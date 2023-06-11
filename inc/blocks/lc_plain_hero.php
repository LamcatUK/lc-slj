<div class="has-slj-dark-background-color py-5 text-center">
    <img src="<?=get_stylesheet_directory_uri()?>/img/slj-logo.png"
        width="100" height="100" class="mb-4">
    <div class="bc">
        <?php
    if (wp_get_post_parent_id(get_the_ID()) != 0) {
        ?>
        <a href="/about-us/">About Us</a> /
        <?php
    }
    echo '<h1>' . get_the_title() . '</h1>';
    ?>
    </div>
</div>