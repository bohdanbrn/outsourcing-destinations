<?php
    require_once('/../functions.php');
?>

<link rel="stylesheet" href="<?php echo plugins_url('../../assets/css/style.css', __FILE__); ?>">

<h1>Add new destination</h1>

<form id="add_country" class="add-destination-form" method="post" enctype="multipart/form-data">
    <div class="fields-wrapper">
        <label for="name">Country</label>
        <input id="name" class="title form-field" type="text" name="country_name" required/>
    </div>
    <div class="fields-wrapper">
        <div class="img_field">
            <div><label for="country_flag_id">Flag</label></div>
            <?php image_uploader_field('country_flag_id'); ?>
        </div>
        <div class="img_field">
            <div><label for="country_emblem_id">Emblem</label></div>
            <?php image_uploader_field('country_emblem_id'); ?>
        </div>
    </div>
    <div class="fields-wrapper">
        <label for="short_desc">Short description</label>
        <textarea id="short_desc" class="form-field" name="country_short_desc" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="population">Population</label>
        <input id="population" class="form-field" type="number" name="country_population"/>
    <div class="fields-wrapper">
        <label for="capital">Capital</label>
        <input id="capital" class="form-field" type="text" name="country_capital"/>
    </div>
    <div class="fields-wrapper">
        <label for="time_zone">Time zone</label>
        <input id="time_zone" class="form-field" type="text" name="country_time_zone"/>
    </div>
    <div class="fields-wrapper">
        <label for="currency">Currency</label>
        <input id="currency" class="form-field" type="text" name="country_currency"/>
    </div>
    <div class="fields-wrapper">
        <label for="busines_index">Ease of Doing Busines Index (series of articles)</label>
        <input id="busines_index" class="form-field" type="text" name="country_busines_index"/>
    </div>
    <div class="fields-wrapper">
        <label for="unemployment_ratio">Unemployment ratio</label>
        <input id="unemployment_ratio" class="form-field" type="number" step="0.01" name="country_unemployment_ratio"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_headcount">IT Headcount</label>
        <input id="it_headcount" class="form-field" type="number" name="country_it_headcount"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_headcount_score">IT Headcount score</label>
        <input id="it_headcount_score" class="form-field" type="number" name="country_it_headcount_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_graduates">IT Graduates</label>
        <input id="it_graduates" class="form-field" type="number" name="country_it_graduates"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_graduates_score">IT Graduates score</label>
        <input id="it_graduates_score" class="form-field" type="number" name="country_it_graduates_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_jun">Salary Jun</label>
        <input id="salary_jun" class="form-field" type="number" name="country_salary_jun"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_mid">Salary Mid</label>
        <input id="salary_mid" class="form-field" type="number" name="country_salary_mid"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_sen">Salary Sen</label>
        <input id="salary_sen" class="form-field" type="number" name="country_salary_sen"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_lead">Salary Lead</label>
        <input id="salary_lead" class="form-field" type="number" name="country_salary_lead"/>
    </div>
    <div class="fields-wrapper">
        <label for="income_tax">Income Tax</label>
        <input id="income_tax" class="form-field" type="text" name="country_income_tax"/>
    </div>
    <div class="fields-wrapper">
        <label for="social_tax">Social Tax</label>
        <input id="social_tax" class="form-field" type="text" name="country_social_tax"/>
    </div>
    <div class="fields-wrapper">
        <label for="employer_tax">Employer Tax</label>
        <input id="employer_tax" class="form-field" type="text" name="country_employer_tax"/>
    </div>
    <div class="fields-wrapper">
        <label for="labor_cost_score">Labor Cost score</label>
        <input id="labor_cost_score" class="form-field" type="number" name="country_labor_cost_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="notice_period">Notice Period</label>
        <textarea id="notice_period" class="form-field" name="country_notice_period" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="hiring_time_score">Hiring Time score</label>
        <input id="hiring_time_score" class="form-field" type="number" name="country_hiring_time_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="dismissal_conditions">Dismissal Conditions</label>
        <textarea id="dismissal_conditions" class="form-field" name="country_dismissal_conditions" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="dismissal_score">Dismissal score</label>
        <input id="dismissal_score" class="form-field" type="number" name="country_dismissal_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="turnover_ratio">Turnover Ratio</label>
        <input id="turnover_ratio" class="form-field" type="number" name="country_turnover_ratio"/>
    </div>
    <div class="fields-wrapper">
        <label for="turnover_ratio_score">Turnover Ration score</label>
        <input id="turnover_ratio_score" class="form-field" type="number" name="country_turnover_ratio_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="english_level">English Level</label>
        <input id="english_level" class="form-field" type="text" name="country_english_level"/>
    </div>
    <div class="fields-wrapper">
        <label for="english_score">English score</label>
        <input id="english_score" class="form-field" type="number" name="country_english_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="office_rent">Office Rent</label>
        <textarea id="office_rent" class="form-field" name="country_office_rent" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="office_rent_score">Office Rent score</label>
        <input id="office_rent_score" class="form-field" type="number" name="country_office_rent_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="stability">Stability</label>
        <textarea id="stability" class="form-field" name="country_stability" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="stability_score">Stability score</label>
        <input id="stability_score" class="form-field" type="number" name="country_stability_score"/>
    </div>
    <button type="submit" id="send_btn" class="button button-primary button-large">Add</button>
    <div id="form_message"></div>
</form>

<script src="<?php echo plugins_url('../../assets/js/ajax_add_destinations.js', __FILE__); ?>"></script>
<script src="<?php echo plugins_url('../../assets/js/uploadscript.js', __FILE__); ?>"></script>
