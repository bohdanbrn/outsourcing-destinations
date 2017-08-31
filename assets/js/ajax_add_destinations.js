jQuery(function($) {
    $('.add-destination-form').submit(function() {
        event.preventDefault(); // Cancel the submit
        var
            form = $(this),
            submitButton = $('#send_btn'),
            formMessage = $('#form_message'),
            siteUrl = window.location.origin,
            noImgUrl = siteUrl + "/wp-content/plugins/outsourcing-destinations/assets/img/no-image.png";
        
        $.ajax ({
            url: siteUrl + "/wp-content/plugins/outsourcing-destinations/includes/insert_data.php",
            data: form.serialize(),
            dataType: "json",
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                submitButton.text("Send");
                console.log(response);
                if (response.type === "success") {
                    //display message
                    formMessage.html(response.message);
                    //and reset form
                    form[0].reset();
                    $('.img_field').children('img').attr('src', noImgUrl);
                    $('.img_field').children('img').attr('data-src', '');
                }
                else {
                    formMessage.html(response.message);
                }
            },
            error: function(response) {
                formMessage.html("Check your Internet connection");
                console.log(response);
            }
        });
    });
});
