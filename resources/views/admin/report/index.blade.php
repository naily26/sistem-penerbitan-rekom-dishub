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
                        Laporan
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Laporan <small> </small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-12" style="margin-block-end: 10px; " >
                <button type="button" class="btn btn-teal" style="float: right;">Export <i class="fa fa-arrow-circle-up"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-checkbox"></i>
                        Rekap Surat
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                        </div>
                    </div>
                    <div class="panel-body panel-scroll" style="height:180px">
                        <ul class="todo">
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat keterangan perusahaan yang masuk</span>
                                    <span class="label label-danger" style="opacity: 1;"> today</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat rekomendasi peruntukan angkutan yang masuk</span>
                                    <span class="label label-danger" style="opacity: 1;"> today</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah permohonan surat keterangan perusahaan yang diterbitkan</span>
                                    <span class="label label-danger" style="opacity: 1;"> today</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah permohonan surat rekomendasi peruntukan angkutan yang diterbitkan</span>
                                    <span class="label label-danger" style="opacity: 1;"> today</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-users-2"></i>
                        Rekap aktivitas petugas
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                        </div>
                    </div>
                    <div class="panel-body panel-scroll" style="height:300px">
                        <table class="table table-striped table-hover" id="sample-table-1">
                            <thead>
                                <tr>
                                    <th class="center">Nama</th>
                                    <th>Aktivitas</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">Peter Clark</td>
                                    <td>Memproses permohonan surat</td>
                                    <td >342</td>
                                </tr>
                                <tr>
                                    <td class="center">Peter Clark</td>
                                    <td>Memproses permohonan surat</td>
                                    <td >342</td>
                                </tr>
                                <tr>
                                    <td class="center">Peter Clark</td>
                                    <td>Memproses permohonan surat</td>
                                    <td >342</td>
                                </tr>
                                <tr>
                                    <td class="center">Peter Clark</td>
                                    <td>Memproses permohonan surat</td>
                                    <td >342</td>
                                </tr>
                            </tbody>
                        </table>
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
<script src="assets/admin/plugins/flot/jquery.flot.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.pie.js"></script>
<script src="assets/admin/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/admin/plugins/jquery.sparkline/jquery.sparkline.js"></script>
<script src="assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="assets/admin/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
<script src="assets/admin/js/index.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Index.init();
    });

</script>
@endpush
