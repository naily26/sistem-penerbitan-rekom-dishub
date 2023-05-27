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
                        <a href="{{route('perusahaan.index')}}">
                            Data Perusahaan
                        </a>
                    </li>
                    <li class="active">
                        tambah data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Tambah Data Perusahaan </h1>
                </div>
                <div class="alert alert-info">
                    <button data-dismiss="alert" class="close">
                        &times;
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <strong>Perhatian!</strong> Untuk menambah satu perusahaan baru anda
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <!-- end: PAGE HEADER -->
        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: FORM WIZARD PANEL -->
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div id="wizard" class="swMain">
                            <ul>
                                <li>
                                    <a href="#step-1">
                                        <div class="stepNumber">
                                            1
                                        </div>
                                        <span class="stepDesc"> Step 1
                                            <br />
                                            <small>Step 1 petunjuk</small> </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <div class="stepNumber">
                                            2
                                        </div>
                                        <span class="stepDesc"> Step 2
                                            <br />
                                            <small>Step 2 pengisian form permohonan</small> </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="progress progress-striped active progress-sm">
                                <div aria-valuemax="100" aria-valuemin="0" role="progressbar"
                                    class="progress-bar progress-bar-success step-bar">
                                    <span class="sr-only"> 0% Complete (success)</span>
                                </div>
                            </div>
                            <div id="step-1">
                                <h2 class="StepTitle">Step 1 Siapkan berkas</h2>

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-2">
                                        Silahkan persiapkan beberapa dokumen berikut ini:
                                        <ul>
                                            <li>
                                                Surat Keterangan Perusahaan yang sudah pernah diterbitkan
                                            </li>
                                            <li>
                                                Dokumen NIB (Nomor Induk Berusaha)
                                            </li>
                                            <li>
                                                Sertifikat standar atau surat izin penyelenggaraan
                                            </li>
                                            <li>
                                                Surat izin trayek (bagi perusahaan penumpang umum)
                                            </li>
                                            <li>
                                                Rekapitulasi surat jalan (bagi perusahaan barang umum)
                                            </li>
                                            <li>
                                                Surat permohonan
                                            </li>
                                            <li>
                                                Surat pernyataan
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 col-sm-offset-8">
                                        <button class="btn btn-blue next-step btn-block">
                                            Next <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4">
                                <form action="{{ route('perusahaan.store')}}" role="form" method="post"
                                    class="smart-wizard form-horizontal" id="form" enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="StepTitle">Step 2 Pengisian nform permohonan</h2>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Perusahaan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama_perusahaan"
                                                name="nama_perusahaan" placeholder="nama perusahaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Pimpinan Perusahaan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama_pimpinan"
                                                name="nama_pimpinan" placeholder="nama pimpinan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Telepon <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_telepon"
                                                name="nomor_telepon" placeholder="nomor telepon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="uraian">
                                            Alamat
                                        </label>
                                        <div class="col-sm-7">
                                            <textarea placeholder="alamat" name="alamat" id="alamat"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            KBLI <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="kbli_id" onchange="showDiv(this);">
                                                <option value="">&nbsp;</option>
                                                @foreach ($kbli as $item)
                                                <option value="{{$item->id}}">{{$item->kode}} - {{$item->keterangan}}
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
                                                placeholder="nomor induk berusaha" onchange="checkNIB(this);">
                                                {{-- <p class="alert alert-danger" id="duplicate"></p> --}}
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tanggal NIB <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" id="tanggal_nib" name="tanggal_nib"
                                                placeholder="tanggal NIB">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat Keterangan Perusahaan yang sudah pernah diterbitkan <span class="symbol required"></span>
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
                                                            <span class="fileupload-new"><i
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input" name="dokumen_nib">
                                                        </div>
                                                        <a href="#" class="btn btn-light-grey fileupload-exists"
                                                            data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                            <span class="fileupload-new"><i
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input" name="dokumen_nib">
                                                        </div>
                                                        <a href="#" class="btn btn-light-grey fileupload-exists"
                                                            data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
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
                                                            <span class="fileupload-new"><i
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input"
                                                                name="sertifikat_standar">
                                                        </div>
                                                        <a href="#" class="btn btn-light-grey fileupload-exists"
                                                            data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="angkutan-barang">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Rekapitulasi Surat Jalan (Delivery Order) <span
                                                    class="symbol required"></span>
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
                                                                <span class="fileupload-new"><i
                                                                        class="fa fa-folder-open-o"></i> Select
                                                                    file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input"
                                                                    name="surat_delivery_order">
                                                            </div>
                                                            <a href="#" class="btn btn-light-grey fileupload-exists"
                                                                data-dismiss="fileupload">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat Izin Penyelenggara <span
                                                    class="symbol required"></span>
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
                                                                <span class="fileupload-new"><i
                                                                        class="fa fa-folder-open-o"></i> Select
                                                                    file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input"
                                                                    name="surat_izin_penyelenggara">
                                                            </div>
                                                            <a href="#" class="btn btn-light-grey fileupload-exists"
                                                                data-dismiss="fileupload">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="angkutan-penumpang">
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
                                                                <span class="fileupload-new"><i
                                                                        class="fa fa-folder-open-o"></i> Select
                                                                    file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input"
                                                                    name="surat_izin_trayek">
                                                            </div>
                                                            <a href="#" class="btn btn-light-grey fileupload-exists"
                                                                data-dismiss="fileupload">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                            <span class="fileupload-new"><i
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input"
                                                                name="surat_pernyataan" required>
                                                        </div>
                                                        <a href="#" class="btn btn-light-grey fileupload-exists"
                                                            data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Permohonan Surat <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_permohonan"
                                                name="nomor_permohonan" placeholder="nomor permohonan surat">
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
                                                            <span class="fileupload-new"><i
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input"
                                                                name="surat_permohonan" required>
                                                        </div>
                                                        <a href="#" class="btn btn-light-grey fileupload-exists"
                                                            data-dismiss="fileupload">
                                                            <i class="fa fa-times"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="col-sm-2 col-sm-offset-3 btn btn-blue " type="submit">Submit
                                    </button>
                                    {{-- <div class="form-group">
                                        <div class="col-sm-2 col-sm-offset-3">
                                            <button class="btn btn-light-grey back-step btn-block">
                                                <i class="fa fa-circle-arrow-left"></i> Back
                                            </button>
                                        </div>
                                        <button class="col-sm-2 col-sm-offset-3 btn btn-blue " type="submit">Submit
                                        </button>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: FORM WIZARD PANEL -->
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
<script src="{{asset('assets/admin/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/admin/js/form-wizard.js')}}"></script>

<script src="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
    });

</script>

<script>
    function showDiv(element) {
        var kate;
        var resdata = @json($kbli);

        for (const key in resdata) {
            if (resdata.hasOwnProperty.call(resdata, key)) {
                if (resdata[key].id == element.value) {
                    kate = resdata[key].kategori;
                }
            }
        }

        document.getElementById("angkutan-barang").style.display = kate == 'angkutan-barang-umum' ? 'block' : 'none';
        document.getElementById("angkutan-penumpang").style.display = kate == 'angkutan-penumpang-umum-dalam-trayek' ||
            kate == 'angkutan-penumpang-umum-tidak-dalam-trayek' ? 'block' : 'none';
    }

    function checkNIB(element) {
        var resdata = @json($nibcek);
        var msg;

        for (const key in resdata) {
            if (resdata.hasOwnProperty.call(resdata, key)) {
                if (resdata[key].nib == element.value) {
                    msg = true;
                    alert("duplicate has been found");
                    element.value = "";
                    break;
                }
            }
        }
    }

</script>

@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">

<style>
    #angkutan-barang {
        display: none
    }

    #angkutan-penumpang {
        display: none
    }

    .btn-file {
        color: #000000;
        background-color: #fafafa;
        border-color: #cccccc;
    }

</style>

@endpush
