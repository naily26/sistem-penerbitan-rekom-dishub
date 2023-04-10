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
                    <h1>Data Perusahaan <small>Permohonan surat keterangan perusahaan</small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('perusahaan.create')}}"><i class="fa fa-plus"></i>
                    Buat Permohonan</a>
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
                                    <th >NIB</th>
                                    <th>KBLI</th>
                                    <th>Alamat</th>
                                    <th> Status</th>
                                    <th>Action</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perusahaan as $item)
                                <tr>
                                    <td>{{$item->nama_perusahaan}}</td>
                                    <td>{{$item->nib}}</td>
                                    <td>{{$item->kbli->kode}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>
                                        @if ($item->status_pengecekan_1 == 'menunggu')
                                            <span class="label label-primary">Menunggu persetujuan admin</span>
                                        @elseif ($item->status_pengecekan_1 == 'ditolak')
                                            <span class="label label-danger">ditolak oleh admin</span>
                                        @elseif ($item->status_pengecekan_1 == 'disetujui')
                                            @if ($item->status_pengecekan_2 == 'menunggu')
                                                <span class="label label-primary">Menunggu persetujuan petugas</span>
                                            @elseif ($item->status_pengecekan_2 == 'ditolak')
                                                <span class="label label-danger">ditolak oleh petugas</span>
                                            @elseif ($item->status_pengecekan_2 == 'disetujui')
                                                <span class="label label-success">disetujui</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status_pengecekan_1 == 'menunggu')
                                            <a class="btn btn-xs btn-success" href="{{route('perusahaan.show', $item->id)}}"><i class="fa fa-eye"></i> detail</a>
                                        @elseif ($item->status_pengecekan_1 == 'ditolak')
                                            <a class="btn btn-xs btn-warning" href="{{route('perusahaan.edit', $item->id)}}"><i
                                                class="fa fa-edit"></i>
                                            edit</a>
                                            <a class="btn btn-xs btn-success" href="{{route('perusahaan.show', $item->id)}}"><i class="fa fa-eye"></i> detail</a>
                                            <a href="#hapus-data{{$item->id}}" class="btn btn-danger btn-xs" data-toggle="modal"><i
                                                class="fa fa-trash-o"></i>
                                            hapus</a>
                                        @elseif ($item->status_pengecekan_1 == 'disetujui')
                                            @if ($item->status_pengecekan_2 == 'menunggu')
                                                <a class="btn btn-xs btn-success" href="{{route('perusahaan.show', $item->id)}}"><i class="fa fa-eye"></i> detail</a>
                                            @elseif ($item->status_pengecekan_2 == 'ditolak')
                                                <a class="btn btn-xs btn-warning" href="{{route('perusahaan.edit', $item->id)}}"><i
                                                    class="fa fa-edit"></i>
                                                edit</a>
                                                <a class="btn btn-xs btn-success" href="{{route('perusahaan.show', $item->id)}}"><i class="fa fa-eye"></i> detail</a>
                                                <a href="#hapus-data{{$item->id}}" class="btn btn-danger btn-xs" data-toggle="modal"><i
                                                    class="fa fa-trash-o"></i>
                                                hapus</a>
                                            @elseif ($item->status_pengecekan_2 == 'disetujui')
                                                <a class="btn btn-xs btn-success" href="{{route('perusahaan.show', $item->id)}}"><i class="fa fa-eye"></i> detail</a>
                                            @endif
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
                                                <p>Apakah anda yakin untuk menghpus data ini? permohonan surat keterangan perusahaan akan otomatis terhapus dan semua data angkutan yang berhubungan dengan data ini juga akan terhapus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{url('perusahaan/'.$item->id)}}" method="post" enctype="multipart/form-data">
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

    <style>
        .btn-xs {
            margin-top: 5px;
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
