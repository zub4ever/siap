/* ========================================================================

Cropper Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {

    var a = $(".cropper-main-img"),
        r = $(".cropper-main-dataX"),
        e = $(".cropper-main-dataY"),
        t = $(".cropper-main-dataHeight"),
        p = $(".cropper-main-dataWidth"),
        o = $(".cropper-main-dataRotate"),
        i = $(".cropper-main-dataScaleX"),
        c = $(".cropper-main-dataScaleY"),
        n = {
            viewMode: 1,
            aspectRatio: 16 / 9,
            preview: ".img-preview",
            crop: function(a) {
                r.val(Math.round(a.x)),
                e.val(Math.round(a.y)),
                t.val(Math.round(a.height)),
                p.val(Math.round(a.width)),
                o.val(a.rotate),
                i.val(a.scaleX),
                c.val(a.scaleY)
            }
        };
    a.cropper(n)

});
/*======== End Doucument Ready Function =========*/