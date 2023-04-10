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
                        Edit data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Edit Data <small>Permohonan surat keterangan perusahaan</small></h1>
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
                        <form method="post" action="{{ route('perusahaan.update', $data->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tanggal Permohonan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="tanggal_permohonan"
                                        name="tanggal_permohonan" placeholder="nama perusahaan"
                                        value="{{$data->tanggal_permohonan}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Status Permohonan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="status_permohonan"
                                        placeholder="nama perusahaan" value="ditolak" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="uraian">
                                    Catatan
                                </label>
                                <div class="col-sm-7">
                                    <textarea id="cattan" name="catatan" class="form-control"
                                        disabled>{{$data->catatan}}</textarea>
                                    <p>*Mohon memperbarui data permohonan sesuai dengan catatan ini</p>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Perusahaan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                        placeholder="nama perusahaan" value="{{$data->nama_perusahaan}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Pimpinan Perusahaan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan"
                                        placeholder="nama pimpinan" value="{{$data->nama_pimpinan}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Telepon <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                        placeholder="nomor telepon" value="{{$data->nomor_telepon}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="uraian">
                                    Alamat
                                </label>
                                <div class="col-sm-7">
                                    <textarea placeholder="alamat" name="alamat" id="alamat"
                                        class="form-control">{{$data->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    KBLI <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="kbli_id" onchange="showDiv(this);">
                                        <option value="{{$data->kbli->id}}">&nbsp;</option>
                                        @foreach ($kbli as $item)
                                        <option value="{{$item->id}}" @selected($data->kbli->id ==
                                            $item->id)>{{$item->kode}} - {{$item->keterangan}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    NIB <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nib" name="nib"
                                        placeholder="nomor induk berusaha" onchange="checkNIB(this);"
                                        value="{{$data->nib}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tanggal NIB <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="tanggal_nib" name="tanggal_nib"
                                        value="{{$data->tanggal_nib}}" placeholder="tanggal NIB">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Dokumen NIB <span class="symbol required"></span>
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
                                                    <input type="file" class="file-input" name="dokumen_nib" value="{{$data->dokumen_nib}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="{{$data->dokumen_nib}}" target="_blank">
                                                dokumen-nib.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Sertifikat Standar <span class="symbol required"></span>
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
                                                      value="{{$data->sertifikat_standar}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="{{$data->sertifikat_standar}}" target="_blank">
                                                sertifikat-standar.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            @if ($data->kbli->kategori == 'angkutan-barang-umum' || $data->kbli->kategori ==
                            'angkutan-barang-khusus')
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Rekapitulasi Surat Jalan (Delivery Order) <span class="symbol required"></span>
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
                                                        Select
                                                        file</span>
                                                    <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i>
                                                        Change</span>
                                                    <input type="file" class="file-input" name="surat_delivery_order" value="{{$data->surat_delivery_order}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                                href="{{$data->surat_delivery_order}}" target="_blank">
                                                delivery-order.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Izin Trayek <span class="symbol required"></span>
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
                                                    <input type="file" class="file-input" name="surat_izin_trayek" value="{{$data->surat_izin_trayek}}">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                            href="{{$data->surat_izin_trayek}}" target="_blank">
                                            surat-izin-trayek.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Pernyataan <span class="symbol required"></span>
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
                                                    <input type="file" class="file-input" name="surat_pernyataan" value="{{$data->surat_pernyataan}}">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                            href="{{$data->surat_pernyataan}}" target="_blank">
                                            surat-pernyataan.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Surat Permohonan <span class="symbol required"></span>
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
                                                    <input type="file" class="file-input" name="surat_permohonan" value="{{$data->surat_permohonan}}">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                        <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a
                                            href="{{$data->surat_permohonan}}" target="_blank">
                                            surat-permohonan.pdf</i> </a> </p>
                                    </div>
                                </div>
                            </div>
                            <button class="col-sm-2 col-sm-offset-3 btn btn-blue " type="submit">Submit
                            </button>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-3">
                                    <button class="btn btn-light-grey back-step btn-block">
                                        <i class="fa fa-circle-arrow-left"></i> Back
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
<script src="assets/admin/plugins/summernote/build/summernote.min.js"></script>
<script src="assets/admin/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/admin/plugins/ckeditor/adapters/jquery.js"></script>
<script src="assets/admin/js/form-elements.js"></script>
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
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
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
