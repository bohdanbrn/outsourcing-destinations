<?php
    function create_new_page($page_title, $template_file_name) {
        //if does not exist page with the name of the "$page_title"
        $existing_page = get_page_by_title( $page_title );
        if ( !isset( $existing_page ) ) {
            $my_post = array(
                'post_title'     => $page_title,
                'post_type'      => 'page',
                'post_name'      => $page_title,  //url
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
                'post_content'   => '',
                'post_status'    => 'publish',
                'post_author'    => get_user_by( 'id', 1 )->user_id,
                'menu_order'     => 0
            );
            
            $pageID = wp_insert_post( $my_post, FALSE ); // Get Post ID - FALSE to return 0 instead of wp_error.
            
            //assign page_tamplate for current custom page
            update_post_meta( $pageID, "_wp_page_template", "template-parts/$template_file_name" );
        }
    }

    function create_custom_pages() {
        create_new_page("Destinations", "tpl_destinations.php");
        create_new_page("Cities", "tpl_destinations.php");
        create_new_page("Companies", "tpl_destinations.php");
    }

?>