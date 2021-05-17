/* ========================================================================

Masonary Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    //CACHE JQUERY OBJECTS
    var $window = $(window);

    $window.on( 'load', function () {

        /*========= Masonry Grid Script ==========*/

        $(".grid-masonry").masonry({
            // options...
            itemSelector: ".grid-item",
            columnWidth: ".grid-item",

        });

        /*========== End Masonry Grid ==========*/

    });

});
/*======== End Doucument Ready Function =========*/