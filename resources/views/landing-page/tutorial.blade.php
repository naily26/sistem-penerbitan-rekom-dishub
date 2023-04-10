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
                <h1>Tutorial</h1>
            </div>
            <div class="col-md-8 col-sm-8">
                <ul class="pull-right breadcrumb">
                    <li>
                        <a href="{{route('homepage')}}">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Tutorial
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="wrapper padding50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- BEGIN VIDEO -->
                    {{-- <iframe src="https://youtu.be/HavTlSmzmmI" height="300" style="width:100%; border:0" allowFullScreen></iframe> --}}
                    <iframe height="300" style="width:100%; border:0" src="https://www.youtube.com/embed/HavTlSmzmmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- END VIDEO -->
                </div>
                <div class="col-md-6">
                    <h3>Tutorial Penggunaan Aplikasi</h3>
                    <div class="row">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="col-md-12">
                                        <blockquote class="testimonial">
                                            <p>
                                                Silahkan melihat tutorial penggunaan website pada video atau dokumen guideline yang telah disediakan untuk proses permohonan Surat Keterangan Perusahaan dan Rekomendasi Peruntukan Angkutan Umum.
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down"></div>
                                        <div class="testimonial-author">
                                            <div class="img-thumbnail img-thumbnail-small">
                                                <img src="https://play-lh.googleusercontent.com/BkRfMfIRPR9hUnmIYGDgHHKjow-g18-ouP6B2ko__VnyUHSi1spcc78UtZ4sVUtBH4g" alt="">
                                            </div>
                                            <p>
                                                <strong>Dokumen Pedoman</strong><span>Silahkan mengunduh dokumen berikut untuk tutorial penggunaan aplikasi. <br/> <a><i class="clip-file-pdf"></i> guideline-book.pdf </a></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end: MAIN CONTAINER -->

@push('style')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="assets/frontend/plugins/bootstrap-social-buttons/social-buttons-3.css">
<link rel="stylesheet" href="assets/frontend/plugins/flex-slider/flexslider.css">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="assets/frontend/plugins/flex-slider/jquery.flexslider.js"></script>
<script src="assets/frontend/plugins/mixitup/src/jquery.mixitup.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        $('#Grid').mixitup();
    });

</script>
@endpush
@endsection
