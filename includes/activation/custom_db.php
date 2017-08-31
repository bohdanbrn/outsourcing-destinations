<?php

/*
global $wpdb;
//db prefix
$db_prefix = $wpdb->get_blog_prefix();
$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
*/

require_once('tables/country.php');
require_once('tables/city.php');

function create_destinations_tables() {
    create_countries_table();
    //create_cities_table();
}

?>