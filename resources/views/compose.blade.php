@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Compose Email
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3>
                        Write Email
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary btn-block" href="javascript:void(0);">Compose</a>
                    <ul class="list-unstyled mail_tabs">
                        <li class="active">
                            <a href="javascript:void(0);">
                                <i class="fa fa-inbox"></i> Inbox <span
                                    class="badge badge-primary pull-right">6</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                <i class="fa fa-send-o"></i> Sent
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                <i class="fa fa-edit"></i> Drafts <span
                                    class="badge badge-accent pull-right">2</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                <i class="fa fa-star-o"></i> Important
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);">
                                <i class="fa fa-trash-o"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-sm-12 mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <div class="mail_content">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="mail_head mb-3">Compose Message</h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="pull-right">
                                    <div class="btn-group btn-split mail_more_btn mt-0">
                                        <button type="button" class="btn btn-primary">Options</button>
                                        <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown">
                                            <span class="sr-only">Options</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Save Message</a>
                                            <a class="dropdown-item" href="#">Draft Message</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mail_message col-lg-12">
                                <form action="/">
                                    <div class="form-group">
                                        <label for="example-email-input" class="col-form-label">To:</label>
                                        <input class="form-control" type="email" value="name@example.com" id="example-email-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Subject</label>
                                        <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Compose Message</label>
                                        <textarea name="editor1" class="ck-editor">Enter Text to Edit</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary mb-3"><i class="ion-paper-airplane"></i> Send Message</button>
                                        <button type="button" class="btn btn-success mb-3"><i class="ti-save-alt"></i> Save Message</button>
                                        <button type="button" class="btn btn-danger mb-3"><i class="ti-trash"></i> Delete Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Ck Editor Js -->
    <script src="{{asset('assets/vendors/ck-editor/js/ckeditor.js')}}"></script>
    <script>
        /*========= CK Editor Script ==========*/
        if ($('.ck-editor').length){
            CKEDITOR.replace( 'editor1' );
        }
    </script>
@endsection
