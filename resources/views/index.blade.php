@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Dashboard
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
           AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/am-charts/css/am-charts.css')}}" type="text/css" media="all" />

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/morris-bundle/morris.css')}}">

    <!--=========================*
              Flag Icons
    *===========================-->
    <link href="{{asset('assets/css/flag-icon.min.css')}}" rel="stylesheet"/>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-8 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title mb-2">Eccommerce store's Year Sales</h4>
                    <div class="d-flex flex-wrap align-items-baseline">
                        <h2 class="mr-3">89,99 $</h2>
                        <i class="feather ft-arrow-up mr-1 text-success"></i><span><cite class="mb-0 text-success font-weight-medium">4.89%</cite></span>
                    </div>
                    <div class="chart_container">
                        <canvas id="bar_chart" class="mt-4" style="height: 500px;"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 stretched_card d-block-mob">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-icon rt_icon_card mb-4 mt-mob-4 text-center">
                        <div class="card-body">
                            <div class="icon_rt">
                                <i class="feather ft-users"></i>
                            </div>
                            <div class="icon_specs">
                                <p>New Users</p>
                                <span>20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-icon rt_icon_card mb-4 text-center">
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
                <div class="col-md-12">
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
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1 text-muted">Recent Month Sales</p>
                    <div class="d-flex flex-wrap align-items-baseline">
                        <h2 class="mr-3">89,99 $</h2>
                        <i class="feather ft-arrow-up mr-1 text-success"></i><span><cite class="mb-0 text-success font-weight-medium">4.89%</cite></span>
                    </div>
                    <p class="mb-0 text-muted">World wide Sales</p>
                </div>
                <canvas id="recent-sale-chart"></canvas>
            </div>
        </div>
        <div class="col-lg-3 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-1 text-muted">Current Month Sales</p>
                    <div class="d-flex flex-wrap align-items-baseline">
                        <h2 class="mr-3">19,89 $</h2>
                        <i class="feather ft-arrow-down mr-1 text-danger"></i><span><cite class="mb-0 text-danger font-weight-medium">1.12%</cite></span>
                    </div>
                    <p class="mb-0 text-muted">World wide Sales</p>
                </div>
                <canvas id="current-sale-chart"></canvas>
            </div>
        </div>
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <h5 class="card-header">Sales By Country Traffic Source</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                            <span class="">United States</span><span class="float-right text-dark">78%</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class=" mr-2"><i class="flag-icon flag-icon-ir" title="in" id="in"></i></span><span class="">Iran</span><span class="float-right text-dark">12%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 stretched_card mt-4">
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
        <div class="col-lg-5 stretched_card mt-4">
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
    <div class="row">
        <div class="col-lg-4 stretched_card mt-4">
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
        <div class="col-lg-8 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Product Data Stats</h4>
                    <div class="chart_container">
                        <canvas id="radar_chart"></canvas>
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

    <!--Home Script-->
    <script src="{{asset('assets/js/home.js')}}"></script>
@endsection
