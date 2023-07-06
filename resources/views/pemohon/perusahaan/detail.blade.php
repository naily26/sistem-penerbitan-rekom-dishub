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
                        <i class="clip-pencil"></i>
                        <a href="{{ route('perusahaan.index')}}">
                            Data Perusahaan
                        </a>
                    </li>
                    <li class="active">
                        Detail data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Detail Data <small>Permohonan surat keterangan perusahaan</small></h1>
                </div>

                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: TEXT FIELDS PANEL -->
                <div class="panel panel-default">
                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                        <tbody>
                            <tr>
                                <td class="column-left">Nama Perusahaan</td>
                                <td class="column-right">
                                    {{$data->nama_perusahaan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nama Pimpinan Perusahaan</td>
                                <td class="column-right">
                                    {{$data->nama_pimpinan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Telepon</td>
                                <td class="column-right">
                                    {{$data->nomor_telepon}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Alamat</td>
                                <td class="column-right">
                                    {{$data->alamat}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">KBLI</td>
                                <td class="column-right">
                                    {{$data->kbli->kode}} - {{$data->kbli->keterangan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">NIB</td>
                                <td class="column-right">
                                    {{$data->nib}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Dokumen NIB</td>
                                <td class="column-right"><a href="{{$data->dokumen_nib}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Dokumen NIB</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Sertifikat Standar</td>
                                <td class="column-right"><a href="{{$data->sertifikat_standar}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Sertifikat Standar</i></span></a>
                                </td>
                            </tr>
                            @if ($data->kbli->kategori == 'angkutan-barang-umum' || $data->kbli->kategori ==
                            'angkutan-barang-khusus')
                            <tr>
                                <td class="column-left">Surat Jalan (Delivery Order)</td>
                                <td class="column-right"><a href="{{$data->surat_delivery_order}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Jalan</i></span></a>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="column-left">Surat Izin Trayek</td>
                                <td class="column-right"><a href="{{$data->surat_izin_trayek}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Izin Trayek</i></span></a>
                                </td>
                            </tr>
                            @endif
                            @if ($data->pengajuan_perusahaan->status_penerbitan != 'offline')
                            <tr>
                                <td class="column-left">Surat Permohonan</td>
                                <td class="column-right"><a href="{{$data->pengajuan_perusahaan->surat_permohonan}}"
                                        target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Permohonan</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat pernyataan memenuhi persyaratan</td>
                                <td class="column-right"><a href="{{$data->pengajuan_perusahaan->surat_pernyataan}}"
                                        target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Pernyataan</i></span></a>
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td class="column-left">Status Pengecekan</td>
                                <td class="column-right">
                                    @if ($data->pengajuan_perusahaan->status_pengecekan == 'menunggu')
                                    <span class="label label-primary">Menunggu persetujuan admin</span>
                                    @elseif ($data->pengajuan_perusahaan->status_pengecekan == 'ditolak')
                                    <span class="label label-danger">ditolak oleh admin</span>
                                    @elseif ($data->pengajuan_perusahaan->status_pengecekan == 'disetujui')
                                    <span class="label label-success">disetujui</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Catatan <a id="pencil" href="#"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
                                    <div data-original-title="Enter notes" data-toggle="manual" data-type="wysihtml5"
                                        data-pk="1" id="note" class="editable" tabindex="-1" style="display: block;">
                                        @if ($data->pengajuan_perusahaan->status_pengecekan == 'menunggu')
                                        @if ($data->pengajuan_perusahaan->catatan)
                                        Data Permohonan anda ditolak oleh admin dengan catatan berikut:
                                        <ul>
                                            <li>
                                                {{$data->pengajuan_perusahaan->catatan}}
                                            </li>
                                        </ul>
                                        @else
                                        Tidak ada catatan. Permohonan anda sedang dalam proses pengecekan oleh admin.
                                        @endif
                                        @elseif ($data->pengajuan_perusahaan->status_pengecekan == 'ditolak')
                                        Data Permohonan anda ditolak oleh admin dengan catatan berikut:
                                        <ul>
                                            <li>
                                                {{$data->pengajuan_perusahaan->catatan}}
                                            </li>
                                        </ul>
                                        @elseif ($data->pengajuan_perusahaan->status_pengecekan == 'disetujui')
                                        Tidak ada catatan. Permohonan anda telah disetujui, silahkan menunggu proses
                                        penerbitan surat.
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                @if ($data->pengajuan_perusahaan->status_pengecekan == 'disetujui')
                                <td class="column-left">Status Penerbitan</td>
                                <td class="column-right">
                                    @if ($data->pengajuan_perusahaan->status_penerbitan == 'menunggu')
                                    belum dicetak
                                    @elseif ($data->pengajuan_perusahaan->status_penerbitan == 'dicetak')
                                    Surat telah dicetak pada tanggal {{$data->pengajuan_perusahaan->tanggal_cetak}}.
                                    Tahap
                                    berikutnya adalah menunggu surat dinaikkan ke pimpinan.
                                    @elseif ($data->pengajuan_perusahaan->status_penerbitan == 'birokrasi')
                                    Surat telah dinaikkan ke pimpinan pada tanggal
                                    {{$data->pengajuan_perusahaan->tanggal_birokrasi}}. Tahap berikutnya adalah menunggu
                                    surat ditandatangani oleh pimpinan.
                                    @elseif ($data->pengajuan_perusahaan->status_penerbitan == 'diterbitkan')
                                    Surat keterangan perusahaan anda bisa diambil secara langsung di kantor Dishub
                                    Jatim.
                                    Surat telah diterbitkan dan ditandatangani oleh pimpinan pada tanggal
                                    {{$data->pengajuan_perusahaan->tanggal_penerbitan}}.
                                    @elseif ($data->pengajuan_perusahaan->status_penerbitan == 'diambil')
                                    Surat keterangan perusahaan anda telah diambil secara langsung di kantor Dishub
                                    Jatim
                                    pada tanggal {{$data->pengajuan_perusahaan->tanggal_pengambilan}}.
                                    @else
                                    {{$data->pengajuan_perusahaan->status_penerbitan}}
                                    @endif
                                </td>
                                @endif
                            </tr>
                            @if ($data->pengajuan_perusahaan->status_penerbitan != 'offline')
                            <tr>
                                <td>Pelacakan</td>
                                <td>
                                    <ul class="todo">
                                        <li>
                                            <a class="todo-actions">
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Permohonan
                                                    masuk</span>
                                                <span class="label label-primary"
                                                    style="opacity: 1;">{{$data->pengajuan_perusahaan->tanggal_permohonan}}</span>
                                            </a>
                                        </li>
                                        @if ($data->pengajuan_perusahaan->tanggal_cetak)
                                        <li>
                                            <a class="todo-actions">
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Surat
                                                    dicetak</span>
                                                <span class="label label-primary"
                                                    style="opacity: 1;">{{$data->pengajuan_perusahaan->tanggal_cetak}}</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if ($data->pengajuan_perusahaan->tanggal_birokrasi)
                                        <li>
                                            <a class="todo-actions">
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Surat naik
                                                    ke pimpinan</span>
                                                <span class="label label-primary"
                                                    style="opacity: 1;">{{$data->pengajuan_perusahaan->tanggal_birokrasi}}</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if ($data->pengajuan_perusahaan->tanggal_penerbitan)
                                        <li>
                                            <a class="todo-actions">
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Surat
                                                    sudah tertandatangani dan bisa diambil</span>
                                                <span class="label label-primary"
                                                    style="opacity: 1;">{{$data->pengajuan_perusahaan->tanggal_penerbitan}}</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if ($data->pengajuan_perusahaan->tanggal_pengambilan)
                                        <li>
                                            <a class="todo-actions">
                                                <span class="desc" style="opacity: 1; text-decoration: none;">Surat
                                                    diambil oleh pemohon</span>
                                                <span class="label label-success"
                                                    style="opacity: 1;">{{$data->pengajuan_perusahaan->tanggal_pengambilan}}</span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- end: TEXT FIELDS PANEL -->
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>
</div>
<!-- end: PAGE -->
@endsection

@push('script')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
    });

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == 'tidak-lengkap' ? 'block' : 'none';
    }

</script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">

<style>
    .btn-file {
        color: #000000;
        background-color: #fafafa;
        border-color: #cccccc;
    }

    #catatan-form {
        display: none
    }

</style>
@endpush
