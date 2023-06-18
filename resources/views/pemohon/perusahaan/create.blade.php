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
                                                Surat pernyataan akan memenuhi ketentuan persyaratan khusus usaha
                                                perizinan angkutan
                                                penumpang/barang umum. <a href="{{$dokumen[1]['file_template']}}">download-template.docs</a>
                                            </li>
                                            <li>
                                                Surat permohonan dari Perusahaan yang disahkan oleh Direktur Perusahaan  <a href="{{$dokumen[0]['file_template']}}">download-template.docs</a>
                                            </li>
                                        </ul>
                                        Silahkan mengikuti tutorial berikut untuk scan dokumen <a target="_blank"
                                            href="https://www.medcom.id/teknologi/tips-trik/dN6aqWRK-cara-scan-dokumen-ke-pdf-di-android-tanpa-aplikasi-lain-cuma-google-drive-di-hape">tutorial-link</a>
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
                                    <h2 class="StepTitle">Step 2 Pengisian form permohonan</h2>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Perusahaan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama_perusahaan"
                                                name="nama_perusahaan" placeholder="nama perusahaan"
                                                oninput="this.value = this.value.toUpperCase()" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Pimpinan Perusahaan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama_pimpinan"
                                                name="nama_pimpinan" placeholder="nama pimpinan"
                                                oninput="this.value = this.value.toUpperCase()" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Telepon <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_telepon"
                                                name="nomor_telepon" placeholder="nomor telepon"
                                                onkeypress="hanyaAngka(event)" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="uraian">
                                            Alamat
                                        </label>
                                        <div class="col-sm-7">
                                            <textarea placeholder="alamat" name="alamat" id="alamat"
                                                oninput="this.value = this.value.toUpperCase()" required
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            KBLI <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select class="select2-container form-control search-select" name="kbli_id" onchange="showDiv(this);" id="select-kbli"
                                                required>
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
                                            Nomor Induk Berusaha (NIB) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nib" name="nib"
                                                placeholder="nomor induk berusaha" onchange="checkNIB(this);" required>
                                            {{-- <p class="alert alert-danger" id="duplicate"></p> --}}

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tanggal NIB <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" id="tanggal_nib" name="tanggal_nib"
                                                placeholder="tanggal NIB" required>
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
                                                            <input type="file" class="file-input" name="dokumen_nib"
                                                                required>
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
                                    <div class="form-group" id="sertifikat_standar">
                                        <label class="col-sm-3 control-label">
                                            Sertifikat Standar Berbasis Risiko OSS-RBA <span
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
                                                                    class="fa fa-folder-open-o"></i> Select file</span>
                                                            <span class="fileupload-exists"><i
                                                                    class="fa fa-folder-open-o"></i> Change</span>
                                                            <input type="file" class="file-input"
                                                                name="sertifikat_standar" >
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
                                        <div class="form-group" id="surat_delivery_order">
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
                                    </div>
                                    <div id="angkutan-barang-khusus">
                                        <div class="form-group" id="surat_izin_penyelenggara_muat">
                                            <label class="col-sm-3 control-label">
                                                SK Izin Muat barang khusus <span class="symbol required"></span>
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
                                                                    name="surat_izin_penyelenggara_muat">
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
                                        <div class="form-group" id="surat_izin_trayek">
                                            <label class="col-sm-3 control-label">
                                                Surat Izin Trayek dari DPM-PTSP <span class="symbol required"></span>
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
                                        <div class="form-group" id="nomor_izin_trayek">
                                            <label class="col-sm-3 control-label">
                                                Nomor Surat Izin Trayek dari DPM-PTSP <span
                                                    class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="nomor_izin_trayek"
                                                    placeholder="Nomor Surat Izin Trayek dari DPM-PTSP"
                                                    oninput="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="form-group" id="tanggal_izin_trayek">
                                            <label class="col-sm-3 control-label">
                                                Tanggal Surat Izin Trayek dari DPM-PTSP <span
                                                    class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" name="tanggal_izin_trayek"
                                                    placeholder="Tanggal Surat Izin Trayek dari DPM-PTSP">
                                            </div>
                                        </div>
                                        <div class="form-group" id="surat_izin_penyelenggara_trayek">
                                            <label class="col-sm-3 control-label">
                                                SK Pelaksanaan Izin Trayek dari Kadishub <span
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
                                                                    name="surat_izin_penyelenggara_trayek">
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
                                            Surat pernyataan akan memenuhi ketentuan persyaratan <span
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
                                                name="nomor_permohonan" placeholder="nomor permohonan surat"
                                                oninput="this.value = this.value.toUpperCase()" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat permohonan dari Perusahaan <span class="symbol required"></span>
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
<script type="text/javascript" src="{{ asset('assets/admin/plugins/select2/select2.min.js') }}">
</script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
        Index.init();
    });

    $("#select-kbli").select2({
        placeholder: 'Pilih KBLI', // Placeholder select
    });

    var file_pdf = ['dokumen_nib', 'sertifikat_standar', 'surat_delivery_order', 'surat_izin_penyelenggara_muat', 'surat_izin_trayek', 'surat_izin_penyelenggara_trayek', 'surat_pernyataan', 'surat_permohonan'];
    $.each(file_pdf, function (index, val) {
        nama = "[name='"+val+"']";
        $(nama).change(function () {
            var val = $(this).val().toLowerCase(),
                regex = new RegExp("(.*?)\.(pdf)$");

            if (!(regex.test(val))) {
                $(this).val('');
                alert('Anda hanya bisa menggungah dokumen berformat .pdf');
            }
        });
    });
</script>

<script>
    function hanyaAngka(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }

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

        document.getElementById("angkutan-barang").style.display = kate.includes('barang') ? 'block' : 'none';
        document.getElementById("angkutan-penumpang").style.display = kate.includes('penumpang') ? 'block' : 'none';
        document.getElementById("angkutan-barang-khusus").style.display = kate.includes('barang-khusus') ? 'block' :
            'none';
        document.getElementById("sertifikat_standar").style.display = kate.includes('barang-khusus') ? 'none' : 'block';

        if (kate.includes('barang')) {
            $('#surat_delivery_order').prop('required', true);
            $('#sertifikat_standar').prop('required', true);
        } else if (kate.includes('penumpang')) {
            $('#surat_izin_trayek').prop('required', true);
            $('#nomor_izin_trayek').prop('required', true);
            $('#tanggal_izin_trayek').prop('required', true);
            $('#sertifikat_standar').prop('required', true);
            $('#surat_izin_penyelenggara_trayek').prop('required', true);
        } else if (kate.includes('barang-khusus')) {
            $('#surat_izin_penyelenggara_muat').prop('required', true);
            
        }

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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />

<style>
    #angkutan-barang {
        display: none
    }

    #angkutan-barang-khusus {
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
