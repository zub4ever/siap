@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Profile Page
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               Fancy Box
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">
    <!--=========================*
               Datatable
    *===========================-->
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/data-table/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/data-table/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/data-table/css/responsive.jqueryui.min.css')}}">
@endsection

@section('main-content')
    <div class="profile_page">
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-profile">
                    <div class="profile-bg-img" style="background: url('{{asset('assets/images/lock-bg.jpg')}}') no-repeat;">
                        <div class="card-block user-info">
                            <div class="col-md-12">
                                <div class="media-left">
                                    <a href="#" class="profile-image">
                                        <img class="user-img img-radius" src="{{asset('assets/images/team/member2.jpg')}}" alt="user-img">
                                    </a>
                                </div>
                                <div class="media-body row">
                                    <div class="col-lg-12">
                                        <div class="user-title">
                                            <h2>Json Roy</h2>
                                            <span class="text-white">Web Developer</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="pull-right cover-btn">
                                            <button type="button" class="btn btn-light m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                            <button type="button" class="btn btn-light"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-header card mb-4">
                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-expanded="true">Personal Info</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#user_info" role="tab" aria-expanded="false">User's Gallery</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User Activity</a>
                            <div class="slide"></div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card_title mb-0">About Me</h5>
                            </div>
                            <div class="card-block">
                                <div class="view-info">
                                    <div class="general-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Full Name</th>
                                                            <td>David Jhon</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gender</th>
                                                            <td>Male</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Birth Date</th>
                                                            <td>April 12, 1990</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Marital Status</th>
                                                            <td>Single</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>London, UK</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td><a href="#">example@example.com</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Mobile Number</th>
                                                            <td>(4479) - 9876567</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Twitter</th>
                                                            <td>@test</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Skype</th>
                                                            <td>test.skype</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Website</th>
                                                            <td><a href="#">www.example.com</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text mb-0">Description About Me</h5>
                                    </div>
                                    <div class="card-block user-desc">
                                        <div class="view-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nostrum placeat quis ratione similique. A alias culpa debitis deserunt dicta earum eius excepturi, facere maiores quia quos saepe ullam ut!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="user_info" role="tabpanel" aria-expanded="false">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text mb-0">User Gallery</h5>
                            </div>
                            <div class="card-block">
                                <div id="mt_portfolio" class="gallery-section gallery-page">
                                    <div class="container">
                                        <div class="row portfolio_row grid-masonry">
                                            <div class="isotopeContainer">
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw1.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw1.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw3.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw3.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw4.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw4.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw5.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw5.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw7.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw7.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector webdevelopment grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw8.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw8.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw9.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw9.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>

                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw10.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw10.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <!-- Portfolio Item -->
                                                <div class="portfolio_grid grid no-padding isotopeSelector marketing grid-item">
                                                    <figure class="effect-chico">
                                                        <img src="{{asset('assets/images/portfolio/bw10.jpg')}}" alt="Portfolio"/>
                                                        <figcaption>
                                                            <h3>
                                                                <a href="javascript:void(0);" class="view_proj">Portfolio Item</a>
                                                                <span>
                                                                <a href="{{asset('assets/images/portfolio/bw10.jpg')}}" class="fancybox open_img"><i class="ion-ios-plus-empty"></i></a>
                                                            </span>
                                                            </h3>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contacts" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header contact-user">
                                        <h5 class="mb-0">John Doe</h5>
                                    </div>
                                    <div class="card-block">
                                        <ul class="list-group list-contacts">
                                            <li class="list-group-item active"><a href="#">All Activities</a></li>
                                            <li class="list-group-item"><a href="#">Recent Activities</a></li>
                                            <li class="list-group-item"><a href="#">Favourites</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-block groups-contact">
                                        <h4 class="card_title">Button Groups</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item justify-content-between">
                                                Project
                                                <span class="badge badge-primary badge-pill">30</span>
                                            </li>
                                            <li class="list-group-item justify-content-between">
                                                Notes
                                                <span class="badge badge-success badge-pill">20</span>
                                            </li>
                                            <li class="list-group-item justify-content-between">
                                                Activity
                                                <span class="badge badge-info badge-pill">100</span>
                                            </li>
                                            <li class="list-group-item justify-content-between">
                                                Schedule
                                                <span class="badge badge-danger badge-pill">50</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive datatable-primary data_table_main table-responsive dt-responsive">
                                            <table id="dataTable2" class="table-striped text-center dataTable no-footer dtr-inline">
                                                <thead class="text-capitalize">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start Date</th>
                                                    <th>salary</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>29</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>21</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>29</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>21</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
    <!-- Fancy Box Js -->
    <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assets/js/init/fancy.js')}}"></script>

    <!-- Data Table js -->
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/responsive.bootstrap.min.js')}}"></script>

    <!-- Data table Init -->
    <script src="{{asset('assets/js/init/data-table.js')}}"></script>
@endsection
