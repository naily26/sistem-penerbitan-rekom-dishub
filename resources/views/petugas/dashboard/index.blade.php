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
                                                        <input type="file" name="foto" onchange="this.form.submit();">
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
                                        {{-- <tr>
                                            <td>phone:</td>
                                            <td>{{ Auth::user()->petugas->no_hp }}</td>
                                        </tr> --}}
                                        <tr>
                                            <td>Kode</td>
                                            <td>
                                                {{ Auth::user()->petugas->kode }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan:</td>
                                            <td>{{ Auth::user()->petugas->jabatan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><span class="label label-sm label-info">Petugas</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('perusahaan.index')}}" class="btn btn-icon btn-block">
                                        <i class="clip-home-2" style="font-size:24px; padding: 5pt"></i>
                                        Permohonan Perusahaan <span class="badge badge-info"> 4 </span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{ route('angkutan.index')}}" class="btn btn-icon btn-block pulsate">
                                        <i class="clip-truck" style="font-size:24px; padding: 5pt"></i>
                                        Permohonan Angkutan <span class="badge badge-info"> 23 </span>
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <i class="clip-users-2"></i>
                                    Antrian Permohonan
                                </div>
                                <div class="panel-body panel-scroll" style="height:300px">
                                    <table class="table table-striped table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <th>Lama Permohonan</th>
                                                <th>Jumlah Angkutan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($antrian as $item)
                                            <?php
                                                            $startTimeStamp = strtotime($item->tanggal_permohonan);
                                                            $endTimeStamp = strtotime($today);
                                                            $timeDiff = abs($endTimeStamp - $startTimeStamp);
                                                            $numberDays = $timeDiff/86400;  
                                                            $numberDays = intval($numberDays);
                                                            ?>
                                            <tr>
                                                <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                                <td>{{$numberDays+1}} hari</td>
                                                <td class="hidden-xs">
                                                    <a href="#" rel="nofollow" target="_blank">
                                                        ella@example.com
                                                    </a></td>
                                                <td class="center">
                                                    <a class="btn btn-xs btn-blue"
                                                        style="font-size: 8pt; padding-block: 2px"
                                                        href="{{url('take-antrian', $item->id)}}"><i
                                                            class="fa fa-cog"></i>
                                                        Proses data</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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
