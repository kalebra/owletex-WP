( function( $ ) {

    wp.customize( 'header-h1', function( value ) {
        value.bind( function( newval ) {
            $('.header-main-left h1').text(newval);
        } );
    } );

    wp.customize( 'header-p', function( value ) {
        value.bind( function( newval ) {
            $('.header-main-left p').text(newval);
        } );
    } );

    //advantages
    wp.customize( 'advantages-h3-1', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b1 h3').text(newval);
        } );
    } );

    wp.customize( 'advantages-p-1', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b1 p').text(newval);
        } );
    } );

    wp.customize( 'advantages-h3-2', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b2 h3').text(newval);
        } );
    } );

    wp.customize( 'advantages-p-2', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b2 p').text(newval);
        } );
    } );

    wp.customize( 'advantages-h3-3', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b3 h3').text(newval);
        } );
    } );

    wp.customize( 'advantages-p-3', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b3 p').text(newval);
        } );
    } );

    wp.customize( 'advantages-h3-4', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b4 h3').text(newval);
        } );
    } );

    wp.customize( 'advantages-p-4', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b4 p').text(newval);
        } );
    } );

    wp.customize( 'advantages-h3-5', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b5 h3').text(newval);
        } );
    } );

    wp.customize( 'advantages-p-5', function( value ) {
        value.bind( function( newval ) {
            $('.adv-desc-left #b5 p').text(newval);
        } );
    } );

    //scheme of work
    wp.customize( 'scheme-li-1', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps ol li:first-child').text(newval);
        } );
    } );

    wp.customize( 'scheme-p-1', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps p:nth-child(2)').text(newval);
        } );
    } );

    wp.customize( 'scheme-li-2', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps ol li:nth-child(3)').text(newval);
        } );
    } );

    wp.customize( 'scheme-p-2', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps p:nth-child(4)').text(newval);
        } );
    } );

    wp.customize( 'scheme-li-3', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps ol li:nth-child(5)').text(newval);
        } );
    } );

    wp.customize( 'scheme-p-3', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps p:nth-child(6)').text(newval);
        } );
    } );

    wp.customize( 'scheme-li-4', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps ol li:nth-child(7)').text(newval);
        } );
    } );

    wp.customize( 'scheme-p-4', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps p:nth-child(8)').text(newval);
        } );
    } );

    wp.customize( 'scheme-li-5', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps ol li:nth-child(9)').text(newval);
        } );
    } );

    wp.customize( 'scheme-p-5', function( value ) {
        value.bind( function( newval ) {
            $('.scheme-steps p:last-child').text(newval);
        } );
    } );

    //feature
    wp.customize( 'features-h-1', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:first-child h3').text(newval);
        } );
    } );

    wp.customize( 'features-p-1', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:first-child p').text(newval);
        } );
    } );

    wp.customize( 'features-h-2', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:nth-child(2) h3').text(newval);
        } );
    } );

    wp.customize( 'features-p-2', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:nth-child(2) p').text(newval);
        } );
    } );

    wp.customize( 'features-h-3', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:last-child h3').text(newval);
        } );
    } );

    wp.customize( 'features-p-3', function( value ) {
        value.bind( function( newval ) {
            $('.opp-text:last-child p').text(newval);
        } );
    } );

    //footer
    wp.customize( 'footer-1', function( value ) {
        value.bind( function( newval ) {
            $('.copyrights-text').text(newval);
        } );
    } );

    wp.customize( 'footer-2', function( value ) {
        value.bind( function( newval ) {
            $('.copyright').text(newval);
        } );
    } );

} )( jQuery );