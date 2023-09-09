<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-slj
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/cormorant-garamond-v16-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/josefin-sans-v25-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php

// ORGANIZATION SCHEMA

    if (get_field('ga_property', 'options')) {
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
    }
    if (get_field('gtm_property', 'options')) {
        ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
    }
    if (get_field('google_site_verification', 'options')) {
        echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
    }
    if (get_field('bing_site_verification', 'options')) {
        echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
    }
?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
do_action('wp_body_open');
?>
    <div class="site" id="page">
        <nav id="navbar" class="fixed-top navbar" aria-labelledby="main-nav-label">
            <div id="navigation">
                <button class="navbar-toggler collapsed" id="navToggle" data-bs-toggle="collapse"
                    data-bs-target="#primaryNav" type="button">
                    <span class="navbar-icon"><i class="fa-solid fa-bars"></i></span>
                    <div class="close-icon py-1"><i class="fa-solid fa-times"></i></div>
                </button>
                <?php
if (is_front_page()) {
    ?>
                <a class="text-center navbarFullLogo" href="/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/logo--full.png"
                        alt="Spencer Lane-Jones">
                    Bristol Motor Car Specialists
                </a>
                <?php
} else {
    ?>
                <a class="text-center navbarFullLogo logo--short" href="/">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/logo--full.png"
                        alt="Spencer Lane-Jones">
                </a>
                <?php
}
?>
                <div class="pe-4">
                    <?php
                    $cls = basename(get_permalink()) == 'contact' ? 'current_page_item' : '';
?>
                    <ul
                        class="navbar-nav nav-socials d-flex flex-md-row align-items-center justify-content-md-end gap-md-3">
                        <li><a href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"
                                class="nav-link icon icon--phone fs-500 pt-1"></a>
                        </li>
                        <li>
                            <?=do_shortcode(('[contact_email_icon class="nav-link"]'))?>
                        </li>
                        <li>
                            <?=do_shortcode(('[social_ig_icon class="nav-link"]'))?>
                        </li>
                        <!-- <li>
                            <?=do_shortcode(('[social_fb_icon class="nav-link"]'))?>
                        </li> -->
                    </ul>
                </div>
            </div>
            <?php
            wp_nav_menu(array(
'theme_location'  => 'primary_nav',
'container_class' => 'collapse navbar-collapse', // justify-content-start',
'container_id'    => 'primaryNav',
'menu_class'      => 'navbar-nav w-100', // justify-content-between',
'fallback_cb'     => '',
'menu_id'         => 'main-menu',
'depth'           => 2,
'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            ));
?>

        </nav>