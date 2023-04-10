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
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="user-image">
                                            <div class="fileupload-new thumbnail"><img
                                                    src="assets/admin/images/avatar-1-xl.jpg" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"
                                                style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div class="user-image-buttons">
                                                <span class="btn btn-teal btn-file btn-sm"><span
                                                        class="fileupload-new"><i class="fa fa-pencil"></i></span><span
                                                        class="fileupload-exists"><i class="fa fa-pencil"></i></span>
                                                    <input type="file">
                                                </span>
                                                <a href="#" class="btn fileupload-exists btn-bricky btn-sm"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
                                            <td>phone:</td>
                                            <td>(641)-734-4763</td>
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
                                <div class="col-sm-6" >
                                    <a href="{{ route('perusahaan.create')}}" class="btn btn-icon btn-block">
                                        <i class="clip-home-2" style="font-size:24px; padding: 5pt"></i>
                                        Permohonan Keterangan Perusahaan  
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('angkutan.create')}}" class="btn btn-icon btn-block pulsate">
                                        <i class="clip-truck" style="font-size:24px; padding: 5pt"></i>
                                       Permohonan Rekomendasi Angkutan
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <i class="clip-menu"></i>
                                    Recent Activities
                                </div>
                                <div class="panel-body panel-scroll" style="height:400px">
                                    <ul class="activities">
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-upload-2 circle-icon circle-teal"></i>
                                                <span class="desc">Permohonan keterangan perusahaan untuk diproses.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-upload-2 circle-icon circle-teal"></i>
                                                <span class="desc">Permohonan rekomendasi angkutan untuk diproses.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-checkmark-2 circle-icon circle-green"></i>
                                                <span class="desc">Permohonan keterangan perusahaan disetujui.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-checkmark-2 circle-icon circle-green"></i>
                                                <span class="desc">Permohonan rekomendasi angkutan disetujui.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-clock circle-icon circle-orange"></i>
                                                <span class="desc">Permohonan rekomendasi angkutan ditunda.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-warning circle-icon circle-bricky"></i>
                                                <span class="desc">Permohonan keterangan perusahaan ditolak.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="activity" href="javascript:void(0)">
                                                <i class="clip-warning circle-icon circle-bricky"></i>
                                                <span class="desc">Permohonan rekomendasi angkutan ditolak.</span>
                                                <div class="time">
                                                    <i class="fa fa-time bigger-110"></i>
                                                    123990
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
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
<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
<script src="assets/js/pages-user-profile.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Index.init();
    });

</script>
@endpush

@push('style')
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-social-buttons/social-buttons-3.css">
@endpush
