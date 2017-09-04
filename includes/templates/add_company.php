<?php
    // Show form for add company

    require_once('/../functions.php');
?>

<link rel="stylesheet" href="<?php echo plugins_url('../../assets/css/style.css', __FILE__); ?>">

<h1>Add new company</h1>

<form id="add_company" class="add-destination-form" method="post" enctype="multipart/form-data">

    <input type="hidden" name="destination_type" value="company">

    <div class="fields-wrapper">
        <label for="name">Company</label>
        <input id="name" class="title form-field" type="text" name="company_name" required/>
    </div>

    <button type="submit" id="send_btn" class="button button-primary button-large">Add</button>
    <div id="form_message"></div>
    
</form>

<script src="<?php echo plugins_url('../../assets/js/ajax_add_destinations.js', __FILE__); ?>"></script>
<script src="<?php echo plugins_url('../../assets/js/uploadscript.js', __FILE__); ?>"></script>
