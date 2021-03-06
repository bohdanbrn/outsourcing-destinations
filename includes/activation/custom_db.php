<?php

require_once('tables/countries.php');
require_once('tables/cities.php');
require_once('tables/companies.php');

function create_destinations_tables() {
    create_countries_table();
    create_cities_table();
    create_companies_table();
}








/*
global $wpdb;

function create_new_table($table_name, $sql) {
    global $wpdb;

    // create new table only if the table with this name is not created yet
    if ( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        // create a table
        dbDelta( $sql );
    }
}

//db prefix
$db_prefix = $wpdb->get_blog_prefix();
$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

$country_table_name = $db_prefix . 'countries';
$city_table_name = $db_prefix . 'cities';
$company_table_name = $db_prefix. 'companies';

$city_sql = "CREATE TABLE {$city_table_name} (
    city_id int(11) unsigned NOT NULL auto_increment,
    city_name varchar(255) NOT NULL default '',
    city_parrent_id int(11) unsigned NOT NULL default '0',
    city_short_description TEXT NOT NULL default '',
    city_population int(11) unsigned NOT NULL default '0',
    city_it_headcount int(11) unsigned NOT NULL default '0',
    city_it_headcount_score int(11) unsigned NOT NULL default '0',
    city_it_graduates int(11) unsigned NOT NULL default '0',
    city_it_graduates_score int(11) unsigned NOT NULL default '0',
    city_salary_jun int(11) unsigned NOT NULL default '0',
    city_salary_mid int(11) unsigned NOT NULL default '0',
    city_salary_sen int(11) unsigned NOT NULL default '0',
    city_salary_lead int(11) unsigned NOT NULL default '0',
    city_labor_cost_score int(11) unsigned NOT NULL default '0',
    city_turnover_ratio int(11) unsigned NOT NULL default '0',
    city_turnover_ratio_score int(11) unsigned NOT NULL default '0',
    city_english_level varchar(255) NOT NULL default '',
    city_english_level_score int(11) unsigned NOT NULL default '0',
    city_office_rent varchar(255) NOT NULL default '',
    city_office_rent_score int(11) unsigned NOT NULL default '0',
    city_travel_proximity varchar(255) NOT NULL default '',
    city_travel_score int(11) unsigned NOT NULL default '0',
    city_popular_technologies TEXT NOT NULL default '',
    city_lack_technologies TEXT NOT NULL default '',
    city_hiring_time_score int(11) unsigned NOT NULL default '0',
    PRIMARY KEY  (city_id)
) {$charset_collate};";

function create_destinations_tables() {
    global $wpdb, $city_table_name, $city_sql;
    create_new_table($city_table_name, $city_sql);
}
*/

?>