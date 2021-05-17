/* ========================================================================

Text Editor Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    /*===================*/
    /*    Text Editors
    /*===================*/

    /*========= CK Editor Script ==========*/
    if ($('.ck-editor').length){
        CKEDITOR.replace( 'editor1' );
    }

    /*========= Tinymce Editor Script ==========*/

    if ($(".tiny-editor").length) {
        tinymce.init({
            selector: '.tiny-editor',
            height: 500,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
            image_advtab: true,
            templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
                {
                    title: 'Test template 2',
                    content: 'Test 2'
                }
            ],
            content_css: []
        });
    }

    /*========= Summernote Editor Script ==========*/
    if ($(".summer_note_editor").length) {
        $('.summer_note_editor').summernote({
            height: 300,
            tabsize: 2
        });
    }

});
/*======== End Doucument Ready Function =========*/