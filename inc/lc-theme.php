<?php

require_once LC_THEME_DIR . '/inc/lc-performance.php';
require_once LC_THEME_DIR . '/inc/lc-utility.php';
require_once LC_THEME_DIR . '/inc/lc-posttypes.php';
require_once LC_THEME_DIR . '/inc/lc-blocks.php';

function widgets_init()
{
    register_nav_menus(array(
        'primary_nav' => 'Primary Nav',
    ));

    register_nav_menus(array(
        'footer_menu1' => 'Footer 1',
        'footer_menu2' => 'Footer 2',
        'footer_menu3' => 'Footer 3',
    ));

    unregister_sidebar('hero');
    unregister_sidebar('herocanvas');
    unregister_sidebar('statichero');
    unregister_sidebar('left-sidebar');
    unregister_sidebar('right-sidebar');
    unregister_sidebar('footerfull');
    unregister_nav_menu('primary');


    // if (! function_exists('wp_terms_checklist')) {
    //     include ABSPATH . 'wp-admin/includes/template.php';
    // }

    // colours

    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => esc_html__('Extra Light', 'lc-slj'),
                'slug'  => 'slj-extralight',
                'color' => '#f8f5f1',
            ),
            array(
                'name'  => esc_html__('Light', 'lc-slj'),
                'slug'  => 'slj-light',
                'color' => '#e3DDCD',
            ),
            array(
                'name'  => esc_html__('Dark', 'lc-slj'),
                'slug'  => 'slj-dark',
                'color' => '#0c282b',
            )
        )
    );
}
add_action('widgets_init', 'widgets_init', 11);


function cb_theme_enqueue()
{
    $the_theme = wp_get_theme();

    // wp_enqueue_style('aos-stylesheet', get_stylesheet_directory_uri() . '/css/aos.css', array(), $the_theme->get('Version'));
    // wp_enqueue_script('aos-scripts', get_stylesheet_directory_uri() . '/js/aos.js', array(), $the_theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'cb_theme_enqueue');

// override Gutenberg blocks here

/*
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        // $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/heading') {
        $args['render_callback'] = 'modify_core_heading';
    }
    if ($name == 'core/separator') {
        $args['render_callback'] = 'modify_core_add_container';
    }
    if ($name == 'core/columns') {
        $args['render_callback'] = 'modify_core_add_breakout';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    if (is_singular('post') || is_page_template('page-templates/plain-page.php')) {
        return $content;
    }
    ob_start();
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}

function modify_core_heading($attributes, $content)
{
    if (is_singular('post') || is_page_template('page-templates/plain-page.php')) {
        return $content;
    }
    ob_start();
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}

function modify_core_add_breakout($attributes, $content)
{
    if (is_singular('post')) {
        return $content;
    }
    ob_start();
    if (preg_match('/breakout/', $attributes['className'])) {
        $backColor = $attributes['backgroundColor'];
        ?>
<div
    class="has-<?=$backColor?>-background-color has-background break-out py-5">
    <div class="container-xl mx-auto">
        <?=$content?>
    </div>
</div>
<?php
    } else {
        echo $content;
    }
    $content = ob_get_clean();
    return $content;
}

*/

// FORM DYNAMIC SELECT

add_filter('wpcf7_form_tag_data_option', function ($n, $options, $args) {
    if (in_array('subject', $options)) {
        $models = array();
        while (have_rows('cars', 'options')) {
            the_row();
            $models[] = get_sub_field('title');
        }
        return $models;
    }
    return $n;
}, 10, 3);


// remove default posts
function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');


function get_hero_image($slug)
{
    $page_obj = get_page_by_path($slug);
    $page = get_post($page_obj->ID);
    $blocks = parse_blocks($page->post_content);
    foreach ($blocks as $block) {
        if ('acf/slj-short-hero' !== $block['blockName']) {
            continue;
        }

        $img = $block['attrs']['data']['image'];
        $image = wp_get_attachment_image_url($img, 'full');
        return $image;
    }

    return;
}
