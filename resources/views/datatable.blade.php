@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Data Table
@endsection

{{-- This Page Css --}}
@section('css')
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
    <div class="row">
        <!-- data table -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Data Table Default</h4>
                    <div class="table-responsive">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
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
        <!-- data table -->
    </div>
    <div class="row">
        <!-- Dark table -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Dark</h4>
                    <div class="table-responsive datatable-dark">
                        <table id="dataTable3" class="text-center">
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
        <!-- Dark table -->
    </div>
    <div class="row">
        <!-- Primary table -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Primary</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center">
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
        <!-- Primary table -->
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- Data Table js -->
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/vendors/data-table/js/responsive.bootstrap.min.js')}}"></script>

    <!-- Data table Init -->
    <script src="{{asset('assets/js/init/data-table.js')}}"></script>
@endsection
