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
    <!-- start: REVOLUTION SLIDERS -->
    <section class="fullwidthbanner-container">
        <div class="fullwidthabnner">
            <ul>
                <!-- start: THIRD SLIDE -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="assets/frontend/images/sliders/slidebg3.png" style="background-color:rgb(246, 246, 246)"
                        alt="slidebg1" data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat">
                    <div class="caption lft slide_title slide_item_left" data-x="0" data-y="105" data-speed="400"
                        data-start="1500" data-easing="easeOutExpo">
                        Penerbitan Surat
                    </div>
                    <div class="caption sft slide_subtitle slide_item_left" data-x="0" data-y="180" data-speed="400"
                        data-start="2000" data-easing="easeOutExpo">
                        Keterangan Perusahaan & Rekomendasi Peruntukan
                    </div>
                    <div class="caption sfr slide_desc slide_item_left" data-x="0" data-y="220" data-speed="400"
                        data-start="2500" data-easing="easeOutExpo">
                        Silahkan melakukan registrasi akun untuk proses permohonan.
                        <br>
                        Jika anda sudah mempunyai akun, silahkan melakukan login untuk akses dashboard.
                    </div>
                    <a class="caption sfb btn btn-bricky slide_btn slide_item_left" href="{{route('register')}}"
                        data-x="0" data-y="320" data-speed="400" data-start="3000" data-easing="easeOutExpo">
                        Daftar Sekarang!
                    </a>
                    <div class="caption sfr" data-x="800" data-y="115" data-speed="500" data-start="1000"
                        data-easing="easeOutBack">
                        <img src="assets/frontend/images/sliders/device1.png" alt="Image 1">
                    </div>
                    <div class="caption sfr" data-x="710" data-y="225" data-speed="500" data-start="1300"
                        data-easing="easeOutBack">
                        <img src="assets/frontend/images/sliders/device2.png" alt="Image 1">
                    </div>
                    <div class="caption sfr" data-x="860" data-y="300" data-speed="500" data-start="1600"
                        data-easing="easeOutBack">
                        <img src="assets/frontend/images/sliders/device3.png" alt="Image 1">
                    </div>
                </li>
                <!-- end: THIRD SLIDE -->
            </ul>
        </div>
    </section>
    <!-- end: REVOLUTION SLIDERS -->
    <section class="wrapper padding50">
        <!-- start: ABOUT US CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="text-align: right;"> {{$data->dasar_hukum}}
                    </h2>
                    <hr class="fade-left">
                    <p style="text-align: right;">
                        @php
                        echo $data->isi_dasar_hukum
                        @endphp
                    </p>
                </div>
                <div class="col-sm-6">
                    <ul class="icon-list animate-group">
                        <li>
                            <div class="timeline animate"
                                data-animation-options='{"animation":"scaleToBottom", "duration":"300"}'></div>
                            <i class="clip-stack-empty circle-icon circle-teal animate"
                                data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
                            <div class="icon-list-content">
                                <h4>Pemohon Mengajukan Permohonan Surat</h4>
                                <p>
                                    Proses pengajuan dilakukan melalui sistem dengan cara mendaftarkan akun terlebih
                                    dahulu kemudian mengisi data dan melengkapi persyaratan.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline animate"
                                data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'>
                            </div>
                            <i class="clip-paperplane circle-icon circle-green animate"
                                data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
                            <div class="icon-list-content">
                                <h4>Petugas Melakukan Pengecekan</h4>
                                <p>
                                    Proses pengecekan dilakukan berdasarkan kelengkapan dokumen yang telah diunggah.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline animate"
                                data-animation-options='{"animation":"scaleToBottom", "duration":"300", "delay": "300"}'>
                            </div>
                            <i class="clip-stack-empty circle-icon circle-teal animate"
                                data-animation-options='{"animation":"flipInY", "duration":"600"}'></i>
                            <div class="icon-list-content">
                                <h4>Penyerahan Surat</h4>
                                <p>
                                    Proses penyerahan surat denagn cara pengambilan secara langsung di kantor Dinas
                                    Perhubungan Jawa Timur.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: ABOUT US CONTAINER -->
    </section>
    <section class="wrapper wrapper-grey padding50">
        <!-- start: PORTFOLIO CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="flexslider" data-plugin-options='{"controlNav":false,"sync": "#carousel"}'>
                        <ul class="slides">
                            <li>
                                <a class="group1" href="{{$data->foto_persyaratan}}" title="Dishub Jatim">
                                    <img src="{{$data->foto_persyaratan}}" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                            <li>
                                <a class="group1" href="{{$data->foto_lembaga}}" title="Dishub Jatim">
                                    <img src="{{$data->foto_lembaga}}" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-content">
                        <hr class="fade-right">
                        @php
                        echo $data->persyaratan
                        @endphp
                        <hr class="fade-right">

                    </div>
                </div>
            </div>
        </div>
        <!-- end: PORTFOLIO CONTAINER -->
</div>
<!-- end: MAIN CONTAINER -->

@push('style')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="{{asset('assets/frontend/plugins/revolution_slider/rs-plugin/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/plugins/flex-slider/flexslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/plugins/colorbox/example2/colorbox.css')}}">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{asset('assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/flex-slider/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/stellar.js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/frontend/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('assets/frontend/js/index.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endpush
@endsection
