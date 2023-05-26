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

                    <li class="active">
                        Data Perusahaan
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Perusahaan <small>Penerbitan surat keterangan perusahaan</small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->

        <div class="row">
            <div class="col-md-12">
                <!-- start: DYNAMIC TABLE PANEL -->

                <div class="panel panel-default">

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Penerbitan</th>
                                    <th>Nama Perusahaan</th>
                                    <th>NIB</th>
                                    <th>KBLI</th>
                                    <th>Lama permohonan</th>
                                    <th>Email</th>
                                    <th>Status Penerbitan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($disetujui as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->nomor_keterangan_perusahaan}}</td>
                                    <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->perusahaan->nib}}</td>
                                    <td>{{$item->perusahaan->kbli->kode}}</td>
                                    <td><?php echo lama($item->tanggal_permohonan);?></td>
                                    <td>{{$item->perusahaan->user->email}}</td>
                                    <td>{{$item->status_penerbitan}}</td>
                                    <td><a class="btn btn-xs btn-success"
                                        href="{{ route('perusahaan.show', $item->perusahaan_id)}}"><i
                                            class="fa fa-eye"></i>
                                        detail</a>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: DYNAMIC TABLE PANEL -->
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>
</div>
<?php
 function lama($val) {
    $today = date("y-m-d");
    $startTimeStamp = strtotime($val);
    $endTimeStamp = strtotime($today);
    $timeDiff = abs($endTimeStamp - $startTimeStamp);
    $numberDays = $timeDiff/86400;  
    $numberDays = intval($numberDays);
    return $numberDays+1;
 }
 ?>
<!-- end: PAGE -->
@endsection
@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
<style>

    .pdf {
        font-size: 16px !important;
        vertical-align: middle !important;
    }

	.i-pdf {
		text-align: center;
	}

</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="assets/admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/DT_bootstrap.js"></script>
<script src="assets/admin/js/table-data.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init();
        Index.init();
    });

</script>
@endpush
