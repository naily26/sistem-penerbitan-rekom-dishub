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
                <div class="alert alert-info">
                    <button data-dismiss="alert" class="close">
                        &times;
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <strong>Perhatian!</strong> Petugas dapat melakukan edit data jika terdapat kesalahan penulisan ringan oleh pemohon
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
                            <tr><td colspan="2">Data Perusahaan</td></tr>
                            <tr>
                                <td class="column-left">Nama Perusahaan</td>
                                <td class="column-right">
                                    PT. AOE Explore</td>
                            </tr>
                            <tr>
                                <td class="column-left">NIB</td>
                                <td class="column-right">
                                    349328440</td>
                            </tr>
                            <tr>
                                <td class="column-left">NIB</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="#"><i class="clip-file-pdf" style="color: blue"> | NIB</i></a></span>
                                </td>
                            </tr>
                            <tr><td colspan="2">Data Angkutan</td></tr>
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
                                <td class="column-left">Foto Kendaraan</td>
                                <td class="column-right">
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="https://i.pinimg.com/originals/f4/4d/0b/f44d0bf717093bce185b18d8802dc616.jpg" title="Clip-One Responsive Screen">
                                                <img src="https://i.pinimg.com/originals/f4/4d/0b/f44d0bf717093bce185b18d8802dc616.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="https://i.pinimg.com/736x/cc/f0/f6/ccf0f62d3d10e87bf1fbdf445e792392.jpg" title="Clip-One Responsive Screen">
                                                <img src="https://i.pinimg.com/736x/cc/f0/f6/ccf0f62d3d10e87bf1fbdf445e792392.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="https://i.pinimg.com/474x/66/59/ce/6659cef212514cf930806ee449f4c071.jpg" title="Clip-One Responsive Screen">
                                                <img src="https://i.pinimg.com/474x/66/59/ce/6659cef212514cf930806ee449f4c071.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="https://i.pinimg.com/originals/f4/4d/0b/f44d0bf717093bce185b18d8802dc616.jpg" title="Clip-One Responsive Screen">
                                                <img src="https://i.pinimg.com/originals/f4/4d/0b/f44d0bf717093bce185b18d8802dc616.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
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
                    <br />
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Konfirmasi Hasil Pengecekan
                    </div>
                    <div class="panel-body">
                        <form method="post" action="#" class="form-horizontal">
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
<script src="{{asset('assets/admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>
<script src="{{asset('assets/admin/js/ui-buttons.js')}}"></script>

<script src="{{asset('assets/admin/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
		<script src="{{asset('assets/admin/js/pages-gallery.js')}}"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        PagesGallery.init();
        Index.init();
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
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/jQuery-Tags-Input/jquery.tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/build/summernote.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-social-buttons/social-buttons-3.css')}}">

<link rel="stylesheet" href="{{asset('assets/admin/plugins/colorbox/example2/colorbox.css')}}">

<style>
    .btn-file {
        color: #000000;
        background-color: #fafafa;
        border-color: #cccccc;
    }

    #catatan-form {
        display: none
    }

    #lengkap {
        display: none
    }

    #ditolak {
        display: none
    }

</style>
@endpush
