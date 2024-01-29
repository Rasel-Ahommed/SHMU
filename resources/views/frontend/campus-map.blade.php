@extends('layout\main')

@section('main-contant')

    <body class="sticky-header ">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
        @php
            use App\Models\CampusDetails;
            $data = CampusDetails::get();
        @endphp

        <div id="SHMU-preloader">
            <div class="loading-spinner">
                <div class="preloader-spin-1"></div>
                <div class="preloader-spin-2"></div>
            </div>
            <div class="preloader-close-btn-wraper">
                <span class="btn btn-primary preloader-close-btn">
                    Cancel Preloader</span>
            </div>
        </div>

        <div id="main-wrapper" class="main-wrapper">

            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->
            <my-nav></my-nav>
            <!--=====================================-->
            <!-- <div class="edu-breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <div class="page-title">
                            <h1 class="title">Campus Map</h1>
                        </div>
                        <ul class="edu-breadcrumb">
                            <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                            <li class="separator"><i class="icon-angle-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">SHMU Act – 2021</li>
                        </ul>
                    </div>
                </div>
                <ul class="shape-group">
                    <li class="shape-1">
                        <span></span>
                    </li>
                    <li class="shape-2 scene"><img data-depth="2" src="assets/images/about/shape-13.png" alt="shape"></li>
                    <li class="shape-3 scene"><img data-depth="-2" src="assets/images/about/shape-15.png" alt="shape"></li>
                    <li class="shape-4">
                        <span></span>
                    </li>
                    <li class="shape-5 scene"><img data-depth="2" src="assets/images/about/shape-07.png" alt="shape"></li>
                </ul>
            </div> -->

            <!--================
                university map
                =====================-->
            <!-- university map -->
            <div class="campus-map pt-5">
                <h3>CAMPUS MAP:</h3>
                <div class="campus-google-map text-center">
                    {!! $data[0]->cam_map !!}
                </div>
            </div>
        @endsection
