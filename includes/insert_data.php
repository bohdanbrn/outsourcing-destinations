<?php
/*
    define( 'SHORTINIT', true );
    require( '../../../../wp-load.php' );
    global $wpdb;
    $table_name = $wpdb->get_blog_prefix() . 'countries';
    $test1 = "Mr. Wordpress";
    $test2 = "43634634";

    $insert = "INSERT INTO " . $table_name . " (name, short_desc) " 
        . "VALUES ('$test1', '$test2')";

    $results = $wpdb->query( $insert );
    //var_dump($results);
    echo json_encode($results);
*/

    header('Content-Type: text/html; charset=utf-8', true);

    define( 'SHORTINIT', true );
    require( '../../../../wp-load.php' );
    global $wpdb;

    $table_name = $wpdb->get_blog_prefix() . 'countries';

    $form_data = $_POST;

    $result = $wpdb->insert($table_name, $form_data, array( '%s', '%d' ));
    
    echo json_encode($result);
?>