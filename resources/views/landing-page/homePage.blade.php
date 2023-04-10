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
                    <h2 style="text-align: right;">PP NO 5 TAHUN 2021
                    </h2>
                    <hr class="fade-left">
                    <p style="text-align: right;">
                        1. Bagi perusahaan Angkutan Umum yang memperoleh Nomor Induk Berusaha
                        (NIB) dan Sertifikat Standar Perizinan Berusaha Berbasis Risiko yang BELUM
                        TERVERIFIKASI, dapat mengajukan penerbitan Tanda Nomor Kendaraan
                        Bermotor (TNKB) untuk memperoleh insentif pajak kendaraan bermotor (PKB)
                        dengan melampirkan dokumen Surat Keterangan Perusahaan dan
                        Rekomendasi Peruntukan Angkutan Umum pada Dinas Perhubungan Provinsi
                        Jawa Timur.
                    </p>
                    <p style="text-align: right;">
                        2. Bagi angkutan penumpang umum yang izin trayek/penyelenggaraannya
                        diterbitkan oleh Dinas Perhubungan Kabupaten/Kota, Surat Keterangan
                        Perusahaan dan Rekomendasi Peruntukan Angkutan Penumpang umum
                        diberikan oleh Dinas Perhubungan Kabupaten/Kota sesuai domisili
                        perusahaan angkutan.
                    </p>
                    <hr class="fade-left">
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
                                    Proses pengajuan dilakukan melalui sistem dengan cara mendaftarkan akun terlebih dahulu kemudian mengisi data dan melengkapi persyaratan.
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
                                <h4>Petugas Mencetak Surat</h4>
                                <p>
                                    Jika persyaratan telah dikonfirmasi lengkap, maka petugas akan mencetak surat keterngan perusahaan dan rekomendasi peruntukan.
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
                                <h4>Penyerahan Surat</h4>
                                <p>
                                    Proses penyerahan surat denagn cara pengambilan secara langsung di kantor Dinas Perhubungan Jawa Timur.
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
                                <a class="group1" href="assets/frontend/images/image01.jpg" title="Caption here">
                                    <img src="assets/frontend/images/image01.jpg" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                            <li>
                                <a class="group1" href="assets/frontend/images/image02.jpg" title="Caption here">
                                    <img src="assets/frontend/images/image02.jpg" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                            <li>
                                <a class="group1" href="assets/frontend/images/image03.jpg" title="Caption here">
                                    <img src="assets/frontend/images/image03.jpg" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                            <li>
                                <a class="group1" href="assets/frontend/images/image04.jpg" title="Caption here">
                                    <img src="assets/frontend/images/image04.jpg" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                            <li>
                                <a class="group1" href="assets/frontend/images/image05.jpg" title="Caption here">
                                    <img src="assets/frontend/images/image05.jpg" />
                                    <span class="image-overlay"> <i
                                            class="clip-expand circle-icon circle-main-color"></i> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider animate-group"
                        data-plugin-options='{"itemWidth": 120, "itemMargin": 5}'>
                        <ul class="slides">
                            <li>
                                <img src="assets/frontend/images/image01.jpg" class="animate"
                                    data-animation-options='{"animation":"fadeIn", "duration":"600"}' />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image02.jpg" class="animate"
                                    data-animation-options='{"animation":"fadeIn", "duration":"600"}' />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image03.jpg" class="animate"
                                    data-animation-options='{"animation":"fadeIn", "duration":"600"}' />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image04.jpg" class="animate"
                                    data-animation-options='{"animation":"fadeIn", "duration":"600"}' />
                            </li>
                            <li>
                                <img src="assets/frontend/images/image05.jpg" class="animate"
                                    data-animation-options='{"animation":"fadeIn", "duration":"600"}' />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-content">
                        <h2>Persyaratan</h2>
                        <hr class="fade-right">
                        <p>
                            Lid est laborum dolo rumes fugats untras. Etha rums ser quidem rerum facilis dolores nemis
                            onis fugats vitaes nemo minima rerums unsers sadips amets.
                        </p>
                        <p>
                            Ut enim ad minim veniam, quis nostrud Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur, adipisci amets uns.
                        </p>
                        <p>
                            Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
                            unsers sadips ameet quasi architecto beatae vitae dicta sunt explicabo
                        </p>
                        <ul>
                            <li>
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                eleifend ac, enim.
                            </li>
                            <li>
                                Nulla consequat massa quis enim.
                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                            </li>
                            <li>
                                Ut enim ad minim veniam, quis nostrud Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci amets uns.
                            </li>
                            <li>
                                Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
                                unsers sadips ameet quasi architecto beatae vitae dicta sunt explicabo.
                            </li>
                        </ul>
                        <hr class="fade-right">
                        <a href="#" class="btn btn-default"><i class="fa fa-info"></i> Learn more...</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: PORTFOLIO CONTAINER -->
</div>
<!-- end: MAIN CONTAINER -->

@push('style')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="assets/frontend/plugins/revolution_slider/rs-plugin/css/settings.css">
<link rel="stylesheet" href="assets/frontend/plugins/flex-slider/flexslider.css">
<link rel="stylesheet" href="assets/frontend/plugins/colorbox/example2/colorbox.css">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/frontend/plugins/flex-slider/jquery.flexslider.js"></script>
<script src="assets/frontend/plugins/stellar.js/jquery.stellar.min.js"></script>
<script src="assets/frontend/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="assets/frontend/js/index.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endpush
@endsection
