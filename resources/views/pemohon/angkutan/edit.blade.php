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
                    <h1>Edit Data <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
                </div>
                <div class="alert alert-info">
                    <button data-dismiss="alert" class="close">
                        &times;
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <strong>Perhatian!</strong> Mohon mengubah data sesuai dengan catatan yang telah diberikan
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
                                    <input type="text" class="form-control" id="Nama_Perusahaan" name="Nama_Perusahaan"
                                        placeholder="Text Field" value="PT. AOE Explore" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Kendaraan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Text Field" value="N 312 DD" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Uji </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        placeholder="Text Field" value="092132312" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Merk </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Text Field" value="hyundai" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tipe </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Text Field" value="sedan" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tahun Pembuatan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="2010" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Pemilik Kendaraan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="PT AOL explore" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Warna TNKB 
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Text Field" value="Biru" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Keputusan Izin Trayek </span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <div class="btn btn-light-grey btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-folder-open-o"></i>
                                                        Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="sertifikat_standar"
                                                      >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="#" target="_blank">
                                                surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    STNKB </span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <div class="btn btn-light-grey btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-folder-open-o"></i>
                                                        Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="sertifikat_standar"
                                                      >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="#" target="_blank">
                                                surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Buku Uji Berkala </span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <div class="btn btn-light-grey btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-folder-open-o"></i>
                                                        Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="sertifikat_standar"
                                                      >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="#" target="_blank">
                                                surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Keputusan Izin Trayek </span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <div class="btn btn-light-grey btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-folder-open-o"></i>
                                                        Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="sertifikat_standar"
                                                      >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="#" target="_blank">
                                                surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Kuasa </span>
                                </label>
                                <div class="col-sm-7">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input">
                                                <i class="fa fa-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="input-group-btn">
                                                <div class="btn btn-light-grey btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-folder-open-o"></i>
                                                        Select file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="sertifikat_standar"
                                                      >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="#" target="_blank">
                                                surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
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
<script src="{{asset('assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.js')}}"></script>
<script src="{{asset('assets/admin/plugins/summernote/build/summernote.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>
<script src="{{asset('assets/js/ui-buttons.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>

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
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}">
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
