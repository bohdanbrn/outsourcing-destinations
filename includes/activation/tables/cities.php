<?php
    function create_cities_table() {
        global $wpdb;
        //db prefix
        $db_prefix = $wpdb->get_blog_prefix();
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $table_name = $db_prefix . 'cities';

        //create new table only if the table with this name is not created yet
        if ( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            $sql = "CREATE TABLE {$table_name} (
                city_id int(11) unsigned NOT NULL auto_increment,
                city_name varchar(255) NOT NULL default '',
                city_parrent_id int(11) unsigned NOT NULL default '0',
                city_short_desc TEXT NOT NULL default '',
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
                city_publish_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                city_modified TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY  (city_id)
            ) {$charset_collate};";
            
            //create a table
            dbDelta( $sql );
        }
    }
?>