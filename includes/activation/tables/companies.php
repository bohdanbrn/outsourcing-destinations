<?php
    function create_companies_table() {
        global $wpdb;
        //db prefix
        $db_prefix = $wpdb->get_blog_prefix();
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $table_name = $db_prefix . 'companies';

        //create new table only if the table with this name is not created yet
        if ( $wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name ) {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            $sql = "CREATE TABLE {$table_name} (
                company_id int(11) unsigned NOT NULL auto_increment,
                company_name varchar(255) NOT NULL default '',
                PRIMARY KEY  (company_id)
            ) {$charset_collate};";
            
            //create a table
            dbDelta( $sql );
        }
    }
?>