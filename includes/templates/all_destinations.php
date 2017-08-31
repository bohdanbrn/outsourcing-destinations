Show table with all destinations

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    
    include_once $path . '/wp-config.php';
    include_once $path . '/wp-load.php';
    include_once $path . '/wp-includes/wp-db.php';
    include_once $path . '/wp-includes/pluggable.php';

    global $wpdb;

    echo "<pre>";
    print_r($wpdb);
    echo "</pre>";
?>