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