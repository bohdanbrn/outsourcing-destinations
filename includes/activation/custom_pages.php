<?php
    function create_destinations_page() {
        $my_post = array(
            'post_title'     => 'Destinations',
            'post_type'      => 'page',
            'post_name'      => 'destinations',  //url
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0
        );
        
        $pageID = wp_insert_post( $my_post, FALSE ); // Get Post ID - FALSE to return 0 instead of wp_error.
        
        //assign page_tamplate for current custom page
        update_post_meta( $pageID, '_wp_page_template', 'template-parts/tpl_destinations.php' );
    }

    function create_cities_page() {
        $my_post = array(
            'post_title'     => 'Cities',
            'post_type'      => 'page',
            'post_name'      => 'cities',  //url
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => get_user_by( 'id', 1 )->user_id,
            'menu_order'     => 0
        );
        
        $pageID = wp_insert_post( $my_post, FALSE ); // Get Post ID - FALSE to return 0 instead of wp_error.
        
        //assign page_tamplate for current custom page
        update_post_meta( $pageID, '_wp_page_template', 'template-parts/tpl_destinations.php' );
    }

    function create_custom_pages() {
        create_destinations_page();
    }

?>