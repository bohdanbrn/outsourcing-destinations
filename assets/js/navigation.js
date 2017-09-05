jQuery(function($) {
    var url = window.location.href;
    $.each($(".subsubsub li a"),function() {
        if (this.href == url) {
            $(this).addClass('current');
        };
    });
});