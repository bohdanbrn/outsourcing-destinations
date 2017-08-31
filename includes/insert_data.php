<?php

    header('Content-Type: text/html; charset=utf-8', true);

    define( 'SHORTINIT', true );
    require( '../../../../wp-load.php' );
    global $wpdb;

    $table_name = $wpdb->get_blog_prefix() . 'countries';

    $form_data = $_POST;

    $query = $wpdb->insert($table_name, $form_data, array( '%s', '%d' ));
    
    $result = array('type' => '', 'message' => '');

    if ($query == 1) {
        $result['type'] = 'success';
        $result['message'] = 'Country successfully added';
    }
    else {
        $result['type'] = 'error';
        $result['message'] = $query;
    }
    echo json_encode($result);
?>