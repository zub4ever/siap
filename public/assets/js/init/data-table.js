/* ========================================================================

Data Table Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    //CACHE JQUERY OBJECTS
    var $window = $(window);

    /*================================
            datatable active
    ==================================*/
    if ($('#dataTable').length) {
        $('#dataTable').DataTable();
    }
    if ($('#dataTable2').length) {
        $('#dataTable2').DataTable();
    }
    if ($('#dataTable3').length) {
        $('#dataTable3').DataTable();
    }

});
/*======== End Doucument Ready Function =========*/