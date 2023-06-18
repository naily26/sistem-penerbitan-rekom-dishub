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
                    <li>
                        <i class="clip-home-3"></i>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        Laporan
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Laporan <small>{{$data['start']}} sampai {{$data['end']}}  </small></h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px">
                <a href="#filter" data-toggle="modal" class="btn pull-right mb-4 mr-2 btn-teal btn-sm">
                    Filter Data
                    <i class="fa fa-filter"></i>
                </a>
            </div>
        </div>
        <!-- start: BOOTSTRAP CREATE MODALS -->
        <div id="filter" class="modal fade" tabindex="-1" data-width="560" style="display: none;">
            <form action="{{url('filter-report')}}" method="get">
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
                                <input type="date" name="from" id="start" class="form-control"
                                    placeholder="Masukkan Bulan Mulai">
                                <p id="error-message-start" class="validation-error-label"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end">Selesai</label>
                                <input type="date" name="to" id="end_month" class="form-control"
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-checkbox"></i>
                        Rekap Surat Keterangan Perusahaan
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                        </div>
                    </div>
                    <div class="panel-body panel-scroll" style="height:180px">
                        <ul class="todo">
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah permohonan yang masuk</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['perusahaanMasuk']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang dicetak</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['perusahaanDicetak']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang menunggu tandatangan</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['perusahaanBirokrasi']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang tertandatangani dan menunggu diambil oleh pemohon</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['perusahaanTertandatangai']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang telah keluar (diambil oleh pemohon)</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['perusahaanDiambil']}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-checkbox"></i>
                        Rekap Surat Rekomendasi Peruntukan Angkutan Angkutan
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                        </div>
                    </div>
                    <div class="panel-body panel-scroll" style="height:180px">
                        <ul class="todo">
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah permohonan yang masuk</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['angkutanMasuk']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang dicetak</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['angkutanDicetak']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang menunggu tandatangan</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['angkutanBirokrasi']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang tertandatangani dan menunggu diambil oleh pemohon</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['angkutanTertandatangai']}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="todo-actions" href="javascript:void(0)">
                                    <span class="desc" style="opacity: 1; text-decoration: none;"> Jumlah surat yang telah keluar (diambil oleh pemohon)</span>
                                    <span class="label label-primary" style="opacity: 1;">{{$data['angkutanDiambil']}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="clip-users-2"></i>
                        Rekap aktivitas petugas
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                        </div>
                    </div>
                    <div class="panel-body panel-scroll" style="height:300px">
                        <table class="table table-striped table-hover" id="sample-table-1">
                            <thead>
                                <tr>
                                    <th class="center">Nama</th>
                                    <th>Aktivitas</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['rekap_petugas'] as $key => $item)
                                <tr>
                                    <td class="center">{{$item['nama']}}</td>
                                    <td>Memproses permohonan surat keterangan perusahaan</td>
                                    <td >{{$item['skp']}}</td>
                                </tr>
                                <tr>
                                    <td class="center">{{$item['nama']}}</td>
                                    <td>Memproses permohonan surat rekomendasi peruntukan</td>
                                    <td >{{$item['srpa']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end: PAGE CONTENT-->
    </div>
</div>
<!-- end: PAGE -->


@endsection

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/admin/js/ui-modals.js') }}"></script>
<script src="assets/admin/js/index.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Index.init();
    });

</script>
@endpush

@push('style')
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
type="text/css" />
<link href="{{ asset('assets/admin/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet"
type="text/css" />
@endpush
