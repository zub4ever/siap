/* ========================================================================

Fancy Box Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    /*======== Fancy Box Init ========*/

    var FancYB = $('.fancybox');
    FancYB.fancybox({
        openEffect: 'fade',
        closeEffect: 'fade',
        padding : 0,
        closeBtn: true,
        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                locked: false
            },
            buttons: {}
        }
    });
    FancYB.attr('rel','gallery');

    /*======== End Fancy Box ========*/

});
/*======== End Doucument Ready Function =========*/