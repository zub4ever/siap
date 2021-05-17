/* ========================================================================

Code Editor Init

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    /*========= Html Editor Script ==========*/
    if ($('#ace_html_editor').length) {
        $(function() {
            var editor = ace.edit("ace_html_editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/html");
            document.getElementById('ace_html_editor');
        });
    }

    /*========= CSS Editor Script ==========*/
    if ($('#ace_css_editor').length) {
        $(function() {
            var editor = ace.edit("ace_css_editor");
            editor.setTheme("ace/theme/chaos");
            editor.getSession().setMode("ace/mode/css");
            document.getElementById('ace_css_editor');
        });
    }

    /*========= Js Editor Script ==========*/
    if ($('#ace_js_editor').length) {
        $(function() {
            var editor = ace.edit("ace_js_editor");
            editor.setTheme("ace/theme/dracula");
            editor.getSession().setMode("ace/mode/javascript");
            document.getElementById('aceExample');
        });
    }

    /*========= Json Editor Script ==========*/
    if ($('#ace_json_editor').length) {
        $(function() {
            var editor = ace.edit("ace_json_editor");
            editor.setTheme("ace/theme/cobalt");
            editor.getSession().setMode("ace/mode/json");
            document.getElementById('ace_json_editor');
        });
    }

    /*========= Less Editor Script ==========*/
    if ($('#ace_less_editor').length) {
        $(function() {
            var editor = ace.edit("ace_less_editor");
            editor.setTheme("ace/theme/gruvbox");
            editor.getSession().setMode("ace/mode/less");
            document.getElementById('ace_less_editor');
        });
    }

    /*========= Php Editor Script ==========*/
    if ($('#ace_php_editor').length) {
        $(function() {
            var editor = ace.edit("ace_php_editor");
            editor.setTheme("ace/theme/merbivore");
            editor.getSession().setMode("ace/mode/php");
            document.getElementById('ace_php_editor');
        });
    }

});
/*======== End Doucument Ready Function =========*/