jQuery(function($) {
    $('#add_country').submit(function() {
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
            dataType: "html",
            method: "POST",
            beforeSend: function() {
                submitButton.text("Wait...");
            },
            success: function(response) {
                submitButton.text("Send");
                console.log(response);
                if (response == 1) {
                    formMessage.html("Country successfully added");
                    //reset form
                    form[0].reset();
                    $('.img_field').children('img').attr('src', noImgUrl);
                    $('.img_field').children('img').attr('data-src', '');
                    //$(this).prev().prev().val('');
                }
                else {
                    formMessage.html(response);
                }
            },
            error: function(response) {
                formMessage.html("Check your Internet connection");
                console.log(response);
            }
        });
    });
});
