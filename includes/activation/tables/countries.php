<?php
    function create_countries_table() {
        global $wpdb;
        //db prefix
        $db_prefix = $wpdb->get_blog_prefix();
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $table_name = $db_prefix . 'countries';

        //create new table only if the table with this name is not created yet
        if ( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            $sql = "CREATE TABLE {$table_name} (
                country_id int(11) unsigned NOT NULL auto_increment,
                country_name varchar(255) NOT NULL default '',
                country_flag_id int(11) unsigned NOT NULL default '0',
                country_emblem_id int(11) unsigned NOT NULL default '0',
                country_short_desc TEXT NOT NULL default '',
                country_population int(11) unsigned NOT NULL default '0',
                country_capital varchar(255) NOT NULL default '',
                country_time_zone varchar(255) NOT NULL default '',
                country_currency varchar(255) NOT NULL default '',
                country_busines_index varchar(255) NOT NULL default '',
                country_unemployment_ratio int(11) unsigned NOT NULL default '0',
                country_it_headcount int(11) unsigned NOT NULL default '0',
                country_it_headcount_score int(11) unsigned NOT NULL default '0',
                country_it_graduates int(11) unsigned NOT NULL default '0',
                country_it_graduates_score int(11) unsigned NOT NULL default '0',
                country_salary_jun int(11) unsigned NOT NULL default '0',
                country_salary_mid int(11) unsigned NOT NULL default '0',
                country_salary_sen int(11) unsigned NOT NULL default '0',
                country_salary_lead int(11) unsigned NOT NULL default '0',
                country_income_tax varchar(255) NOT NULL default '',
                country_social_tax varchar(255) NOT NULL default '',
                country_employer_tax varchar(255) NOT NULL default '',
                country_labor_cost_score int(11) unsigned NOT NULL default '0',
                country_notice_period TEXT NOT NULL default '',
                country_hiring_time_score int(11) unsigned NOT NULL default '0',
                country_dismissal_conditions TEXT NOT NULL default '',
                country_dismissal_score int(11) unsigned NOT NULL default '0',
                country_turnover_ratio int(11) unsigned NOT NULL default '0',
                country_turnover_ratio_score int(11) unsigned NOT NULL default '0',
                country_english_level varchar(255) NOT NULL default '',
                country_english_score int(11) unsigned NOT NULL default '0',
                country_office_rent TEXT NOT NULL default '',
                country_office_rent_score int(11) unsigned NOT NULL default '0',
                country_stability TEXT NOT NULL default '',
                country_stability_score int(11) unsigned NOT NULL default '0',
                PRIMARY KEY  (country_id)
            ) {$charset_collate};";
            
            //create a table
            dbDelta( $sql );
        }
    }
?>