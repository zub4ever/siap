@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    Inbox
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3>
                        Mailbox
                        <small>13 new messages</small>
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
                                <h3 class="mail_head">Inbox <span class="inbox_numb bg-primary">8</span></h3>
                            </div>
                            <div class="col-lg-12">
                                <div class="pull-right all_mails_btn">
                                    <div class="btn-group btn-split mail_more_btn mt-0">
                                        <button type="button" class="btn btn-primary">All Mails</button>
                                        <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mail_list col-lg-12 table-responsive">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr class="unread" id="mail_msg_1">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" checked class="custom-control-input"
                                                       id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">John Smith</td>
                                        <td class="open-view"><span
                                                class="label label-primary mr-2">Test Label</span>&nbsp;<span
                                                class="msgtext">Hello, hope you having a great day ahead.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">19:34</span></td>
                                    </tr>
                                    <tr id="mail_msg_17">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Laura Willson</td>
                                        <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_18">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Jane D.</td>
                                        <td class="open-view"><span class="msgtext"><span
                                                    class="label label-secondary mr-2">Successful</span>We play, dance and love. Share love all.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_19">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">John Smith</td>
                                        <td class="open-view"><span
                                                class="label label-danger mr-2">Congrats</span>&nbsp;<span
                                                class="msgtext">Hello, hope you having a great day ahead.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_20">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Laura Willson</td>
                                        <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck16">
                                                <label class="custom-control-label" for="customCheck16"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Jane D.</td>
                                        <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_22">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck17">
                                                <label class="custom-control-label" for="customCheck17"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">John Smith</td>
                                        <td class="open-view"><span
                                                class="label label-primary mr-2">Test Label</span>&nbsp;<span
                                                class="msgtext">Hello, hope you having a great day ahead.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_23">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck18">
                                                <label class="custom-control-label" for="customCheck18"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Laura Willson</td>
                                        <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                    </tr>
                                    <tr id="mail_msg_24">
                                        <td class="">
                                            <div class="custom-control custom-checkbox primary-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck19">
                                                <label class="custom-control-label" for="customCheck19"></label>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                        </td>
                                        <td class="open-view">Jane D.</td>
                                        <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span>
                                        </td>
                                        <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation" class="mt-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <span class="ti-angle-left"></span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <span class="ti-angle-right"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
