@extends('dashboard.layouts.master')
@push('css')
    <!--- Internal Fontawesome css-->
    <link href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!---Ionicons css-->
    <link href="{{asset('dashboard/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!---Internal Typicons css-->
    <link href="{{asset('dashboard/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
    <!---Internal Feather css-->
    <link href="{{asset('dashboard/plugins/feather/feather.css')}}" rel="stylesheet">
    <!---Internal Falg-icons css-->
    <link href="{{asset('dashboard/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
@endpush
@section('content')
    <!-- Main-error-wrapper -->
    <div class="main-error-wrapper  page page-h ">
        <img src="{{asset('dashboard/img/media/404.png')}}" class="error-page" alt="error">
        <h2>Oopps. The page you were looking for doesn't exist.</h2>
        <h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="{{ url('/' . $page='dashboard/index') }}">Back to Home</a>
    </div>
    <!-- /Main-error-wrapper -->
@endsection
@push('js')
@endpush
