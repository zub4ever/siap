/* ========================================================================

HopScotch Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
var tour;
$(document).ready(function() {
    tour= {
        id: "hello-hopscotch",
        steps: [
            {
                title: "Notofication Area",
                content: "This is the Notificaton for the theme where you can check notification.",
                target: "notification_section",
                placement: "left"
            },
            {
                title: "Search Bar",
                content: "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.",
                target: "search_form",
                placement: "bottom"
            },
            {
                title: "Sidebar Menu",
                content: "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed",
                target: "sidebar_menu",
                placement: "right"
            }
        ]
    }
});
$("#startTourBtn").on("click", function(t) {
    hopscotch.startTour(tour)
});
/*======== End Doucument Ready Function =========*/