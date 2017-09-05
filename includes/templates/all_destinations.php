<?php
    // Show table with all destinations

    require_once('/../functions.php');

    $path = $_SERVER['DOCUMENT_ROOT'];
    
    include_once $path . '/wp-config.php';
    include_once $path . '/wp-load.php';
    include_once $path . '/wp-includes/wp-db.php';
    include_once $path . '/wp-includes/pluggable.php';

    global $wpdb; 

    $countries = $wpdb->get_results('SELECT country_id AS id, country_name AS name, country_publish_date AS publish_date, country_modified AS modified_date FROM wp_countries');
    $cities = $wpdb->get_results('SELECT city_id AS id, city_name AS name, city_publish_date AS publish_date, city_modified AS modified_date FROM wp_cities');
    $companies = $wpdb->get_results('SELECT company_id AS id, company_name AS name, company_publish_date AS publish_date, company_modified AS modified_date FROM wp_companies');

    if ( isset($_GET['cities']) ) {
        $destinations = $cities;
        $destinations_type = "City";
    }
    else if ( isset($_GET['companies']) ) {
        $destinations = $companies;
        $destinations_type = "Company";        
    }
    else {
        $destinations = $countries;
        $destinations_type = "Country";
    }
?>

<link rel="stylesheet" href="<?php echo plugins_url('../../assets/css/style.css', __FILE__); ?>">

<div class="wrap">

    <!-- navigation -->
    <h1>All destinations</h1>
    <div>
        <ul class="subsubsub">
            <li class="countries">
                <a href="<?php echo admin_url( 'admin.php?page=destinations' ); ?>">Countries <span class="count">(<?php echo count($countries); ?>)</span></a>
            </li>
            <li class="cities">
                <a href="<?php echo admin_url( 'admin.php?page=destinations&cities' ); ?>">Cities <span class="count">(<?php echo count($cities); ?>)</span></a>
            </li>
            <li class="companies">
                <a href="<?php echo admin_url( 'admin.php?page=destinations&companies' ); ?>">Companies <span class="count">(<?php echo count($companies); ?>)</span></a>
            </li>
        </ul>
        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input">Search Posts:</label>
            <input type="search" id="post-search-input" name="s" value="">
            <input type="submit" id="search-submit" class="button" value="Search Posts">
        </p>
    </div>
    <!-- end navigation -->

    <div class="clear"></div>

    <?php
        if ( empty($destinations) ) {
            echo "<h3>Nothing found</h3>";
            exit;
        }
    ?>

    <table class="wp-list-table widefat fixed striped posts">
        <thead>
            <tr>
                <td id="cb" class="manage-column column-cb check-column">
                    <input type="checkbox">
                </td>
                <th scope="col" id="name" class="column-name">
                    <strong>
                        <a href="">Destination name</a>
                    </strong>
                </th>
                <th scope="col" id="type">Destination type</th>
                <th scope="col" id="published_date">Published date</th>
                <th scope="col" id="modified_date">Modified date</th>
            </tr>
        </thead>
        <tbody>
    <?php
        foreach ( $destinations as $destination ) {
            echo "
            <tr>
                <th scope='row' class='check-column'>
                    <input type='checkbox' name='' value=''>
                </th>
                <td>
                    <strong>
                        <a href=''>$destination->name</a>
                    </strong>
                    <div class='row-actions'>
                        <span class='edit'><a href=''>Edit</a> | </span>
                        <span class='trash'><a href='' class='submitdelete'>Trash</a> | </span>
                        <span class='view'><a href=''>View</a></span>
                    </div>
                    
                </td>
                <td>$destinations_type</td>
                <td>$destination->publish_date</td>
                <td>$destination->modified_date</td>
            </tr>";
        }
    ?>
        </tbody>
    </table>
</div>


