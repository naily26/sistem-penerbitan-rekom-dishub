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
                                                            <th>Nama Perusahaan</th>
                                                            <th>KBLI</th>
                                                            <th>Nomor Kendaraan</th>
                                                            <th>Nomor Mesin</th>
                                                            <th>Keterangan</th>
                                                            <th>Petugas</th>
                                                            <th>Action</th>
                                                                
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no=1; ?>
                                                            @foreach ($diproses as $item)
                                                            <tr>
                                                                <td>{{$no}}</td>
                                                                <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                                                <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                                                <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                                                <td>{{$item->angkutan->nomor_mesin}}</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td>
                                                                    @if ($item->petugas_id)
                                                                    {{$item->petugas->nama}}
                                                                    @else
                                                                        tidak ada
                                                                    @endif
                                                                </td>
                                                                <td><a class="btn btn-xs btn-success" href="{{route('angkutan.show', $item->id)}}"><i class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                            </tr>
                                                            <?php $no++; ?>
                                                            @endforeach
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
                                                    id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Nomor Kendaraan</th>
                                                                <th>Nomor Mesin</th>
                                                                <th>Keterangan</th>
                                                                <th>Status Penerbitan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no2=1; ?>
                                                            @foreach ($disetujui as $item)
                                                            <tr>
                                                                <td>{{$no2}}</td>
                                                                <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                                                <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                                                <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                                                <td>{{$item->angkutan->nomor_mesin}}</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td>{{$item->status_penerbitan}}</td>
                                                                <td><a class="btn btn-xs btn-success" href="{{route('angkutan.show', $item->id)}}"><i class="fa fa-eye"></i>
                                                                    detail</a></td>>
                                                            </tr>
                                                            <?php $no2++; ?>
                                                            @endforeach
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
                                                    id="sample_3">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Perusahaan</th>
                                                            <th>KBLI</th>
                                                            <th>Nomor Kendaraan</th>
                                                            <th>Nomor Mesin</th>
                                                            <th>Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no3=1; ?>
                                                            @foreach ($tertunda as $item)
                                                            <tr>
                                                                <td>{{$no3}}</td>
                                                                <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                                                <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                                                <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                                                <td>{{$item->angkutan->nomor_mesin}}</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td><a class="btn btn-xs btn-success" href="{{route('angkutan.show', $item->id)}}"><i class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                            </tr>
                                                        <?php $no3++; ?>
                                                            @endforeach
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
                                                    id="sample_4">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Perusahaan</th>
                                                            <th>KBLI</th>
                                                            <th>Nomor Kendaraan</th>
                                                            <th>Nomor Mesin</th>
                                                            <th>Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no3=1; ?>
                                                            @foreach ($ditolak as $item)
                                                            <tr>
                                                                <td>{{$no3}}</td>
                                                                <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                                                <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                                                <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                                                <td>{{$item->angkutan->nomor_mesin}}</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td><a class="btn btn-xs btn-success"
                                                                    href="{{ route('angkutan.show', 1)}}"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                            </tr>
                                                            <?php $no3++; ?>
                                                            @endforeach
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />

<style>


</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js "></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/admin/js/ui-modals.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        $('#sample_1').DataTable();
        $('#sample_2').DataTable();
        $('#sample_3').DataTable();
        $('#sample_4').DataTable();
        Index.init();
    });

</script>
@endpush
