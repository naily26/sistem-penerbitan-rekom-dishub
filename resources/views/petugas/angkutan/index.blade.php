@extends('layouts.admin.master')

@section('content')
<!-- start: PAGE -->
<div class="main-content">
    <!-- start: PANEL CONFIGURATION MODAL FORM -->
    <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Panel Configuration</h4>
                </div>
                <div class="modal-body">
                    Here will be a configuration form
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- end: SPANEL CONFIGURATION MODAL FORM -->
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
                                                Data dalam proses @if ($data['angkutan_diproses'])
                                                <span class="badge badge-danger">{{$data['angkutan_diproses']}}</span>
                                                @endif 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-disetujui" data-toggle="tab">
                                                Data disetujui @if ($data['angkutan_menunggu'])
                                                <span class="badge badge-danger">{{$data['angkutan_menunggu']}}</span>
                                                @endif 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-ditolak" data-toggle="tab">
                                                Data ditolak
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#data-tertunda" data-toggle="tab">
                                                Data tetunda
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
                                                                <th>Lama Permohonan</th>
                                                                <th>Keterangan</th>
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
                                                                <td><?php echo lama($item->tanggal_permohonan);?> hari</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td><a class="btn btn-xs btn-primary"
																	href="{{route('angkutan.edit', $item->id)}}"><i
																		class="fa fa-check-square-o"></i>
																	konfirmasi status</a></td>
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
                                                                <th>No</th>
                                                                <th>Nama Perusahaan</th>
                                                                <th>KBLI</th>
                                                                <th>Nomor Kendaraan</th>
                                                                <th>Nomor Mesin</th>
                                                                <th>Lama Permohonan</th>
                                                                <th>Keterangan</th>
                                                                <th>Status Penerbitan</th>
                                                                <th>Action</th>
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
                                                                <td><?php echo lama($item->tanggal_permohonan);?> hari</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td>{{$item->status_penerbitan}}</td>
                                                                <td>
                                                                    @if ($item->status_penerbitan == 'menunggu')
                                                                        <a class="btn btn-xs btn-success"
                                                                            href="{{ route('angkutan.show', $item->id)}}"><i
                                                                                class="fa fa-eye"></i>
                                                                            detail</a>
                                                                        <a class="btn btn-xs btn-blue" target="_blank"
                                                                            href="{{ url('cetak-surat-angkutan', $item->id)}}"><i
                                                                                class="fa fa-file"></i>
                                                                            cetak</a>
                                                                        <a class="btn btn-xs btn-primary" href="#konfirmasi-percetakan{{$item->id}}" data-toggle="modal"><i class="fa fa-check-square-o"></i>
                                                                            Konfirmasi percetakan</a>
                                                                    @else
                                                                        <a class="btn btn-xs btn-success"
                                                                            href="{{ route('angkutan.show', $item->id)}}"><i
                                                                                class="fa fa-eye"></i>
                                                                            detail</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <div id="konfirmasi-percetakan{{$item->id}}" class="modal fade" tabindex="-1"
                                                                data-width="360" style="display: none;">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">
                                                                        &times;
                                                                    </button>
                                                                    <h4 class="modal-title">
                                                                        <i class="bi bi-exclamation-octagon-fill"
                                                                            style="color: red"></i>
                                                                        Konfirmasi Percetakan Surat
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p>Apakah anda yakin untuk mengonfirmasi bahwa surat telah dicetak? status percetakan tidak dapat diubah lagi </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form action="{{url('/konfirmasi-pencetakan-surat-angkutan', $item->id)}}" >
                                                                    @csrf
                                                                    <div class="modal-footer">
                                                                        <button type="button" data-dismiss="modal"
                                                                            class="btn btn-default">
                                                                            Batalkan
                                                                        </button>
                                                                        <button type="submit" class="btn btn-danger"
                                                                            id="submit">
                                                                            Ya
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <?php $no2++; ?>
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
                                                        id="sample_3">
                                                        <thead>
                                                            <tr>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Perusahaan</th>
                                                                    <th>KBLI</th>
                                                                    <th>Nomor Kendaraan</th>
                                                                    <th>Nomor Mesin</th>
                                                                    <th>Lama Permohonan</th>
                                                                    <th>Keterangan</th>
                                                                    <th>Action</th>
                                                                </tr>
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
                                                                <td><?php echo lama($item->tanggal_permohonan);?> hari</td>
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
                                        <div class="tab-pane" id="data-tertunda">
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
                                                                <th>Lama Permohonan</th>
                                                                <th>Keterangan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no4=1; ?>
                                                            @foreach ($tertunda as $item)
                                                            <tr>
                                                                <td>{{$no4}}</td>
                                                                <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                                                <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                                                <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                                                <td>{{$item->angkutan->nomor_mesin}}</td>
                                                                <td><?php echo lama($item->tanggal_permohonan);?> hari</td>
                                                                <td>{{$item->keterangan}}</td>
                                                                <td><a class="btn btn-xs btn-success" href="{{route('angkutan.show', $item->id)}}"><i class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                            </tr>
                                                            <?php $no4++; ?>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />

<style>
    .btn-xs {
        margin-top: 4px;
    }

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
        $("#sample_1").DataTable();
        $("#sample_2").DataTable();
        $("#sample_3").DataTable();
        $("#sample_4").DataTable();
        Index.init();
    });

</script>
@endpush
