<?php

function lc_register_post_types()
{
    $args = [
        "label" => "Case Studies",
        "labels" => [
            "name" => "Case Studies",
            "singular_name" => "Case Study",
        ],
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-book",
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "about-us/case-studies", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title",  "thumbnail", "editor" ],
        "show_in_graphql" => false,
        "exclude_from_search" => false
    ];

    register_post_type("case-studies", $args);

    $args = [
        "label" => "Testimonials",
        "labels" => [
            "name" => "Testimonials",
            "singular_name" => "Testimonial",
        ],
        "description" => "",
        "public" => false,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-format-quote",
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        // "rewrite" => [ "slug" => "case-studies", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title",  "thumbnail", "editor" ],
        "show_in_graphql" => false,
        "exclude_from_search" => true
    ];

    register_post_type("testimonials", $args);

    $args = [
        "label" => "People",
        "labels" => [
            "name" => "People",
            "singular_name" => "Person",
        ],
        "description" => "",
        "public" => false,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-groups",
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        // "rewrite" => [ "slug" => "case-studies", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title",  "thumbnail", "editor" ],
        "show_in_graphql" => false,
        "exclude_from_search" => true
    ];

    register_post_type("people", $args);
}

add_action('init', 'lc_register_post_types');

function lc_register_taxes()
{
    $args = [
        "label" => "Teams",
        "labels" => [
            "name" => "Teams",
            "singular_name" => "Team",
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "apis",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy("team", [ "people" ], $args);

    // $args = [
    //     "label" => "Models",
    //     "labels" => [
    //         "name" => "Models",
    //         "singular_name" => "Model",
    //     ],
    //     "public" => true,
    //     "publicly_queryable" => false,
    //     "hierarchical" => true,
    //     "show_ui" => true,
    //     "show_in_menu" => true,
    //     "show_in_nav_menus" => true,
    //     "query_var" => true,
    //     "rewrite" => false,
    //     "show_admin_column" => true,
    //     "show_in_rest" => true,
    //     "show_tagcloud" => false,
    //     "rest_base" => "apis",
    //     "rest_controller_class" => "WP_REST_Terms_Controller",
    //     "show_in_quick_edit" => true,
    //     "show_in_graphql" => false,
    // ];
    // register_taxonomy("models", [ "attachment" ], $args);
}
add_action('init', 'lc_register_taxes');


add_action('after_switch_theme', 'lc_rewrite_flush');
function lc_rewrite_flush()
{
    lc_register_post_types();
    flush_rewrite_rules();
}
