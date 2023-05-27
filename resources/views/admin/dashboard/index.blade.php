@extends('layouts.admin.master')
@section('content')

<!-- start: PAGE -->
<div class="main-content">
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
                <ol class="breadcrumb">
                    <li>
                        <i class="clip-home-3"></i>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Dashboard
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Dashboard <small>overview &amp; stats </small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-4">
                <div class="core-box">
                    <div class="heading">
                        <i class="clip-user-4 circle-icon circle-green"></i>
                        <h2>Manage Petugas</h2>
                    </div>
                    <div class="content">
                        Pada halaman ini, anda dapat menambahkan data petugas untuk membuat akun petugas
                    </div>
                    <a class="view-more" href="#">
                        View More <i class="clip-arrow-right-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="core-box">
                    <div class="heading">
                        <i class="clip-code circle-icon circle-teal"></i>
                        <h2>Manage KBLI</h2>
                    </div>
                    <div class="content">
                        Pada halaman ini, anda dapat mengelola kode KBLI (menambah, mengedit dan menghapus). 
                    </div>
                    <a class="view-more" href="#">
                        View More <i class="clip-arrow-right-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="core-box">
                    <div class="heading">
                        <i class="clip-clip circle-icon circle-bricky"></i>
                        <h2>Manage Landing Page</h2>
                    </div>
                    <div class="content">
                        Pada halaman ini, anda dapat mengelola isi konten dari landing page. 
                    </div>
                    <a class="view-more" href="#">
                        View More <i class="clip-arrow-right-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row space12">
                    <ul class="mini-stats col-sm-12">
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['perusahaan_diproses']?? '-'}}</strong>
                                Permohonan perusahaan dalam proses
                            </div>
                        </li>
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['perusahaan_disetujui']}}</strong>
                                Permohonan perusahaan disetujui
                            </div>
                        </li>
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['perusahaan_ditolak']}}</strong>
                                Permohonan perusahaan ditolak
                            </div>
                        </li>
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['angkutan_diproses']}}</strong>
                                Permohonan angkutan dalam proses
                            </div>
                        </li>
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['angkutan_disetujui']}}</strong>
                                Permohonan angkutan disetujui
                            </div>
                        </li>
                        <li class="col-sm-2">
                            <div class="values">
                                <strong>{{$data['angkutan_ditolak']}}</strong>
                                Permohonan angkutan ditolak
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>
</div>
<!-- end: PAGE -->


@endsection

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


<script src="{{asset('assets/admin/js/index.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Index.init();
    });

</script>
@endpush
