<?php

    header('Content-Type: text/html; charset=utf-8', true);

    define( 'SHORTINIT', true );
    require( '../../../../wp-load.php' );
    global $wpdb;

    $table_name = $wpdb->get_blog_prefix() . 'countries';

    $form_data = $_POST;

    $result = $wpdb->insert($table_name, $form_data, array( '%s', '%d' ));
    
    echo json_encode($result);

?>