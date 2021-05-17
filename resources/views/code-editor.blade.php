@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Code Editors
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Html Example</h4>
                    <textarea id="ace_html_editor" class="ace-editor">
<!DOCTYPE html>
<html>
    <head>

    <style type="text/css">
        .text-layer {
            font-family: Monaco, "Courier New", monospace;
            font-size: 12px;
            cursor: text;
        }
    </style>

    </head>
    <body>
        <h1>Juhu Kinners</h1>
    </body>
</html>
</textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Css Example</h4>
                    <textarea id="ace_css_editor" class="ace-editor">
/*
========================================================================

style.css ( Main Theme CSS file )

Theme Name: Bootstrap 4 Admin Template

======================================================================== */
ul ul,
ul ol,
ol ol,
ol ul {
  margin: 0;
}

ul ul li,
ul ol li,
ol ol li,
ol ul li {
  margin-bottom: 0px;
}

button {
  cursor: pointer;
  outline: none !important;
  letter-spacing: 0;
}
</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Javascript Example</h4>
                    <textarea id="ace_js_editor" class="ace-editor">
function foo(items, nada) {
    for (var i=0; i<items.length; i++) {
        alert(items[i] + "juhu\n");
    }	// Real Tab.
}
</textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Json Example</h4>
                    <textarea id="ace_json_editor" class="ace-editor">
{
 "query": {
  "count": 10,
  "created": "2011-06-21T08:10:46Z",
  "lang": "en-US",
  "results": {
   "photo": [
    {
     "farm": "6",
     "id": "5855620975",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "f1f5e8515d",
     "server": "5110",
     "title": "7087 bandit cat"
    },
    {
     "farm": "4",
     "id": "5856170534",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "ff1efb2a6f",
     "server": "3217",
     "title": "6975 rusty cat"
    },
    {
     "farm": "6",
     "id": "5856172972",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "51249875@N03",
     "secret": "6c6887347c",
     "server": "5192",
     "title": "watermarked-cats"
    },
    {
     "farm": "6",
     "id": "5856168328",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "0c1cfdf64c",
     "server": "5078",
     "title": "7020 mandy cat"
    },
    {
     "farm": "3",
     "id": "5856171774",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "7f5a3180ab",
     "server": "2696",
     "title": "7448 bobby cat"
    }
   ]
  }
 }
}
</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Less Example</h4>
                    <textarea id="ace_less_editor" class="ace-editor">
/* styles.less */

@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    box-shadow:         @style @c;
    -webkit-box-shadow: @style @c;
    -moz-box-shadow:    @style @c;
}
.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

// Box styles
.box {
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);

    div { .box-shadow(0 0 5px, 30%) }

    a {
        color: @base;

        &:hover {
            color: lighten(@base, 50%);
        }
    }
}

</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Ace Editor Js -->
    <script src="{{asset('assets/vendors/ace-editors/ace-builds/src-min/ace.js')}}"></script>

    <!-- Editor init Js -->
    <script src="{{asset('assets/js/init/code-editor.js')}}"></script>
@endsection
