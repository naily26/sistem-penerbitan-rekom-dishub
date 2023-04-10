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
                        Detail data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Detail Data <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
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
                                    PT. AOE Explore</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Kendaraan</td>
                                <td class="column-right">
                                    N 312 DD</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Uji</td>
                                <td class="column-right">
                                    092132312</td>
                            </tr>
                            <tr>
                                <td class="column-left">Merk</td>
                                <td class="column-right">
                                    hyundai</td>
                            </tr>
                            <tr>
                                <td class="column-left">Tipe</td>
                                <td class="column-right">
                                    sedan</td>
                            </tr>
                            <tr>
                                <td class="column-left">Tahun Pembuatan</td>
                                <td class="column-right">
                                    2010</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nama Pemilik Kendaraan</td>
                                <td class="column-right">
                                    PT AOL explore</td>
                            </tr>
                            <tr>
                                <td class="column-left">Warna TNKB</td>
                                <td class="column-right">
                                    Biru</td>
                            </tr>
                            <tr>
                                <td class="column-left">Keterangan</td>
                                <td class="column-right">
                                    Perpanjangan STNK</td>
                            </tr>
                            <tr>
                                <td class="column-left">STNKB</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="#"><i class="clip-file-pdf" style="color: blue"> | STNKB</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Buku Uji Berkala</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="#"><i class="clip-file-pdf" style="color: blue"> | Buku Uji Berkala</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Notes <a id="pencil" href="#"><i class="fa fa-pencil"></i></a>
                               </td>
                                <td>
                                <div data-original-title="Enter notes" data-toggle="manual" data-type="wysihtml5" data-pk="1" id="note" class="editable" tabindex="-1" style="display: block;">
                                   
                                    But may also refer to:
                                    <ul>
                                        <li>
                                            WYSIWYG (album), a 2000 album by Chumbawamba
                                        </li>
                                        <li>
                                            "Whatcha See is Whatcha Get", a 1971 song by The Dramatics
                                        </li>
                                        <li>
                                            WYSIWYG Film Festival, an annual Christian film festival
                                        </li>
                                    </ul>
                                    <i>Source:</i>
                                    <a href="http://en.wikipedia.org/wiki/WYSIWYG_%28disambiguation%29">
                                        wikipedia.org
                                    </a>
                                </div></td>
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
