<?php

    header('Content-Type: text/html; charset=utf-8', true);

    define( 'SHORTINIT', true );
    require( '../../../../wp-load.php' );
    global $wpdb;

    $form_data = $_POST;
    
    $destination_type = array_shift( $form_data );

    $table_name = $wpdb->get_blog_prefix();

    if ( $destination_type == 'country' ) {
        $table_name .= 'countries';
    }
    else if ( $destination_type == 'city' ) {
        $table_name .= 'cities';
    }
    else {
        $table_name .= 'companies';
    }

    $query = $wpdb->insert($table_name, $form_data, array( '%s', '%d' ));
    
    $result = array('type' => '', 'message' => '');

    if ($query == 1) {
        $result['type'] = 'success';
        $result['message'] = ucfirst($destination_type) . ' successfully added';
    }
    else {
        $result['type'] = 'error';
        $result['message'] = $query;
    }
    echo json_encode($result); 

?>