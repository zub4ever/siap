@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Full Calendar
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
         Fullscreen Calendar
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Draggable Events</h4>
                    <!-- the events -->
                    <div id="external-events">
                        <div class="external-event bg-success">Lunch</div>
                        <div class="external-event bg-warning">Go home</div>
                        <div class="external-event bg-info">Do homework</div>
                        <div class="external-event bg-primary">Work on UI design</div>
                        <div class="external-event bg-danger">Sleep tight</div>
                        <div class="custom-control custom-checkbox primary-checkbox mt-3">
                            <input type="checkbox" class="custom-control-input" id="drop-remove">
                            <label class="custom-control-label" for="drop-remove">Remove After Drop</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <!-- THE CALENDAR -->
                    <div id="calendar" class="full_calendar"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--=========================*
            This Page Scripts
    *===========================-->
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendors/moment/moment.js')}}"></script>
    <script src="{{asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>

    <!-- Calendar Init -->
    <script src="{{asset('assets/js/init/full-calendar.js')}}"></script>
@endsection
