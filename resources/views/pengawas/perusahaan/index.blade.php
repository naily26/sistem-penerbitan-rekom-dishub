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
                                    <th>Nama Perusahaan</th>
                                    <th class="hidden-xs">NIB</th>
                                    <th>KBLI</th>
                                    <th>Nomor Surat</th>
                                    <th class="hidden-xs">Tanggal</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amaya</td>
                                    <td class="hidden-xs">W3C,
                                        INRIA</td>
                                    <td>Free</td>
                                    <td>Pasuruan</td>
                                    <td class="hidden-xs">19-02-2022</td>
                                    <td class="i-pdf">
                                        <a class="pdf" href="#"><i class="clip-file-pdf" style="color: red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AOL Explorer</td>
                                    <td class="hidden-xs">America Online, Inc</td>
                                    <td>Free</td>
                                    <td>Pasuruan</td>
                                    <td class="hidden-xs">19-02-2022</td>
                                    <td class="i-pdf">
                                        <a class="pdf" href="#"><i class="clip-file-pdf" style="color: red"></i></a>
                                    </td>
                                </tr>
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
    });

</script>
@endpush
