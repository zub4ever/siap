/* ========================================================================

Sweet Alert Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {

    // Success Alert
    $(".sweet_success_btn").on("click", function () {
        swal({
            type: "success",
            title: "Success!",
            text: "Your work has been saved",
            buttonsStyling: !1,
            confirmButtonClass: "btn btn-success"
        })
    });

    // Info Alert
    $(".sweet_info_btn").on("click", function () {
        swal({
            type: "info",
            title: "Info Alert!",
            text: "Here is the info alert text",
            buttonsStyling: !1,
            confirmButtonClass: "btn btn-info"
        })
    });

    // Warning Alert
    $(".sweet_warning_btn").on("click", function () {
        swal({
            type: "warning",
            title: "Warning",
            text: "Here is the warning alert text",
            buttonsStyling: !1,
            confirmButtonClass: "btn btn-warning"
        })
    });

    // Error Alert
    $(".sweet_danger_btn").on("click", function () {
        swal({
            type: "error",
            title: "Error!",
            text: "Something went wrong!",
            confirmButtonText: "Dismiss",
            buttonsStyling: !1,
            confirmButtonClass: "btn btn-danger"
        })
    });

    // Basic Alert
    $(".sweet_basic_btn").on("click", function () {
        swal("There is Something going.")
    });

    // Alert With Title
    $(".alert_title").on("click", function () {
        swal("The Internet?", "That thing is still around?")
    });

    // Alert with Timer
    $(".sweet_alert_timer").on("click", function () {
        swal({
            title: "Auto close alert!", html: "I will close in <strong>2</strong> seconds.", timer: 2e3
        }).then(t => {
            t.dismiss === swal.DismissReason.timer && console.log("I was closed by the timer")
        })
    });

    // Alert with Confirmation
    $(".sweet_alert_confirm").on("click", function () {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mr-5",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: !1
        }).then((result) => {
            if (result.value) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success")
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swal("Cancelled", "Your imaginary file is safe :)", "error")
            }
        })
    });

    // Alert With RTL
    $(".alert_rtl").on("click", function () {
        swal({
            title: 'هل تريد الاستمرار؟',
            confirmButtonText:  'نعم',
            cancelButtonText:  'لا',
            showCancelButton: true,
            showCloseButton: true,
            target: document.getElementById('rtl-container')
        })
    });

    // Alert With Ajax Request
    $(".alert_ajax").on("click", function () {
        swal({
            title: 'Submit your Github username',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Look up',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                return fetch(`//api.github.com/users/${login}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText)
                        }
                        return response.json()
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: `${result.value.login}'s avatar`,
                    imageUrl: result.value.avatar_url
                })
            }
        })
    });

    // Alert With QUESTIONNAIRE
    $(".alert_question").on("click", function () {
        Swal.mixin({
            input: 'text',
            confirmButtonText: 'Next &rarr;',
            showCancelButton: true,
            progressSteps: ['1', '2', '3']
        }).queue([
            {
                title: 'Question 1',
                text: 'Chaining swal2 modals is easy'
            },
            'Question 2',
            'Question 3'
        ]).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: 'All done!',
                    html:
                        'Your answers: <pre><code>' +
                        JSON.stringify(result.value) +
                        '</code></pre>',
                    confirmButtonText: 'Lovely!'
                })
            }
        })
    });

    // Alert With Custom image
    $(".alert_image").on("click", function () {
        Swal.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: 'images/blog-listing/03.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            animation: false
        })
    });
});
/*======== End Doucument Ready Function =========*/