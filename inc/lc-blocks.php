<?php

function acf_blocks()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'				=> 'SLJ Hero',
            'title'				=> __('SLJ Hero'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_hero.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'hero', 'slideshow' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Short Hero',
            'title'				=> __('SLJ Short Hero'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_short_hero.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'hero', 'short' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Service Nav',
            'title'				=> __('SLJ Service Nav'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_service-nav.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'service', 'nav' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Team Cards',
            'title'				=> __('SLJ Team Cards'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_team.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'team', 'cards' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Team Cards ALT',
            'title'				=> __('SLJ Team Cards ALT'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_team-alt.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'team', 'cards', 'alt' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Two Col with Title',
            'title'				=> __('SLJ Two Col with Title'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_two_col_title.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'two', 'col', 'title' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ One Col with Title',
            'title'				=> __('SLJ One Col with Title'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_one_col_title.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'one', 'col', 'title' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true, 'color' => true,),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Bristol Car Parade',
            'title'				=> __('SLJ Bristol Car Parade'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_parade.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'bristol', 'car', 'parade' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Slides',
            'title'				=> __('SLJ Slides'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_slides.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'slides' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Nav Cards',
            'title'				=> __('SLJ Nav Cards'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_nav_cards.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'nav', 'cards' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Three Images',
            'title'				=> __('SLJ Three Images'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_three_images.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'three', 'images' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Breadcrumbs',
            'title'				=> __('SLJ Breadcrumbs'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_breadcrumbs.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'breadcrumbs' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true, 'color' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Gallery',
            'title'				=> __('SLJ Gallery'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_gallery.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'gallery' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Case Studies',
            'title'				=> __('SLJ Case Studies'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_case_studies.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'case', 'studies' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Left/Right Text/Image',
            'title'				=> __('SLJ Left/Right Text/Image'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_left_right_text_image.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'left', 'right', 'text', 'image' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Contact Buttons',
            'title'				=> __('SLJ Contact Buttons'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_contact_buttons.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'contact', 'buttons' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Contact Form',
            'title'				=> __('SLJ Contact Form'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_contact_form.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'contact', 'form' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Address/Map',
            'title'				=> __('SLJ Address/Map'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_address_map.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'address', 'map' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true),
        ));
        acf_register_block(array(
            'name'				=> 'SLJ Testimonials',
            'title'				=> __('SLJ Testimonials'),
            'description'		=> __(''),
            'render_template'	=> 'inc/blocks/lc_testimonials.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'testimonials' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false, 'anchor' => true, 'color' => true),
        ));
    }
}
add_action('acf/init', 'acf_blocks');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' 	=> 'Site-Wide Settings',
            'menu_title'	=> 'Site-Wide Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
        )
    );
}
