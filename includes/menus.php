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
        'all_destinations_page',                //function
        'dashicons-location-alt',               //icon_url
        '5'                                     //position
    );

    add_submenu_page(
        'destinations',                         //parent_slug
        'Add country',                          //page_title
        'Add country',                          //menu_title
        'edit_plugins',                         //capability
        'add_country',                          //menu_slug
        'add_country_page'                      //function
    );

    add_submenu_page(
        'destinations',
        'Add city',
        'Add city',
        'edit_plugins',
        'add_city',
        'add_city_page'
    );

    add_submenu_page(
        'destinations',
        'Add company',
        'Add company',
        'edit_plugins',
        'add_company',
        'add_company_page'
    );
}


//підключення html - форм, через які здійснюється управління плагіном
function all_destinations_page() {
    require_once 'templates/all_destinations.php';
}
function add_country_page() {
    require_once 'templates/add_country.php';
}
function add_city_page() {
    require_once 'templates/add_city.php';
}
function add_company_page() {
    require_once 'templates/add_company.php';
}

?>