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
                                    {{$data->nib}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">NIB</td>
                                <td class="column-right">
                                    {{$data->kbli->kode}} - {{$data->kbli->keterangan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Dokumen NIB</td>
                                <td class="column-right"><a href="{{$data->dokumen_nib}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Dokumen NIB</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Sertifikat Standar</td>
                                <td class="column-right"><a href="{{$data->sertifikat_standar}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Sertifikat Standar</i></span></a>
                                </td>
                            </tr>
                            @if ($data->kbli->kategori == 'angkutan-barang-umum' || $data->kbli->kategori == 'angkutan-barang-khusus')
                            <tr>
                                <td class="column-left">Surat Jalan (Delivery Order)</td>
                                <td class="column-right"><a href="{{$data->surat_delivery_order}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Surat Jalan</i></span></a>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="column-left">Surat Izin Trayek</td>
                                <td class="column-right"><a href="{{$data->surat_izin_trayek}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Surat Izin Trayek</i></span></a>
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td class="column-left">Tanggal Permohonan</td>
                                <td class="column-right">
                                    {{$data->tanggal_permohonan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat Permohonan</td>
                                <td class="column-right"><a href="{{$data->surat_permohonan}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Surat Permohonan</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat pernyataan memenuhi persyaratan</td>
                                <td class="column-right"><a href="{{$data->surat_pernyataan}}" target="_blank">
                                    <span class="label label-primary"><i class="clip-file-pdf" style="color: blue"> | Surat Pernyataan</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Status Pengecekan</td>
                                <td class="column-right">
                                    @if ($data->status_pengecekan_1 == 'menunggu')
                                            <span class="label label-primary">Menunggu persetujuan admin</span>
                                        @elseif ($data->status_pengecekan_1 == 'ditolak')
                                            <span class="label label-danger">ditolak oleh admin</span>
                                        @elseif ($data->status_pengecekan_1 == 'disetujui')
                                            @if ($data->status_pengecekan_2 == 'menunggu')
                                                <span class="label label-primary">Menunggu persetujuan petugas</span>
                                            @elseif ($data->status_pengecekan_2 == 'ditolak')
                                                <span class="label label-danger">ditolak oleh petugas</span>
                                            @elseif ($data->status_pengecekan_2 == 'disetujui')
                                                <span class="label label-danger">disetujui</span>
                                            @endif
                                        @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Catatan <a id="pencil" href="#"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
                                    <div data-original-title="Enter notes" data-toggle="manual" data-type="wysihtml5"
                                        data-pk="1" id="note" class="editable" tabindex="-1" style="display: block;">
                                        @if ($data->status_pengecekan_1 == 'menunggu')
                                            @if ($data->catatan)
                                            Data Permohonan anda ditolak oleh admin dengan catatan berikut:
                                            <ul>
                                                <li>
                                                {{$data->catatan}}
                                                </li>
                                            </ul>
                                            @else
                                            Tidak ada catatan. Permohonan anda sedang dalam proses pengecekan oleh admin.
                                            @endif
                                        @elseif ($data->status_pengecekan_1 == 'ditolak')
                                            Data Permohonan anda ditolak oleh admin dengan catatan berikut:
                                            <ul>
                                                <li>
                                                {{$data->catatan}}
                                                </li>
                                            </ul>
                                        @elseif ($data->status_pengecekan_1 == 'disetujui')
                                            @if ($data->status_pengecekan_2 == 'menunggu')
                                                Tidak ada catatan. Permohaonan anda telah disetujui admin. Tahap berikutnya, menunggu proses pengecekan oleh petugas.
                                            @elseif ($data->status_pengecekan_2 == 'ditolak')
                                                Data Permohonan anda ditolak oleh petugas mohon perhatikan catatan berikut:
                                                <ul>
                                                    <li>
                                                    {{$data->catatan}}
                                                    </li>
                                                </ul>
                                            @elseif ($data->status_pengecekan_2 == 'disetujui')
                                                @if ($data->status_penerbitan == 'diterbitkan')
                                                    Surat keterengan perusahaan telah diterbitkan
                                                @else
                                                    Tidak ada catatan. Permohonan anda telah disetujui, silahkan menunggu proses penerbitan surat.
                                                @endif
                                            @endif
                                        @endif
                                       
                                    </div>
                                </td>
                            </tr>
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
<script src="assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

<script src="assets/admin/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/admin/plugins/autosize/jquery.autosize.min.js"></script>
<script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script src="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
<script src="assets/admin/plugins/summernote/build/summernote.min.js"></script>
<script src="assets/admin/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/admin/plugins/ckeditor/adapters/jquery.js"></script>
<script src="assets/admin/js/form-elements.js"></script>
<script src="{{asset('assets/js/ui-buttons.js')}}"></script>

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
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/select2.css')}}">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
<link rel="stylesheet" href="assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/admin/plugins/summernote/build/summernote.css">
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
