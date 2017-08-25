<?php

//Create one top level menu and two sub menus

add_action('admin_menu', 'admin_menu');
function admin_menu() {
    // vars
    $slug = 'edit.php?post_type=destinations';

    //create top-level menu
    add_menu_page(
        'Outsourcing destinations',             //page_title - Text that will go into the HTML page title for the page when the menu is active.
        'Destinations',                         //menu_title - The on-screen name text for the submenu.             
        'edit_plugins',                         //capability - The minimum user level or the capability required to display and use this submenu page
        'destinations',                         //menu_slug - The PHP file that handles the display of the menu page content.
        'get_top_level_page',                   //function
        'dashicons-location-alt',               //icon_url
        '5'                                     //position
    );

    add_submenu_page(
        'destinations',                         //parent_slug
        'Add destinations',                     //page_title
        'Add destinations',                     //menu_title
        'edit_plugins',                         //capability
        'add_destinations',                     //menu_slug
        'get_add_new_destinations_page'         //function
    );

    add_submenu_page(
        'destinations',                         //parent_slug
        'Destinations categories',              //page_title
        'Destinations categories',              //menu_title
        'edit_plugins',                         //capability
        'destinations_categories',              //menu_slug
        'get_destinations_categories_page'      //function
    );
}


//підключення html - форми, через яку здійснюється управління плагіном
function get_top_level_page() {
    require_once 'templates/top_level_page.php';
}
function get_add_new_destinations_page() {
    require_once 'templates/new_destinations_page.php';
}
function get_destinations_categories_page() {
    require_once 'templates/destinations_categories_page.php';
}

?>