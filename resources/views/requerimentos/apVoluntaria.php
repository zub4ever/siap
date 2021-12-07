@extends('layouts.public')


{{-- Page Title --}}
@section('page-title')
Voluntária
@endsection

@section('main-content')










@endsection
@section('js')

<script src="{{asset('assets/vendors/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/jquery.select2.js"></script>
<script src="{{Config::get('app.url')}}/node_modules/select2/dist/js/select2.min.js"></script>

@endsection
