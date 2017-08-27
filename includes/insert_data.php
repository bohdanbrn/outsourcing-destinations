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
    $need_keys = "'id'";
    $need_values = "NULL";

    foreach($form_data as $key => $value) {
        $need_keys .= ", '$key'";
        $need_values .= ", '$value'";
    }

    $sql = "INSERT INTO $table_name ($need_keys) VALUES ($need_values)";

    //$result = $wpdb->query($sql);

    echo json_encode($sql);
    //echo json_encode($RESULT);
?>