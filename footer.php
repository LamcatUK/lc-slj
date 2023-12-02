<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-slj
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$about = get_page_by_path('about-us');
$gallery = get_page_by_path('about-us/gallery');
$pm = get_page_by_path('project-management-restoration');

switch (get_the_ID()) {
    case $gallery->ID:
        $class = 'has-slj-dark-background-color';
        break;
    case $about->ID:
        $class = 'has-slj-light-background-color';
        break;
    case $pm->ID:
        $class = 'bg--grey';
        break;
    default:
        $class = '';
}

?>
<div class="pre_footer <?=$class?>">
    <div class="container-xl py-5 text-center">
        <img src="<?=get_stylesheet_directory_uri()?>/img/bristol-logo.png"
            alt="" width=150 height=150>
    </div>
</div>
<footer class="">
    <div class="footer-main container-xl py-5">
        <div class="row gy-4">
            <div class="col-md-3 d-flex flex-md-column justify-content-evenly justify-content-md-between">
                <div>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/slj-logo.png"
                        width="200" height="200" class="footer-logo">
                    <div class="social_icons">
                        <?=do_shortcode('[social_fb_icon]')?>
                        <?=do_shortcode('[social_ig_icon]')?>
                    </div>
                </div>
                <div>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/rmi-logo.svg"
                        alt="Retail Motor Industry Federation" width="386" height="115" class="footer-rmi">
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-title">Contact</div>
                <div class="footer-phone">
                    <?=do_shortcode('[contact_phone]')?>
                </div>
                <div class="footer-email mb-4 mb-md-5">
                    <?=do_shortcode('[contact_email]')?>
                </div>
                <div>
                    <?=get_field('contact_address', 'options')?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-title">Spencer Lane-Jones</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
                <hr>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
            <div class="col-md-3">
                <div class="footer-title">Information</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu3'))?>
                <hr>
                <p>Opening Hours</p>
                <?=get_field('opening_hours', 'options')?>
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container-xl d-flex justify-content-between flex-wrap pb-2 pt-2">
            <div class="text-start mx-auto mb-4 mb-lg-0 ms-lg-0">&copy;
                <?=date('Y')?> Spencer Lane-Jones
                Ltd.
            </div>
            <div class="text-end mx-auto me-lg-0">
                <a href="/privacy-policy/">Privacy Policy</a> |
                <a href="/cookie-policy/">Cookie Policy</a> |
                <a href="/terms-conditions/">Terms & Conditions</a>
            </div>
        </div>
    </div>
    </div><!-- #page -->
    <?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
?>
    </body>

    </html>