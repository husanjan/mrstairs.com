$(function () {
    console.log('Hi Gallery');

    // Animate loader off screen
    //$(".loader_img").hide();
    //$(".lg_load_more").show();
    //$(".filtr-container").css("opacity", 1);

    //Filterizd Default options
    let options = {
        animationDuration: 0.5,
        callbacks: {
            onFilteringStart: function () {
            },
            onFilteringEnd: function () {
            },
            onShufflingStart: function () {
            },
            onShufflingEnd: function () {
            },
            onSortingStart: function () {
            },
            onSortingEnd: function () {
            }
        },
        filter: 'all',
        filterOutCss: {
            opacity: 0,
            visibility: 'hidden',
            transform: "scale(0.5)"

        },
        filterInCss: {
            opacity: 1,
            visibility: 'visible',
            transform: "scale(1)"

        },
        layout: 'sameWidth',
        selector: '#galleryContainer',
        setupControls: true
    }
    let filterizd = $('#galleryContainer').filterizr(options);
});
