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
                        Data Penerbitan Surat Rekomendasi Peruntukan Angkutan Umum
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Data Penerbitan <small>Surat Rekomendasi Peruntukan Angkutan Umum </small></h1>
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
                        <div class="table-responsive"  style="overflow-x:auto;">
                        <table class="table table-full-width table-striped table-bordered table-hover " id="sample_1" style="overflow-x:auto;">
                            <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Kode KBLI</th>
                                    <th>Nomor Kendaraan</th>
                                    <th>Nomor Mesin</th>
                                    <th>Keterangan</th>
                                    <th>Lama Permohonan</th>
                                    <th>Pemohon</th>
                                    <th>Status Penerbitan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($disetujui as $item)
                                <?php 
                                    $startTimeStamp = strtotime($item->tanggal_permohonan);
                                    $endTimeStamp = strtotime($today);
                                    $timeDiff = abs($endTimeStamp - $startTimeStamp);
                                    $numberDays = $timeDiff/86400;  
                                    $numberDays = intval($numberDays);
                                ?>                    
                                <tr>
                                    <td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
                                    <td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
                                    <td>{{$item->angkutan->nomor_kendaraan}}</td>
                                    <td>{{$item->angkutan->nomor_mesin}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>{{$numberDays+1}}</td>
                                    <td>{{$item->angkutan->user->email}}</td>
                                    <td>{{$item->status_penerbitan}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-success"href="{{ route('angkutan.show', $item->id)}}"><i
                                            class="fa fa-eye"></i>
                                        detail</a>
                                        @if ($item->status_penerbitan == 'diterbitkan')
                                            <a class="btn btn-xs btn-primary"
                                            href="#konfirmasi-pengambilan{{$item->id}}" data-toggle="modal"><i
                                                class="fa  fa-check-square-o"></i>
                                            konfirmasi pengambilan</a>
                                        @endif
                                    </td>
                                </tr>
                                <div id="konfirmasi-pengambilan{{$item->id}}" class="modal fade" tabindex="-1"  data-width="360" style="display: none;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title">
                                            <i class="bi bi-exclamation-octagon-fill"
                                                style="color: red"></i>
                                            Konfirmasi Pengambilan Surat
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Apakah anda yakin untuk mengonfirmasi bahwa
                                                    surat telah diambil oleh pemohon?
                                                    status pengambilan tidak dapat diubah lagi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{url('/konfirmasi-pengambilan-surat-angkutan', $item->id)}}">
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
    .btn {
        margin: 1px;
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
