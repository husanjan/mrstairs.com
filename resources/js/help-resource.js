$(function () {
    $(document).on('click', '.elementor-accordion-title', function (event) {
        event.preventDefault();
    });

    $(document).on('click', '[id^="elementor-tab-title-"]', function (event) {
        let contentContainer = $(this).attr('aria-controls');

        if ($(this).hasClass('elementor-active')) {
            $(this).removeClass('elementor-active');
            $('#' + contentContainer).hide('slow');
        } else {
            $(this).addClass('elementor-active');
            $('#' + contentContainer).show('slow');
        }
    });
});

//Modal script
$(document).ready(function() {


    $("#myBtn").on("click", function() {
        $("#modalContainer").show();
    });

    $(".close").on("click", function() {
        $("#modalContainer").hide();
    });

});
