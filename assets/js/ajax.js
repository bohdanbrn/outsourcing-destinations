jQuery(function($) {
    $('#add_country').submit(function() {
        event.preventDefault(); // Cancel the submit
        var
            form = $(this),
            submitButton = $('#send_btn'),
            formMessage = $('#form_message'),
            siteUrl = window.location.origin;
            //configUrl = form.attr("action");
        
        $.ajax ({
            url: siteUrl + "/wp-content/plugins/outsourcing-destinations/includes/insert_data.php",
            data: form.serialize(),
            dataType: "json",
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                console.log(response);
                formMessage.html(response);
                submitButton.text("Send");
            },
            error: function(response) {
                formMessage.html("Check your Internet connection");
                console.log(response);
            }
        });
    });
});

