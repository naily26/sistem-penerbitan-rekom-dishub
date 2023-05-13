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
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- start: DYNAMIC TABLE PANEL -->

                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-full-width table-striped table-bordered table-hover " id="sample_1" style="overflow-x:auto;">
                            <thead>
                                <tr>
                                    <th>No Penerbitan</th>
                                    <th >Nama Perusahaan</th>
                                    <th >Nama Pimpinan</th>
                                    <th>NIB</th>
                                    <th>Kode KBLI</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal NIB</th>
                                    <th>Petugas</th>
                                    <th>Email Pemohon</th>
                                    <th>Tanggal Permohonan</th>
                                    <th>Tanggal Penerbitan</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>EXO Crop</td>
                                    <td>123232</td>
                                    <td>4932</td>
                                    <td>bus dalam trayek</td>
                                    <td>12345678</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam, nisi earum nesciunt illum nobis officiis iusto ex accusamus dolorum totam eveniet ut recusandae, commodi corrupti nam dolorem, nihil nemo?</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
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