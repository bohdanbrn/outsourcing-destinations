<?php
    // Show table with all destinations

    $path = $_SERVER['DOCUMENT_ROOT'];
    
    include_once $path . '/wp-config.php';
    include_once $path . '/wp-load.php';
    include_once $path . '/wp-includes/wp-db.php';
    include_once $path . '/wp-includes/pluggable.php';

    global $wpdb; 

    $countries = $wpdb->get_results('SELECT country_id AS id, country_name AS name FROM wp_countries');
    $cities = $wpdb->get_results('SELECT city_id AS id, city_name AS name FROM wp_cities');
    $companies = $wpdb->get_results('SELECT company_id AS id, company_name AS name FROM wp_companies');

    $all_destinations = array_merge($countries, $cities, $companies);

    // echo "<pre>";
    // print_r($all_destinations);
    // echo "</pre>";
?>
    
<h1>All destinations</h1>
    
<table>
    <thead>
	    <tr>
		    <td class="manage-column column-cb check-column">
                <input type="checkbox">
            </td>
            <th scope="col" id="author" class="manage-column column-author">Destination name</th>
            <th scope="col" id="categories" class="manage-column column-categories">Destination type</th>
            <th scope="col" id="tags" class="manage-column column-tags">Published date</th>
	    </tr>
	</thead>
    <tbody>
<?php
    foreach ( $all_destinations as $destination ) {
        echo "
        <tr>
            <th scope='row' class='check-column'>
                <input type='checkbox' name='' value=''>
            </th>
            <td>$destination->name</td>
        </tr>";
    }
?>
    </tbody>
</table>



