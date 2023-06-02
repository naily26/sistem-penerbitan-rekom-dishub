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
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('angkutan.create')}}"><i class="fa fa-plus"></i>
                    Tambah Angkutan</a>
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <!-- start: DYNAMIC TABLE PANEL -->

                <div class="panel panel-default">

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                            <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>KBLI</th>
                                    <th>Nomor Kendaraan</th>
                                    <th>Nomor Mesin</th>
                                    <th>Keterangan</th>
                                    <th>Status Permohonan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($angkutan as $item)
                                <tr>
                                    <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->perusahaan->kbli->kode}}</td>
                                    <td>{{$item->nomor_kendaraan}}</td>
                                    <td>{{$item->nomor_mesin}}</td>
                                    <th>{{$item->pengajuan_angkutan->keterangan}}</th>
                                    <td>
                                        @if ($item->pengajuan_angkutan->status_pengecekan == 'menunggu')
                                        <span class="label label-primary">Diproses</span></td>
                                    @elseif ($item->pengajuan_angkutan->status_pengecekan == 'disetujui')
                                    <span class="label label-success">Disetujui</span>
                                    @elseif ($item->pengajuan_angkutan->status_pengecekan == 'ditolak')
                                    <span class="label label-danger">Ditolak</span>
                                    @endif

                                    <td>
                                        <a class="btn btn-xs btn-success"
                                            href="{{ route('angkutan.show', $item->id)}}"><i class="fa fa-eye"></i>
                                            detail</a>
                                        @if ($item->pengajuan_angkutan->status_pengecekan == 'ditolak')
                                            <a class="btn btn-xs btn-warning"
                                                href="{{ route('angkutan.edit', $item->pengajuan_angkutan->id)}}"><i class="fa fa-edit"></i>
                                                edit</a>
                                            <a class="btn btn-xs btn-danger" href="#hapus-data{{$item->id}}"
                                                data-toggle="modal"><i class="fa fa-trash-o"></i>
                                                hapus</a>
                                        @endif
                                    </td>
                                </tr>
                                <div id="hapus-data{{$item->id}}" class="modal fade" tabindex="-1" data-width="360"
                                    style="display: none;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title">
                                            <i class="bi bi-exclamation-octagon-fill" style="color: red"></i>
                                            Konfirmasi Pembatalan Permohonan
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Apakah anda yakin untuk membatalkan permohonan surat rekomendasi peruntukan angkutan umum ini?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{url('angkutan/'.$item->pengajuan_angkutan->id)}}" method="post" enctype="multipart/form-data">
                                        {{ method_field('delete') }}
                                        @csrf
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                                Batalkan
                                            </button>
                                            <button type="submit" class="btn btn-danger" id="submit">
                                                Ya
                                            </button>
                                        </div>
                                    </form>
                                </div>
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
<!-- end: PAGE -->
@endsection
@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />

<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />
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
