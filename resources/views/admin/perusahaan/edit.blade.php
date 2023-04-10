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
                        Konfimasi permohonan
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Pengecekan <small>Permohonan surat keterangan perusahaan</small></h1>
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
                            <tr>
                                <td class="column-left">Tanggal Permohonan</td>
                                <td class="column-right">
                                    {{$data->tanggal_permohonan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat Permohonan</td>
                                <td class="column-right"><a href="{{$data->surat_permohonan}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Permohonan</i></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat pernyataan memenuhi persyaratan</td>
                                <td class="column-right"><a href="{{$data->surat_pernyataan}}" target="_blank">
                                        <span class="label label-primary"><i class="clip-file-pdf" style="color: blue">
                                                | Surat Pernyataan</i></span></a>
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
                                    <div data-original-title="Enter notes" data-toggle="manual" 
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
                                        @elseif ($item->status_pengecekan_1 == 'ditolak')
                                            Data Permohonan anda ditolak oleh admin mohon perhatikan catatan berikut:
                                            <ul>
                                                <li>
                                                    {{$data->catatan}}
                                                </li>
                                            </ul>
                                        @elseif ($data->status_pengecekan_1 == 'disetujui')
                                            @if ($data->status_pengecekan_2 == 'menunggu')
                                            Tidak ada catatan. Permohaonan anda telah disetujui admin. Tahap berikutnya,
                                            menunggu proses pengecekan oleh petugas.
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
                                                Tidak ada catatan. Permohonan anda telah disetujui, silahkan menunggu proses
                                                penerbitan surat.
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Konfirmasi Hasil Pengecekan
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('perusahaan.update', $data->id)}}" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Konfirmasi Persyaratan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="status_pengecekan_1" onchange="cekStatus(this)" required>
                                        <option value="">&nbsp;</option>
                                        <option value="disetujui">Setujui</option>
                                        <option value="ditolak">Tolak</option>
                                    </select>
                                </div>
                            </div>
                            <div id="ditolak" class="form-group">
                                <label class="col-sm-3 control-label">
                                    Alasan Permohonan Ditolak <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <textarea placeholder="Uraian" name="catatan" id="form-field-22"
                                        class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-2 col-sm-offset-9">
                            <button class="btn btn-blue next-step " type="submit">Submit</button>
                            </div>

                            {{-- <div class="col-sm-2 col-sm-offset-9">
                                <button type="submit" class="btn btn-blue next-step btn-block">
                                    Submit <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div> --}}

                        </form>

                    </div>
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
<script src="{{asset('assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>
<script src="{{asset('assets/admin/js/ui-buttons.js')}}"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
    });

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == divId ? 'block' : 'none';
    }

    function cekStatus(element) {
        showDiv('ditolak', element);
    }

</script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">

<style>
    .btn-file {
        color: #000000;
        background-color: #fafafa;
        border-color: #cccccc;
    }

    #lengkap {
        display: none
    }

    #ditolak {
        display: none
    }

</style>
@endpush
