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
                id int(11) unsigned NOT NULL auto_increment,
                name varchar(255) NOT NULL default '',
                flag_id int(11) unsigned NOT NULL default '0',
                emblem_id int(11) unsigned NOT NULL default '0',
                short_desc TEXT NOT NULL default '',
                population int(11) unsigned NOT NULL default '0',
                capital varchar(255) NOT NULL default '',
                time_zone varchar(255) NOT NULL default '',
                currency varchar(255) NOT NULL default '',
                busines_index varchar(255) NOT NULL default '',
                unemployment_ratio int(11) unsigned NOT NULL default '0',
                it_headcount int(11) unsigned NOT NULL default '0',
                it_headcount_score int(11) unsigned NOT NULL default '0',
                it_graduates int(11) unsigned NOT NULL default '0',
                it_graduates_score int(11) unsigned NOT NULL default '0',
                salary_jun int(11) unsigned NOT NULL default '0',
                salary_mid int(11) unsigned NOT NULL default '0',
                salary_sen int(11) unsigned NOT NULL default '0',
                salary_lead int(11) unsigned NOT NULL default '0',
                income_tax varchar(255) NOT NULL default '',
                social_tax varchar(255) NOT NULL default '',
                employer_tax varchar(255) NOT NULL default '',
                labor_cost_score int(11) unsigned NOT NULL default '0',
                notice_period TEXT NOT NULL default '',
                hiring_time_score int(11) unsigned NOT NULL default '0',
                dismissal_conditions TEXT NOT NULL default '',
                dismissal_score int(11) unsigned NOT NULL default '0',
                turnover_ratio int(11) unsigned NOT NULL default '0',
                turnover_ratio_score int(11) unsigned NOT NULL default '0',
                english_level varchar(255) NOT NULL default '',
                english_score int(11) unsigned NOT NULL default '0',
                office_rent TEXT NOT NULL default '',
                office_rent_score int(11) unsigned NOT NULL default '0',
                stability TEXT NOT NULL default '',
                stability_score int(11) unsigned NOT NULL default '0',
                PRIMARY KEY  (id)
            ) {$charset_collate};";
            
            //create a table
            dbDelta( $sql );
        }
    }
?>