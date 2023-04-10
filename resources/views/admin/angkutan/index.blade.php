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
                        Data Angkutan
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Angkutan <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: INLINE TABS PANEL -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tabbable">
                                    <ul id="myTab" class="nav nav-tabs tab-bricky">
                                        <li class="active">
                                            <a href="#data-dalam-proses" data-toggle="tab">
                                                Data dalam proses <span class="badge badge-danger">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-disetujui" data-toggle="tab">
                                                Data disetujui
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-tertunda" data-toggle="tab">
                                                Data tertunda
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-ditolak" data-toggle="tab">
                                                Data ditolak
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane in active" id="data-dalam-proses">
                                            <!-- start: DYNAMIC TABLE PANEL -->
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-full-width"
                                                        id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th class="hidden-xs">Nomor Kendaraan</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Lama Permohonan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
																	<a class="btn btn-xs btn-light-grey"
																	href="{{route('angkutan.edit', 1)}}"><i
																		class="fa fa-check-square-o"></i>
																	konfirmasi status</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-primary"
																	href="{{route('angkutan.edit', 1)}}"><i
																		class="fa fa-check-square-o"></i>
																	konfirmasi status</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end: DYNAMIC TABLE PANEL -->
                                        </div>
                                        <div class="tab-pane" id="data-disetujui">
                                            <!-- start: DYNAMIC TABLE PANEL -->
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-full-width"
                                                        id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th class="hidden-xs">Nomor Kendaraan</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Lama Permohonan</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>Belum dicetak</td>
                                                                <td><a class="btn btn-xs btn-success" href="{{ route('angkutan.show', 1)}}"><i class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>Belum dicetak</td>
                                                                <td><a class="btn btn-xs btn-light-grey" href="#"><i
                                                                    class="fa fa-eye"></i>
                                                                detail</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end: DYNAMIC TABLE PANEL -->
                                        </div>
                                        <div class="tab-pane" id="data-tertunda">
                                            <!-- start: DYNAMIC TABLE PANEL -->
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-full-width"
                                                        id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th class="hidden-xs">Nomor Kendaraan</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Lama Permohonan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-teal" href="{{ route('perusahaan.show', 1)}}"><i class="fa fa-info"></i>
                                                                        tinjau perusahaan</a>
                                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
																		detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-teal" href="{{ route('perusahaan.show', 1)}}"><i class="fa fa-info"></i>
                                                                        tinjau perusahaan</a>
                                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
																		detail</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end: DYNAMIC TABLE PANEL -->
                                        </div>
                                        <div class="tab-pane" id="data-ditolak">
                                            <!-- start: DYNAMIC TABLE PANEL -->
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-full-width"
                                                        id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th class="hidden-xs">Nomor Kendaraan</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Lama Permohonan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
																		detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td class="hidden-xs">N 4332 DD</td>
                                                                <td>AOE Explore</td>
                                                                <td>43212</td>
                                                                <td>1 hari</td>
                                                                <td>
                                                                    <a class="btn btn-xs btn-light-grey" href="#"><i class="fa fa-eye"></i>
																		detail</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- end: DYNAMIC TABLE PANEL -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end: INLINE TABS PANEL -->
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
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />

<style>
    i {
        padding: 5px;
    }

</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="assets/admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/DT_bootstrap.js"></script>
<script src="assets/admin/js/table-data.js"></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/admin/js/ui-modals.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init();
        Index.init();
    });

</script>
@endpush
