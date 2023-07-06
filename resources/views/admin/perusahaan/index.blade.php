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
                        Data Perusahaan
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Perusahaan <small>Permohonan surat keterangan perusahaan</small></h1>
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
                                            Data dalam proses @if ( $data['perusahaan_diproses'])
                                            <span class="badge badge-danger">{{$data['perusahaan_diproses']}}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#data-disetujui" data-toggle="tab">
                                            Data disetujui @if ( $data['perusahaan_menunggu'])
                                            <span class="badge badge-danger">{{$data['perusahaan_menunggu']}}</span>
                                            @endif
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
                                            <div class="panel-body" style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th>NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Lama permohonan</th>
                                                            <th>Petugas</th>
                                                            <th>Email Pemohon</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($diproses as $item)
                                                        <tr>
                                                            <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                                            <td>{{$item->perusahaan->nib}}</td>
                                                            <td>{{$item->perusahaan->kbli->kode}}</td>
                                                            <td><?php echo lama($item->tanggal_permohonan);?></td>
                                                            <td>@if (is_null($item->petugas_id))
                                                                belum ada
                                                                @else
                                                                {{$item->petugas->nama}}
                                                                @endif </td>
                                                            <td>{{$item->perusahaan->user->email}}</td>
                                                            <td><a class="btn btn-xs btn-success"
                                                                    href="{{ route('perusahaan.show', $item->perusahaan_id)}}"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                        </tr>
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
                                            <div class="panel-body" style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th>NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Lama permohonan</th>
                                                            <th>Petugas</th>
                                                            <th>Email Pemohon</th>
                                                            <th>Status Penerbitan</th>
                                                            <th>Action</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($disetujui as $item)
                                                        <tr>
                                                            <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                                            <td>{{$item->perusahaan->nib}}</td>
                                                            <td>{{$item->perusahaan->kbli->kode}}</td>
                                                            <td><?php echo lama($item->tanggal_permohonan);?></td>
                                                            <td>
                                                                @if ($item->petugas_id)
                                                                {{$item->petugas->nama}}
                                                                @else
                                                                Belum ada
                                                                @endif
                                                            </td>
                                                            <td>{{$item->perusahaan->user->email}}</td>
                                                            <td>{{$item->status_penerbitan}}</td>
                                                            <td><a class="btn btn-xs btn-success"
                                                                    href="{{ route('perusahaan.show', $item->perusahaan_id)}}"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a>
                                                                @if ($item->status_penerbitan == 'dicetak')
                                                                <a class="btn btn-xs btn-primary"
                                                                    href="#naik{{$item->id}}" data-toggle="modal"><i
                                                                        class="fa fa-calendar"></i>
                                                                    konfirmasi surat naik</a>
                                                                @elseif ($item->status_penerbitan == 'birokrasi')
                                                                <a class="btn btn-xs btn-primary"
                                                                    href="#konfirmasi-penerbitan{{$item->id}}"
                                                                    data-toggle="modal"><i
                                                                        class="fa  fa-check-square-o"></i>
                                                                    konfirmasi surat tertandatangani</a>
                                                                {{-- @elseif($item->status_penerbitan == 'diterbitkan')
                                                                    <a class="btn btn-xs btn-primary" href="{{url('get-notif', $item->perusahaan->id)}}"><i
                                                                    class="fa fa-envelope"></i>
                                                                Kirim Nontifikasi</a> --}}
                                                                @endif
                                                            </td>
                                                            <div id="naik{{$item->id}}" class="modal fade" tabindex="-1"
                                                                data-width="360" style="display: none;">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-hidden="true">
                                                                        &times;
                                                                    </button>
                                                                    <h4 class="modal-title">
                                                                        <i class="bi bi-exclamation-octagon-fill"
                                                                            style="color: red"></i>
                                                                        Konfirmasi Birokrasi Surat
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p>Apakah anda yakin untuk mengonfirmasi
                                                                                bahwa
                                                                                surat telah naik dan diberikan ke
                                                                                pimpinan?
                                                                                status penerbitan tidak dapat diubah
                                                                                lagi
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form
                                                                    action="{{url('/konfirmasi-birokrasi-surat', $item->id)}}">
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
                                                            <div id="konfirmasi-penerbitan{{$item->id}}"
                                                                class="modal fade" tabindex="-1" data-width="360"
                                                                style="display: none;">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-hidden="true">
                                                                        &times;
                                                                    </button>
                                                                    <h4 class="modal-title">
                                                                        <i class="bi bi-exclamation-octagon-fill"
                                                                            style="color: red"></i>
                                                                        Konfirmasi Penerbitan Surat
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p>Apakah anda yakin untuk mengonfirmasi
                                                                                bahwa
                                                                                surat telah tertandatangani oleh
                                                                                pimpinan?
                                                                                status penerbitan tidak dapat diubah
                                                                                lagi
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <form
                                                                    action="{{url('/konfirmasi-penerbitan-surat', $item->id)}}">
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
                                                        </tr>
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
                                            <div class="panel-body" style="overflow-x:auto;">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_3">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Perusahaan</th>
                                                            <th>NIB</th>
                                                            <th>KBLI</th>
                                                            <th>Lama permohonan</th>
                                                            <th>Petugas</th>
                                                            <th>Email Pemohon</th>
                                                            <th>Action</th>
                                                            {{-- <th>Action</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ditolak as $item)
                                                        <tr>
                                                            <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                                            <td>{{$item->perusahaan->nib}}</td>
                                                            <td>{{$item->perusahaan->kbli->kode}}</td>
                                                            <td><?php echo lama($item->tanggal_permohonan);?></td>
                                                            <td>
                                                                @if ($item->petugas_id)
                                                                {{$item->petugas->nama}}
                                                                @else
                                                                Belum ada
                                                                @endif
                                                            </td>
                                                            <td>{{$item->perusahaan->user->email}}</td>
                                                            <td><a class="btn btn-xs btn-success"
                                                                    href="{{ route('perusahaan.show', $item->perusahaan_id)}}"><i
                                                                        class="fa fa-eye"></i>
                                                                    detail</a></td>
                                                        </tr>
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
        padding: 1px;
        margin: 1px;
    }

    td,
    th {
        white-space: nowrap;
    }

</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{ asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js "></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/admin/js/ui-modals.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        $('#sample_1').DataTable();
        $('#sample_2').DataTable();
        $('#sample_3').DataTable();
        Main.init();
        Index.init();
    });

</script>

@endpush
