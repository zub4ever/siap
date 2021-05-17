/* ========================================================================

Masonary Init

=========================================================================
 */


"use strict";

//Dropzone Configuration
Dropzone.autoDiscover = false;

/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    $('#basic-dropzone-upload').dropzone();

    $('#single-upload-dropzone').dropzone({
        maxFiles: 1,
        maxFilesize: 1
    });

    $('#multple-file-upload').dropzone({
        maxFiles: 10,
        maxFilesize: 10
    });

    $('#file-validation').dropzone({
        maxFiles: 10,
        maxFilesize: 10,
        acceptedFiles:"image/*,application/pdf,.psd",
    });





    // Dropzone.options.singleFileUpload = {
    //     paramName:"file", maxFiles:1, init:function() {
    //         this.on("maxfilesexceeded", function(e) {
    //                 this.removeAllFiles(), this.addFile(e)
    //             }
    //         )
    //     }
    // };
    //
    // Dropzone.options.multipleFileUpload= {
    //     paramName: "file", maxFilesize: 1, clickable: !0
    // };
    //
    // // new Dropzone(document.body, {
    // //         url: "#", previewsContainer: "#button-select-upload", clickable: "#button-select"
    // //     }
    // // );
    //
    // Dropzone.options.fileLimitUpload= {
    //     paramName: "file", maxFilesize: 1, maxFiles: 4, maxThumbnailFilesize: 1
    // };
    //
    // Dropzone.options.fileAcceptedUpload= {
    //     paramName: "file", maxFilesize: 1, acceptedFiles: "image/*"
    // };
    //
    // Dropzone.options.fileRemoveThumbnailUpload= {
    //     paramName: "file", maxFilesize: 1, addRemoveLinks: !0, dictRemoveFile: " Trash"
    // }

});
/*======== End Doucument Ready Function =========*/