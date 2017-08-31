<?php
    wp_enqueue_media();
    
    function true_include_myuploadscript() {
        // у вас в админке уже должен быть подключен jQuery, если нет - раскомментируйте следующую строку:
        // wp_enqueue_script('jquery');
        // дальше у нас идут скрипты и стили загрузчика изображений WordPress
        wp_enqueue_script( 'myuploadscript', plugins_url('../assets/js/uploadscript.js', __FILE__), array('jquery'), null, false );
    }
    add_action( 'admin_enqueue_scripts', 'true_include_myuploadscript' );


    function true_image_uploader_field( $name, $value = '', $w = 115, $h = 90) {
        $default = plugins_url('../assets/img/no-image.png', __FILE__);
        if ( $value ) {
            $image_attributes = wp_get_attachment_image_src( $value, array($w, $h) );
            $src = $image_attributes[0];
        }
        else {
            $src = $default;
        }
        echo '
            <img data-src="' . $default . '" src="' . $src . '" width="' . $w . 'px" height="' . $h . 'px"/>
            <div>
                <input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '"/>
                <button type="submit" class="upload_image_button button">Upload</button>
                <button type="submit" class="remove_image_button button">&times;</button>
            </div>';
    }

?>