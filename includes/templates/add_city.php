<?php
    // Show form for add city

    require_once('/../functions.php');
?>

<link rel="stylesheet" href="<?php echo plugins_url('../../assets/css/style.css', __FILE__); ?>">

<h1>Add new city</h1>

<form id="add_city" class="add-destination-form" method="post" enctype="multipart/form-data">

    <input type="hidden" name="destination_type" value="city">

    <div class="fields-wrapper">
        <label for="name">City</label>
        <input id="name" class="title form-field" type="text" name="city_name" required/>
    </div>
    <div class="fields-wrapper">
        <label for="parrent_id">Parrent country</label>
        <input id="parrent_id" class="form-field" type="number" name="city_parrent_id"/>
    </div>
    <div class="fields-wrapper">
        <label for="short_desc">Short description</label>
        <textarea id="short_desc" class="form-field" name="city_short_desc" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="population">Population</label>
        <input id="population" class="form-field" type="number" name="city_population"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_headcount">ITHeadcount</label>
        <input id="it_headcount" class="form-field" type="number" name="city_it_headcount"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_headcount_score">ITHeadcount score</label>
        <input id="it_headcount_score" class="form-field" type="number" name="city_it_headcount_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_graduates">ITGraduates</label>
        <input id="it_graduates" class="form-field" type="number" name="city_it_graduates"/>
    </div>
    <div class="fields-wrapper">
        <label for="it_graduates_score">ITGraduates_score</label>
        <input id="it_graduates_score" class="form-field" type="number" name="city_it_graduates_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_jun">SalaryJun</label>
        <input id="salary_jun" class="form-field" type="number" name="city_salary_jun"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_mid">SalaryMid</label>
        <input id="salary_mid" class="form-field" type="number" name="city_salary_mid"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_sen">SalarySen</label>
        <input id="salary_sen" class="form-field" type="number" name="city_salary_sen"/>
    </div>
    <div class="fields-wrapper">
        <label for="salary_lead">SalaryLead</label>
        <input id="salary_lead" class="form-field" type="number" name="city_salary_lead"/>
    </div>
    <div class="fields-wrapper">
        <label for="labor_cost_score">LaborCost score</label>
        <input id="labor_cost_score" class="form-field" type="number" name="city_labor_cost_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="turnover_ratio">TurnoverRatio</label>
        <input id="turnover_ratio" class="form-field" type="number" name="city_turnover_ratio"/>
    </div>
    <div class="fields-wrapper">
        <label for="turnover_ratio_score">TurnoverRation score</label>
        <input id="turnover_ratio_score" class="form-field" type="number" name="city_turnover_ratio_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="english_level">EnglishLevel</label>
        <input id="english_level" class="form-field" type="text" name="city_english_level"/>
    </div>
    <div class="fields-wrapper">
        <label for="english_level_score">English score</label>
        <input id="english_level_score" class="form-field" type="number" name="city_english_level_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="city_office_rent">OfficeRent</label>
        <input id="city_office_rent" class="form-field" type="text" name="city_office_rent"/>
    </div>
    <div class="fields-wrapper">
        <label for="office_rent_score">OfficeRent score</label>
        <input id="office_rent_score" class="form-field" type="number" name="city_office_rent_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="travel_proximity">TravelProximity</label>
        <input id="travel_proximity" class="form-field" type="text" name="city_travel_proximity"/>
    </div>
    <div class="fields-wrapper">
        <label for="travel_score">Travel score</label>
        <input id="travel_score" class="form-field" type="number" name="city_travel_score"/>
    </div>
    <div class="fields-wrapper">
        <label for="popular_technologies">PopularTechnologies</label>
        <textarea id="popular_technologies" class="form-field" name="city_popular_technologies" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="lack_technologies">LackTechnologies</label>
        <textarea id="lack_technologies" class="form-field" name="city_lack_technologies" rows="8"></textarea>
    </div>
    <div class="fields-wrapper">
        <label for="hiring_time_score">HiringTime score</label>
        <input id="hiring_time_score" class="form-field" type="number" name="city_hiring_time_score"/>
    </div>

    <button type="submit" id="send_btn" class="button button-primary button-large">Add</button>
    <div id="form_message"></div>
    
</form>

<script src="<?php echo plugins_url('../../assets/js/ajax_add_destinations.js', __FILE__); ?>"></script>
<script src="<?php echo plugins_url('../../assets/js/uploadscript.js', __FILE__); ?>"></script>
