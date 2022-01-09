$(function () {
    $(document).on('click', '[id^="elementor-tab-title-"]', function (event) {
        let contentContainer = $(this).attr('aria-controls');

        if ($(this).hasClass('elementor-active')) {
            $(this).removeClass('elementor-active');
            $(contentContainer).hide();
        } else {
            $(this).addClass('elementor-active');
            $(contentContainer).show();
        }
    });
});