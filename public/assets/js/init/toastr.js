/* ========================================================================

Toastr Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {

    $('.toastr_success').on('click',function(){
        // Display a success toast, with a title
        toastr.success('Have fun storming the castle!', 'Miracle Max Says');
    });
    $('.toastr_error').on('click',function(){
        // Display an error toast, with a title
        toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')
    });

    $('.toastr_warning').on('click',function(){
        // Display a warning toast, with no title
        toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')
    });

    $('.toastr_info').on('click',function(){
        // Display a success toast, with a title
        toastr.info('Have fun storming the castle!', 'Miracle Max Says');
    });

    $(".toastr_top_left_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Top Left!", {
            positionClass: "toastr_top_left",
            containerId: "toastr_top_left",
            timeOut: "50000"
        })
    });

    $(".toastr_top_center_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Top Center!", {
            positionClass: "toastr_top_center",
            containerId: "toastr_top_center",
            timeOut: "50000"
        })
    });

    $(".toastr_top_right_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Top Right!", {
            positionClass: "toastr_top_right",
            containerId: "toastr_top_right",
            timeOut: "50000"
        })
    });

    $(".toastr_bottom_left_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Bottom Left!", {
            positionClass: "toastr_bottom_left",
            containerId: "toastr_bottom_left",
            timeOut: "50000"
        })
    });

    $(".toastr_bottom_center_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Bottom Center!", {
            positionClass: "toastr_bottom_center",
            containerId: "toastr_bottom_center",
            timeOut: "50000"
        })
    });

    $(".toastr_bottom_right_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Bottom Right!", {
            positionClass: "toastr_bottom_right",
            containerId: "toastr_bottom_right",
            timeOut: "50000"
        })
    });

    $(".toast_close_btn").on("click", function() {
        toastr.error("The point of using Lorem Ipsum is that it", "Close Button", {
            closeButton: !0
        })
    });

    $(".toast_progress_btn").on("click", function() {
        toastr.success("The point of using Lorem Ipsum is that it", "Progress Bar", {
            progressBar: !0
        })
    });

    $(".toast_notification_btn").on("click", function() {
        toastr.warning("The point of using Lorem Ipsum is that it", "Miracle Max Says")
    });

    $(".toast_clear_btn").on("click", function() {
        toastr.error('Clear itself?<button type="button" class="btn btn-light mt-2 d-block">Clear</button>', "Clear Toast Button")
    });

    $(".toast_show_btn").on("click", function() {
        toastr.info("The point of using Lorem Ipsum is that it", "Miracle Max Says")
    });

    $(".toast_remove_btn").on("click", function() {
        toastr.remove()
    });

    $(".toast_clear_toastr_btn").on("click", function() {
        toastr.clear()
    });

    $(".toast_slide_btn").on("click", function() {
        toastr.error("The point of using Lorem Ipsum is that it", "Slide Effect!", {
            showMethod: "slideDown",
            hideMethod: "slideUp",
        })
    });

    $(".toast_fade_btn").on("click", function() {
        toastr.success("The point of using Lorem Ipsum is that it", "Fade Effect!", {
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        })
    })

});
/*======== End Doucument Ready Function =========*/