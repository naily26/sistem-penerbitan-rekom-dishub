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
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-sm-5 col-md-4">
                            <div class="user-left">
                                <div class="center">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <form action="{{url('upload-profile')}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="user-image">
                                                <div class="fileupload-new thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"><img
                                                        src=" <?= Auth::user()->foto ?? asset('assets/admin/images/avatar-1-xl.jpg') ?> "
                                                        alt="">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                                </div>
                                                <div class="user-image-buttons">
                                                    <span class="btn btn-teal btn-file btn-sm"><span
                                                            class="fileupload-new"><i
                                                                class="fa fa-pencil"></i></span><span
                                                            class="fileupload-exists"><i
                                                                class="fa fa-pencil"></i></span>
                                                        <input type="file" name="foto" accept="image/*" onchange="this.form.submit();">
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-bricky btn-sm"
                                                        data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Account Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>email:</td>
                                            <td>
                                                <a href="">
                                                    {{ Auth::user()->email }}
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><span class="label label-sm label-info">Pemohon</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="core-box">
                                        <div class="heading">
                                            <i class="clip-user-4 circle-icon circle-green"></i>
                                            <h2>Keterangan Perusahaan</h2>
                                        </div>
                                        <div class="content">
                                            Pada halaman ini, anda dapat mengajukan permohonan surat keterangan
                                            perusahan. Jika anda telah mengajukan secara offline sebelumnya, maka anda
                                            harus mengunggah surat yang telah diterbitkan tersebut.
                                        </div>
                                        <a class="view-more" href="{{route('perusahaan.index')}}">
                                            Kunjungi halaman <i class="clip-arrow-right-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="core-box">
                                        <div class="heading">
                                            <i class="clip-code circle-icon circle-teal"></i>
                                            <h2>Rekomendasi Angkutan</h2>
                                        </div>
                                        <div class="content">
                                            Pada halaman ini, anda dapat meengajukan permohonan surat rekomendasi
                                            peruntukkan bagi angkutan. Anda bisa memilih 3 keterangan (tujuan) yaitu
                                            perpanjangan STNK, kendaraan mutasi dan kendaraan baru.
                                        </div>
                                        <a class="view-more" href="{{route('angkutan.index')}}">
                                            Kunjungi halaman <i class="clip-arrow-right-2"></i>
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
                        </div>
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
    <script src="{{asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/jquery.pulsate/jquery.pulsate.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/pages-user-profile.js')}}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function () {
            Main.init();
            Index.init();
        });

    </script>
    @endpush

    @push('style')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">
    @endpush
