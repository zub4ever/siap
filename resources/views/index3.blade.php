@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Dashboard V3
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
               AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/am-charts/css/am-charts.css') }}" type="text/css" media="all" />

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/charts/morris-bundle/morris.css') }}">

    <!--=========================*
               Datatable
    *===========================-->
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">

    <!--=========================*
              Flag Icons
    *===========================-->
    <link href="{{asset('assets/css/flag-icon.min.css')}}" rel="stylesheet"/>

    <!--=========================*
               C3 Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/c3charts/c3.css')}}">
    
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                <div class="card-body">
                    <div class="icon_rt">
                        <i class="feather ft-users"></i>
                    </div>
                    <div class="icon_specs">
                        <p>New Users</p>
                        <span>57893</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                <div class="card-body">
                    <div class="icon_rt">
                        <i class="feather ft-activity"></i>
                    </div>
                    <div class="icon_specs">
                        <p>User Activity</p>
                        <span>670</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-icon rt_icon_card mb-0 text-center">
                <div class="card-body">
                    <div class="icon_rt">
                        <i class="feather ft-shopping-bag"></i>
                    </div>
                    <div class="icon_specs">
                        <p>Total Sales</p>
                        <span>9466</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 stretched_card">
            <div class="card">
                <h5 class="card-header">Top Campaigns</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Campaign</th>
                                <th class="border-0">Visits</th>
                                <th class="border-0">Revenue</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Campaign#1</td>
                                <td>98,789 </td>
                                <td>$4563</td>
                            </tr>
                            <tr>
                                <td>Campaign#2</td>
                                <td>2,789 </td>
                                <td>$325</td>
                            </tr>
                            <tr>
                                <td>Campaign#3</td>
                                <td>1,459 </td>
                                <td>$225</td>
                            </tr>
                            <tr>
                                <td>Campaign#4</td>
                                <td>5,035 </td>
                                <td>$856</td>
                            </tr>
                            <tr>
                                <td>Campaign#5</td>
                                <td>5,035 </td>
                                <td>$856</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="#" class="btn btn-outline-primary float-right">Details</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-mob-4 stretched_card">
            <div class="team_member">
                <img src="{{asset('assets/images/team/member1.jpg')}}" alt="Team Member">
                <div class="member_name">
                    <h3>JHON DOE</h3>
                    <span>CEO/Founder</span>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 stretched_card mt-mob-4">
            <div class="card card-icon">
                <div class="card-body">
                    <h4 class="card-title mb-4">User Stats</h4>
                    <div id="c3chart_pie"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card">
                <h5 class="card-header"> Traffic By Social Media</h5>
                <div class="card-body p-0">
                    <ul class="social-sales list-group list-group-flush">
                        <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fa fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                        </li>
                        <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fa fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                        </li>
                        <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fa fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                        </li>
                        <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fa fa-google-plus"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn-primary-link">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 mt-mob-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="feather ft-download"></i>
                            <p>Total Downloads</p>
                            <span>670</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-mob-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Products Sold</p>
                            <span>9869</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-mob-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="feather ft-users"></i>
                            <p>Total users</p>
                            <span>4567</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-mob-4 mt-5">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="feather ft-image"></i>
                            <p>Total Images</p>
                            <span>4568</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-mob-4 mt-5">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-stats-up"></i>
                            <p>Statics</p>
                            <span>9873</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-mob-4 mt-5">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-cup"></i>
                            <p>Achievements</p>
                            <span>6543</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- data table -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Registered Users</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>29</td>
                                <td>
                                    <i class="ti-pencil mr-1 btn btn-success"></i>
                                    <i class="ti-trash btn btn-danger"></i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table -->
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Timeline</h4>
                    <div class="pl-5">
                        <div class="timeline-task">
                            <div class="icon bg_secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-reactid="781">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <div class="timeline_title">
                                <h4>You got 1 New Message</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg_success">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                            <div class="timeline_title">
                                <h4>Your Verification Successful</h4>
                                <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg_danger">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12" y2="17"></line>
                                </svg>
                            </div>
                            <div class="timeline_title">
                                <h4>Something Went Wrong</h4>
                                <span class="time"><i class="ti-time"></i>09:20 Am</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mt-mob-4 stretched_card">
            <div class="card">
                <h5 class="card-header"> Sales By Traffic</h5>
                <div class="card-body p-0">
                    <ul class="traffic-sales list-group list-group-flush">
                        <li class="traffic-sales-content list-group-item ">
                            <span class="traffic-sales-name">Direct</span>
                            <span class="traffic-sales-amount">$4000.00
                                <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
                                    <i class="fa fa-fw fa-arrow-up"></i>
                                </span>
                                <span class="ml-1 text-success">5.86%</span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item">
                            <span class="traffic-sales-name">Search
                                <span class="traffic-sales-amount">$3123.00
                                    <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
                                        <i class="fa fa-fw fa-arrow-up"></i>
                                    </span>
                                    <span class="ml-1 text-success">5.86%</span>
                                </span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item">
                            <span class="traffic-sales-name">Social
                                <span class="traffic-sales-amount ">$3099.00
                                    <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light">
                                        <i class="fa fa-fw fa-arrow-up"></i>
                                    </span>
                                    <span class="ml-1 text-success">5.86%</span>
                                </span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item">
                            <span class="traffic-sales-name">Referrals
                                <span class="traffic-sales-amount ">$2220.00
                                    <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light">
                                        <i class="fa fa-fw fa-arrow-down"></i>
                                    </span>
                                    <span class="ml-1 text-danger">4.02%</span>
                                </span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item ">
                            <span class="traffic-sales-name">Email
                                <span class="traffic-sales-amount">$1567.00
                                    <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light">
                                        <i class="fa fa-fw fa-arrow-down"></i>
                                    </span>
                                    <span class="ml-1 text-danger">3.86%</span>
                                </span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item ">
                            <span class="traffic-sales-name">Visits
                                <span class="traffic-sales-amount">$1567.00
                                    <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light">
                                        <i class="fa fa-fw fa-arrow-down"></i>
                                    </span>
                                    <span class="ml-1 text-danger">3.86%</span>
                                </span>
                            </span>
                        </li>
                        <li class="traffic-sales-content list-group-item ">
                            <span class="traffic-sales-name">Marketing
                                <span class="traffic-sales-amount">$1567.00
                                    <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light">
                                        <i class="fa fa-fw fa-arrow-down"></i>
                                    </span>
                                    <span class="ml-1 text-danger">3.86%</span>
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- start amchart js -->
    <script src="{{asset('assets/vendors/am-charts/js/ammap.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/worldLow.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/continentsLow.js')}}"></script>
    <script src="{{asset('assets/vendors/am-charts/js/light.js')}}"></script>
    <!-- maps js -->
    <script src="{{asset('assets/js/am-maps.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('assets/vendors/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('assets/vendors/charts/morris-bundle/morris.js')}}"></script>

    <!--Chart Js-->
    <script src="{{asset('assets/vendors/charts/charts-bundle/Chart.bundle.js')}}"></script>

    <!-- C3 Chart -->
    <script src="{{asset('assets/vendors/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/charts/c3charts/d3-5.4.0.min.js')}}"></script>

    <!-- Data Table js -->
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/responsive.bootstrap.min.js')}}"></script>

    <!--Home Script-->
    <script src="{{asset('assets/js/home.js')}}"></script>
@endsection
