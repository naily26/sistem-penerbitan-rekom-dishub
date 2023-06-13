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
                        Data Kode KBLI
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Kode KBLI <small> Klasifikasi Baku Lapangan Usaha Indonesia</small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('kbli.create')}}"><i class="fa fa-plus"></i>
                    Tambah Data</a>
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
                                    <th>No</th>
                                    <th class="hidden-xs sorting">Kode</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                @foreach ($kbli as $key => $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$data->kode}}</td>
                                    <td>{{$data->keterangan}}</td>
                                    <td>{{$data->kategori }}</td>
                                    <td>
                                        <a class="act"
                                            href="{{ route('kbli.edit', $data->id)}}"><i class="fa fa-edit"> edit </i>
                                            </a>
                                        <a style="color: red;" data-toggle="modal" class="act"
                                            href="#delete{{$data->id}}"><i class="fa fa-trash-o"> hapus </i>
                                            </a>
                                        <a   class="act"
                                            href="{{ route('kbli.show',  $data->id)}}"><i class="fa fa-info-circle"> detail</i> </a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                                <div id="delete{{$data->id}}" class="modal fade" tabindex="-1" data-width="360"
                                    style="display: none;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title">
                                            <i class="bi bi-exclamation-octagon-fill" style="color: red"></i>
                                            Hapus Kode KBLI?
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Semua data yang berkaitan dengan skema ini akan terhapus juga. Apakah
                                                    Anda yakin ingin menghapus?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{url('kbli/'. $data->id)}}" method="post"
                                        enctype="multipart/form-data">
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
        margin-top: 4px;
    }
    .act {
        background-color: aliceblue;
        margin-right: 8px;
    }

</style>
@endpush

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script type="text/javascript" src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
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
