jQuery( function ( $ ) {

    $( document ).on( 'click', '.ms-option', function ( event ) {
        $( this ).closest( '.ms-custom-radio-group' ).find( '.ms-option' ).removeClass( 'active' );

        $( 'input[type=radio][name=' + $( this ).attr( 'name' ) + ']' ).removeAttr( 'checked' );

        $( this ).closest( '.ms-option' ).addClass( 'active' ).find( 'input[type=radio]' ).attr( 'checked', 'checked' ).trigger( 'change' );

        return false;
    } );

    /*
    if ( !window.has_consent( 'privacy-policy' ) ) {
        $( '.gdpr-overlay' ).css( { zIndex: '9999998', display: 'block' } );
    }
    */

    $( document ).on( 'change', '.ms-option input[type=checkbox], .ms-option input[type=radio]', function ( event ) {
        $( event.target ).closest( '.ms-custom-radio-group' ).find( '.ms-option' ).removeClass( 'active' ); // remove all
        $( event.target ).closest( '.ms-option' ).addClass( 'active' );

        var inputName = $(event.target).attr('name');
        if (inputName === 'delivery') {
            $('#currentDeliveryOption').val($(event.target).val());
        }
        console.log( $( event.target ).val() );
    } );

    $( document ).on( 'change', '#toggle-id', function ( event ) {
        var value = $( event.target ).is( ':checked');

        if ( value ) {
            $( 'body' ).addClass( 'sidebar-open' );
        } else {
            $( 'body' ).removeClass( 'sidebar-open' );
        }
    } );

    if ( $( '#order-summary' ).length > 0 ) {
        // var sidebar = new StickySidebar( '#order-summary', {
        //     // spacingTop: 100,
        //     // spacingBottom: 150,
        // } );
    }

    var toggle_measurements_state = false;

    $( '#toggle-measurements' ).on( 'click', function ( event ) {
        var screen_width = $( window ).width();

        if ( screen_width <= 768 ) {
            $( '#measurement_modal' ).modal( { show: true } );
        } else {
            let type = jQuery( 'a[data-toggle-information].active' ).attr( 'data-toggle-information' );

            jQuery( 'a[data-toggle-information]' ).removeClass( 'active' ).addClass( 'inactive' );

            if ( type === 'less' ) {
                jQuery( '#measurements-inline-view .collapsible-measurements' ).animate( {
                    height: 'hide',
                    opacity: '0'
                }, 'slow' ).css( { height: '0' } ).addClass( 'more' )
                jQuery( 'a[data-toggle-information=more]' ).removeClass( 'inactive' ).addClass( 'active' );
            } else {
                jQuery( '#measurements-inline-view .collapsible-measurements' ).animate( {
                    height: 'show',
                    opacity: '1'
                }, 'slow' ).css( { height: 'auto' } ).addClass( 'less' )
                jQuery( 'a[data-toggle-information=less]' ).removeClass( 'inactive' ).addClass( 'active' );
            }
        }
    } );

    if ( $( 'body' ).hasClass( 'page-template-staircase-building-regulations-page' ) ) {

        $( document ).on( 'click touchend', '.option', function () {
            $( this ).parent().parent().find( '.active' ).removeClass( 'active' );
            $( this ).addClass( 'active' );

            // automatically submit
            var type = $( '.step-options .active' ).data( 'type' );

            $( 'input[type=hidden][name=regulations]' ).val( type ? type : 'straight' );

            $( this ).closest( 'form' ).submit();
        } );

        $( document ).on( 'click', 'button[data-next]', function () {
            var type = $( '.step-options .active' ).data( 'type' );

            $( 'input[type=hidden][name=regulations]' ).val( type ? type : 'straight' );

            $( this ).closest( 'form' ).submit();
        } );
    }


    if ( $( 'body' ).hasClass( 'page-template-staircase-type-step-page' ) ) {

        $( document ).on( 'click', '.option', function () {
            $( this ).parent().parent().find( '.active' ).removeClass( 'active' );
            $( this ).addClass( 'active' );

            // auto submit
            var type = $( '.step-options .active' ).data( 'type' );

            $( 'input[type=hidden][name=stair_type]' ).val( type ? type : 'straight' );

            $( this ).closest( 'form' ).submit();
        } );

        $( document ).on( 'click', 'button[data-next]', function () {
            var type = $( '.step-options .active' ).data( 'type' );

            $( 'input[type=hidden][name=stair_type]' ).val( type ? type : 'straight' );

            $( this ).closest( 'form' ).submit();
        } );

        $( document ).on( 'click', 'button[data-prev]', function () {
            window.history.back();
        } );
    }

} );