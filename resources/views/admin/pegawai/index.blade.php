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
                        Data Akun Pegawai
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Akun Pegawai <small>meliputi petugas, pengawas dan cumstomer service</small></h1>
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
                                        <a href="#petugas" data-toggle="tab">
                                            Petugas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#pengawas" data-toggle="tab">
                                            Pengawas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#customer-service" data-toggle="tab">
                                            Customer Service
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane in active" id="petugas">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12" style="display: flex; justify-content: flex-end">
                                                        <a class="btn btn-primary" href="{{ route('petugas.create')}}"><i class="fa fa-plus"></i>
                                                            Tambah Data</a>
                                                    </div>
                                                </div><br />
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_1">
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
                                                                <a class="act" href="{{ route('petugas.edit', $data->id)}}"><i class="fa fa-edit"> edit </i>
                                                                    </a>
                                                                <a class="act" style="color: red" data-toggle="modal" href="#delete{{$data->id}}"><i class="fa fa-trash-o"> hapus </i>
                                                                    </a>
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
                                        <!-- end: DYNAMIC TABLE PANEL -->
                                    </div>
                                    <div class="tab-pane" id="pengawas">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12" style="display: flex; justify-content: flex-end">
                                                        <a class="btn btn-primary" href="{{ route('pengawas.create')}}"><i class="fa fa-plus"></i>
                                                            Tambah Data</a>
                                                    </div>
                                                </div><br />
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <tr>
                                                                <th>No</th>
                                                                <th >Nama</th>
                                                                <th>Jabatan</th>
                                                                <th>Lembaga</th>
                                                                <th>E-mail</th>
                                                                <th>Password</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no=1 ?>
                                                        @foreach ($pengawas as $key => $data)
                                                        @php $pw = strtok($data->user->email, '@'); @endphp
                                                        <tr>
                                                            <td>{{$no}}</td>
                                                            <td class="hidden-xs">{{$data->nama}}</td>
                                                            <td>{{$data->jabatan}}</td>
                                                            <td>{{$data->lembaga}}</td>
                                                            <td>{{$data->user->email}}</td>
                                                            <td>{{$pw}}</td>
                                                            <td>
                                                                <a class="act" href="{{ route('pengawas.edit', $data->id)}}"><i class="fa fa-edit"> edit </i>
                                                                    </a>
                                                                <a class="act" style="color: red" data-toggle="modal" href="#delete{{$data->id}}"><i class="fa fa-trash-o"> hapus </i>
                                                                    </a>
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
                                                                    Hapus Data Pengawas?
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p>Semua data yang berkaitan dengan skema ini akan terhapus juga. Apakah Anda yakin ingin menghapus?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="{{url('pengawas/'. $data->id)}}" method="post" enctype="multipart/form-data">
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
                                    <div class="tab-pane" id="customer-service">
                                        <!-- start: DYNAMIC TABLE PANEL -->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12" style="display: flex; justify-content: flex-end">
                                                        <a class="btn btn-primary" href="{{ route('customer-service.create')}}"><i class="fa fa-plus"></i>
                                                            Tambah Data</a>
                                                    </div>
                                                </div><br />
                                                <table
                                                    class="table table-striped table-bordered table-hover table-full-width"
                                                    id="sample_3">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th >Nama</th>
                                                            <th>E-mail</th>
                                                            <th>No Handphone</th>
                                                            <th>Password</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no=1 ?>
                                                        @foreach ($cs as $key => $data)
                                                        @php $pwd = strtok($data->user->email, '@'); @endphp
                                                        <tr>
                                                            <td>{{$no}}</td>
                                                            <td >{{$data->nama}}</td>
                                                            <td>{{$data->user->email}}</td>
                                                            <td>{{$data->no_hp}}</td>
                                                            <td>{{$pwd}}</td>
                                                            <td>
                                                                <a class="act" href="{{ route('customer-service.edit', $data->id)}}"><i class="fa fa-edit"> edit </i>
                                                                    </a>
                                                                <a class="act" style="color: red" data-toggle="modal" href="#delete{{$data->id}}"><i class="fa fa-trash-o"> hapus </i>
                                                                    </a>
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
                                                            <form action="{{url('customer-service/'. $data->id)}}" method="post" enctype="multipart/form-data">
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

.act {
        
        margin: 3px;
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
        $('#sample_1').DataTable();
        $('#sample_2').DataTable();
        $('#sample_3').DataTable();
        $('#sample_4').DataTable();
        Index.init();
    });

</script>
@endpush
