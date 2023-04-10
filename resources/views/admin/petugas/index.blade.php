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
                        Data Petugas
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Petugass <small> </small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('petugas.create')}}"><i class="fa fa-plus"></i>
                    Tambah Data</a>
            </div>
        </div><br />
        <div class="row">
            <div class="col-md-12">
                <!-- start: DYNAMIC TABLE PANEL -->

                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="hidden-xs">Nama</th>
                                    <th>Kode</th>
                                    <th>Jabatan</th>
                                    <th>E-mail</th>
                                    <th>No Handphone</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                @foreach ($petugas as $key => $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td class="hidden-xs">{{$data->nama}}</td>
                                    <td>{{$data->kode}}</td>
                                    <td>{{$data->jabatan}}</td>
                                    <td>{{$data->user->email}}</td>
                                    <td>{{$data->no_hp}}</td>
                                    <td>petugas{{$data->kode}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-light-grey" href="{{ route('petugas.edit', $data->id)}}"><i class="fa fa-edit"></i>
                                            edit</a>
                                        <a class="btn btn-xs btn-light-grey" data-toggle="modal" href="#delete{{$data->id}}"><i class="fa fa-trash-o"></i>
                                            hapus</a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                                <div id="delete{{$data->id}}" class="modal fade" tabindex="-1" data-width="360" style="display: none;">   
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title">
                                            <i class="bi bi-exclamation-octagon-fill" style="color: red"></i>
                                            Hapus Data Petugas?
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Semua data yang berkaitan dengan skema ini akan terhapus juga. Apakah Anda yakin ingin menghapus?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{url('petugas/'. $data->id)}}" method="post" enctype="multipart/form-data">
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
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>
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
<script src="assets/admin/js/index.js"></script>
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
