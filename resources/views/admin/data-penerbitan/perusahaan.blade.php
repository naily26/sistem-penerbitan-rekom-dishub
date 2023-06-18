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
                        Data Penerbitan Surat Keterangan Perusahaan
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Penerbitan <small>Surat Keterangan Perusahaan </small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px">
                <form action="{{url('export-perusahaan')}}" method="post">
                    @csrf
                    <input type="hidden" id="custId" name="from" value="{{$from}}">
                    <input type="hidden" id="custId" name="to" value="{{$to}}">
                    <button class="btn pull-right mb-4 mr-2 btn-teal btn-sm" style="margin-left: 5px" type="submit">
                        Ekspor Data
                        <i class="fa fa-arrow-circle-up"></i></button>
                </form>
                <a href="#filter" data-toggle="modal" class="btn pull-right mb-4 mr-2 btn-teal btn-sm">
                    Filter Data
                    <i class="fa fa-filter"></i>
                </a>
            </div>
        </div>
        <!-- start: BOOTSTRAP CREATE MODALS -->
        <div id="filter" class="modal fade" tabindex="-1" data-width="560" style="display: none;">
            <form action="{{url('filter-penerbitan-perusahaan')}}" method="get">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Filter Data</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start">Mulai</label>
                                <input type="date" name="start" id="start" class="form-control"
                                    placeholder="Masukkan Bulan Mulai">
                                <p id="error-message-start" class="validation-error-label"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end">Selesai</label>
                                <input type="date" name="end" id="end_month" class="form-control"
                                    placeholder="Masukkan Bulan Selesai">
                                <p id="error-message-end" class="validation-error-label"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <!-- end: BOOTSTRAP CREATE MODALS -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- start: DYNAMIC TABLE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table class="table table-full-width table-striped table-bordered table-hover "
                                id="sample_1" style="overflow-x:auto;">
                                <thead>
                                    <tr>
                                        <th>No Penerbitan</th>
                                        <th>Nama Perusahaan</th>
                                        <th>NIB</th>
                                        <th>KBLI</th>
                                        <th>Petugas</th>
                                        <th>Email Pemohon</th>
                                        <th>Tanggal Permohonan</th>
                                        <th>Tanggal Pengambilan</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->nomor_keterangan_perusahaan}}</td>
                                        <td>{{$item->perusahaan->nama_perusahaan}}</td>
                                        <td>{{$item->perusahaan->nib}}</td>
                                        <td>{{$item->perusahaan->kbli->kode}}</td>
                                        <td>{{$item->petugas->kode}}</td>
                                        <td>{{$item->perusahaan->user->email}}</td>
                                        <td>{{$item->tanggal_permohonan}}</td>
                                        <td>{{$item->tanggal_pengambilan}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
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
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
    type="text/css" />
<style>
    td,
    th {
        white-space: nowrap;
    }

</style>

@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<script type="text/javascript" src="{{asset('assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('assets/admin/plugins/DataTables/media/js/DT_bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/js/table-data.js')}}"></script>
<script src="{{asset('assets/admin/js/index.js')}}"></script>
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
