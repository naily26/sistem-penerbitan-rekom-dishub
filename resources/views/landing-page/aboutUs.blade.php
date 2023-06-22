@extends('layouts.guests.master')

@section('content')
<!-- start: MAIN CONTAINER -->
<div class="main-container">
    <!-- start: STYLE SELECTOR BOX -->
    <div id="style_selector" class="hidden-xs">
        <div id="style_selector_container">
            <div class="style-main-title">
                Style Selector
            </div>
            <div class="box-title">
                Predefined Color Schemes
            </div>
            <div class="images icons-color">
                <a id="blue" href="#"><img class="active" alt="" src="assets/frontend/images/blue.png"></a>
                <a id="purple" href="#"><img alt="" src="assets/frontend/images/purple.png"></a>
                <a id="red" href="#"><img alt="" src="assets/frontend/images/red.png"></a>
                <a id="orange" href="#"><img alt="" src="assets/frontend/images/orange.png"></a>
                <a id="green" href="#"><img alt="" src="assets/frontend/images/green.png"></a>
            </div>
            <div style="height:25px;line-height:25px; text-align: center">
                <a class="clear_style" href="#">
                    Clear Styles
                </a>
                <a class="save_style" href="#">
                    Save Styles
                </a>
            </div>
        </div>
        <div class="style-toggle close"></div>
    </div>
    <!-- end: STYLE SELECTOR BOX -->
    <section class="page-top">
        <div class="container">
            <div class="col-md-4 col-sm-4">
                <h1>About Us</h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="pull-right breadcrumb">
                    <li>
                        <a href="{{route('homepage')}}">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="container">
            <div class="portfolio-title">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2 class="shorter">Dinas Perhubungan Provinsi Jawa Timur</h2>
                    </div>
                </div>
            </div>
            <hr class="tall">
            <div class="row">
                <div class="col-md-6">
                    <div class="flexslider" data-plugin-options='{"directionNav":true}'>
                        <ul class="slides">
                            <li>
                                <img src="{{$data->foto_lembaga}}" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-info">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pull-right">
                                    <li>
                                        <i class="fa fa-calendar"></i> {{date('Y-m-d')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Deskripsi</h4>
                    <p class="taller">
                        {{$data->deskripsi_lembaga}}
                    </p>
                    <span data-appear-animation-delay="800" data-appear-animation="rotateInUpLeft"
                        class="arrow hlb appear-animation rotateInUpLeft appear-animation-visible"
                        style="animation-delay: 800ms;"></span>
                    <ul class="portfolio-details list-unstyled">
                        <li>
                            <p>
                                <strong>Kontak:</strong>
                            </p>
                            <ul class="list list-skills icons list-unstyled list-inline">
                                <li>
                                    <i class="fa fa-phone"></i> {{$data->telepon_lembaga}}
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                <strong>Alamat:</strong>
                            </p>
                            <p>
                                {{$data->alamat_lembaga}}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="wrapper padding50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="center">Some of Our Works</h1>
                    <hr>
                </div>
                <div class="col-md-4">
                    <div class="flexslider" data-plugin-options='{"directionNav":true, "controlNav": false}'>
                        <ul class="slides">
                            <li>
                                <img src="assets/frontend/images/image01.jpg" />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image02.jpg" />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image03.jpg" />
                            </li>
                        </ul>
                    </div>
                    <h4>Top Team</h4>
                    <p>
                        Aenean commodo ligula eget dolor. Aeneane penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="flexslider" data-plugin-options='{"directionNav":true, "controlNav": false}'>
                        <ul class="slides">
                            <li>
                                <img src="assets/frontend/images/image04.jpg" />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image05.jpg" />
                            </li>
                        </ul>
                    </div>
                    <h4>Top Team</h4>
                    <p>
                        Aenean commodo ligula eget dolor. Aeneane penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="flexslider" data-plugin-options='{"directionNav":true, "controlNav": false}'>
                        <ul class="slides">
                            <li>
                                <img src="assets/frontend/images/image06.jpg" />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image07.jpg" />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image08.jpg" />
                            </li>
                        </ul>
                    </div>
                    <h4>Top Team</h4>
                    <p>
                        Aenean commodo ligula eget dolor. Aeneane penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Donec quam felis.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
</div>
<!-- end: MAIN CONTAINER -->

@push('style')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="{{asset('assets/frontend/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/plugins/flex-slider/flexslider.css')}}">

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{asset('assets/frontend/plugins/flex-slider/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/mixitup/src/jquery.mixitup.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        $('#Grid').mixitup();
    });

</script>
@endpush
@endsection
