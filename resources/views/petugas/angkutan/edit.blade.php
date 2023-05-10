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
                        <a href="{{ route('angkutan.index')}}">
                            Data Angkutan
                        </a>
                    </li>
                    <li class="active">
                        Konfimasi permohonan
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Pengecekan <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
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
                    <div class="panel-body">
                        <form method="post" action="#" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Perusahaan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="Nama_Perusahaan" name="Nama_Perusahaan"
                                        placeholder="Text Field" value="PT. AOE Explore" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Kendaraan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Text Field" value="N 312 DD" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Uji </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Text Field" value="092132312" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Merk </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Text Field" value="hyundai" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tipe </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Text Field" value="sedan" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tahun Pembuatan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="2010" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Pemilik Kendaraan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="PT AOL explore" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Warna TNKB 
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="Biru" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Keputusan Izin Trayek </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | Surat Keputusan Izin Trayek</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    STNKB </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | STNKB</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Buku Uji Berkala </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | Buku Uji Berkala</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Keputusan Izin Trayek </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | Surat Keputusan Izin Trayek</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Kuasa </span>
                                </label>
                                <div class="col-sm-7">
                                    <a href="{{asset('assets/admin/images/image01.jpg')}}" class="btn btn-file"
                                        target="_blank" title="Lihat Dokumen">
                                        <i class="clip-file-2"> | Surat Kuasa</i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Konfirmasi Persyaratan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="country" name="status-tahap-1" onchange="showDiv('catatan-form',this)">
                                        <option value="">&nbsp;</option>
                                        <option value="lengkap">Lengkap</option>
                                        <option value="tidak-lengkap">Tidak Lengkap</option>
                                    </select>
                                </div>
                            </div>
                            <div id="catatan-form" class="form-group">
                                <label class="col-sm-3 control-label">
                                    Catatan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <textarea placeholder="Uraian" name="uraian" id="form-field-22" class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-9">
                                    <button type="submit" class="btn btn-blue next-step btn-block">
                                        Submit <i class="fa fa-arrow-circle-right"></i>
                                    </button>
                                </div>
                            </div>
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
        Index.init();
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
