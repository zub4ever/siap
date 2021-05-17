@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    Read Email
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3>
                        Mailbox
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-12 mb-mob-4">
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
        <div class="col-lg-9 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="mail_content">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <h3 class="mail_head pull-left">Compose Message</h3>
                            </div>

                            <div class="col-lg-12">
                                <h5 class="pull-left mb-mob-4">
                                    Please Confirm your Email
                                    <span class="d-block recipient">From: help@example.com</span>
                                    <span class="mailbox-time recipient">15 Feb. 2016 11:03 PM</span>
                                </h5>
                                <div class="btn-group mr-2 pull-right" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary mb-3"><i
                                            class="ion-ios-trash"></i></button>
                                    <button type="button" class="btn btn-primary mb-3"><i
                                            class="ion-ios-undo"></i></button>
                                    <button type="button" class="btn btn-primary mb-3"><i
                                            class="ion-forward"></i></button>
                                    <button type="button" class="btn btn-primary mb-3"><i
                                            class="ion-printer"></i></button>
                                </div>
                            </div>

                            <div class="mail_message col-lg-12">
                                <div class="mt-5">
                                    <p><strong>Hello,</strong></p>
                                    <p>Natus consequuntur perspiciatis esse beatae illo quos eaque.</p>
                                    <p>Earum, quisquam, fugit? Numquam dolor magni nisi? Suscipit odit, ipsam
                                        iusto enim culpa, temporibus vero possimus error voluptates sequi. Iusto
                                        ipsam, nihil? Eveniet modi maxime animi excepturi a dignissimos
                                        doloribus,
                                        inventore sed ratione, ducimus atque earum maiores tenetur officia
                                        commodi dicta tempora consequatur non nesciunt ipsam, consequuntur quia
                                        fuga aspernatur impedit et? Natus, earum.</p>
                                    <blockquote class="blockquote">
                                        Earum, quisquam, fugit? Numquam dolor magni nisi? Suscipit odit, ipsam
                                        iusto enim culpa, temporibus vero possimus error voluptates sequi.
                                    </blockquote>
                                    <p>Earum, quisquam, fugit? Numquam dolor magni nisi? Suscipit odit, ipsam
                                        iusto enim culpa, temporibus vero possimus error voluptates sequi. Iusto
                                        ipsam, nihil? Eveniet modi maxime animi excepturi a dignissimos
                                        doloribus,
                                        inventore sed ratione, ducimus atque earum maiores tenetur officia
                                        commodi dicta tempora consequatur non nesciunt ipsam, consequuntur quia
                                        fuga aspernatur impedit et? Natus, earum.</p><br> Regards
                                    <br> Json Roy
                                </div>
                                <div class="mail_footer mt-4">
                                    <ul class="mailbox-attachments clearfix">
                                        <li>
                                                    <span class="mailbox-attachment-icon">
                                                        <i class="fa fa-file-pdf-o"></i>
                                                    </span>

                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="mailbox-attachment-name">
                                                    <i class="fa fa-paperclip"></i> Sep2014-report.pdf
                                                </a>
                                                <span class="mailbox-attachment-size">
                                                          1,245 KB
                                                            <a href="#" class="btn btn-primary pull-right"><i class="fa fa-cloud-download"></i></a>
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                                    <span class="mailbox-attachment-icon">
                                                        <i class="fa fa-file-word-o"></i>
                                                    </span>

                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="mailbox-attachment-name">
                                                    <i class="fa fa-paperclip"></i> App
                                                    Description.docx
                                                </a>
                                                <span class="mailbox-attachment-size">
                                                            1,245 KB
                                                            <a href="#" class="btn btn-primary pull-right"><i class="fa fa-cloud-download"></i></a>
                                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                                    <span class="mailbox-attachment-icon has-img">
                                                        <img src="{{asset('assets/images/image-attach.jpg')}}" alt="Attachment">
                                                    </span>

                                            <div class="mailbox-attachment-info">
                                                <a href="#" class="mailbox-attachment-name">
                                                    <i class="fa fa-camera"></i> photo1.png
                                                </a>
                                                <span class="mailbox-attachment-size">
                                                            2.67 MB
                                                            <a href="#" class="btn btn-primary pull-right"><i class="fa fa-cloud-download"></i></a>
                                                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="reply_btn pull-left">
                                    <button class="btn btn-primary mb-mob-3">
                                        <i class="ion-ios-undo"></i>
                                        Reply
                                    </button>
                                    <button class="btn btn-primary mb-mob-3">
                                        <i class="ion-forward"></i>
                                        Forward
                                    </button>
                                </div>
                                <div class="reply_btn pull-right mb-mob-3">
                                    <button class="btn btn-danger">
                                        <i class="ion-ios-trash"></i>
                                        Delete
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="ion-printer"></i>
                                        Print
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
