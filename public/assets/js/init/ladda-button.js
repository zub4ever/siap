/* ========================================================================

Ladda Button Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    $(".ladda_btn").on("click", function(t) {
        var e = t.currentTarget,
            a = Ladda.create(e);
        a.start(), setTimeout(function() {
            a.stop()
        }, 3e3)
    }), $(".example-button").on("click", function(t) {
        var e = t.currentTarget,
            a = Ladda.create(e);
        a.start(), setTimeout(function() {
            a.stop()
        }, 3e3)
    })

});
/*======== End Doucument Ready Function =========*/