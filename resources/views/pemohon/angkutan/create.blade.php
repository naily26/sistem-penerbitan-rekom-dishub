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
                        <a href="{{route('angkutan.index')}}">
                            Data Angkutan
                        </a>
                    </li>
                    <li class="active">
                        tambah data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Tambah Data Angkutan </h1>
                </div>
                <div class="alert alert-info">
                    <button data-dismiss="alert" class="close">
                        &times;
                    </button>
                    <i class="fa fa-info-circle"></i>
                    <strong>Perhatian!</strong> Untuk mengajukan permohonan surat rekomendasi peruntukan angkutan harap
                    mengajukan permohonan surat keterang perusahaan terlebih dahulu
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
                        <form action="{{route('angkutan.store')}}" enctype="multipart/form-data" method="POST"
                            role="form" class="smart-wizard form-horizontal" id="form">
                            @csrf
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
                                    <h2 class="StepTitle">Step 1 Content</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-2">
                                            Silahkan persiapkan beberapa dokumen berikut ini:
                                            <ul>
                                                <li>
                                                    Rekapitulasi transaksi Surat Jalan (Delivery Order) selama 1 bulan
                                                    terakhir (khusus angkutan
                                                    barang umum)
                                                </li>
                                                <li>
                                                    Foto kendaraan tampak depan, belakang, samping kanan dan kiri
                                                </li>
                                                <li>
                                                    Surat pernyataan akan memenuhi ketentuan persyaratan khusus usaha
                                                    perizinan angkutan
                                                    penumpang/barang umum.
                                                </li>
                                                <li>
                                                    STNKB
                                                </li>
                                                <li>
                                                    Buku Uji Berkala
                                                </li>
                                                <li>
                                                    Surat Faktur Intern dari dealer (bagi kendaraan baru)
                                                </li>
                                                <li>
                                                    Sertifikat Registrasi Uji Tipe (SRUT) (bagi kendaraan baru)
                                                </li>
                                                <li>
                                                    Surat Keterangan Fiskal (bagi kendaraan mutasi)
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
                                    <h2 class="StepTitle">Step 2 Lengkapi Form</h2>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Perusahaan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select name="perusahaan_id" id="select-perusahaan"
                                                class="select2-container form-control search-select" onchange="cek(this)" required>
                                                <option value=""></option>
                                                @foreach ($perusahaan as $key => $item)
                                                <option value="{{$item->id}}" ><?= $item->nama_perusahaan ?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Keterangan / Tujuan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select class="form-control search-select" id="select-keterangan"
                                                name="keterangan" onchange="cekKeterangan(this)" required>
                                                <option value=""></option>
                                                <option value="perpanjangan-STNK">Perpanjangan STNK</option>
                                                <option value="kendaraan-baru">Kendaraan Baru</option>
                                                <option value="kendaraan-mutasi">Kendaraan Mutasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Kota / Kabupaten <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <select name="kota" id="select-kota"
                                                class="select2-container form-control search-select" required>
                                                <option value=""></option>
                                                @foreach ($kota as $key => $item)
                                                <option value="{{$item->nama}}"><?= $item->nama ?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Pemilik Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nama_pemilik"
                                                name="nama_pemilik" placeholder="nama pemilik" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_kendaraan"
                                                name="nomor_kendaraan" placeholder="Tnomor kendaraan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Uji <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_uji" name="nomor_uji"
                                                placeholder="nomor uji" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Rangka <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_rangka"
                                                name="nomor_rangka" placeholder="nomor rangka" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Mesin <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="nomor_mesin" name="nomor_mesin"
                                                placeholder="nomor mesin" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Merk <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="merk" name="merk"
                                                placeholder="merk kendaraan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tipe <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="tipe" name="tipe"
                                                placeholder="Tipe" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tahun Pembuatan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="tahun_pembuatan"
                                                name="tahun_pembuatan" placeholder="tahun pembuatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Jenis Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="jenis" name="jenis"
                                                placeholder="jenis" required>
                                        </div>
                                    </div>
                                    <div class="form-group" id="kps">
                                        <label class="col-sm-3 control-label">
                                            Kartu Pengawasan (KPS) <span class="symbol required"></span>
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
                                                            <input type="file" class="file-input" name="kps">
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
                                    <div class="form-group" id="stnkb">
                                        <label class="col-sm-3 control-label">
                                            STNKB <span class="symbol required"></span>
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
                                                            <input type="file" class="file-input" name="stnkb" required>
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
                                            Buku Uji Berkala <span class="symbol required"></span>
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
                                                                name="buku_uji_berkala" required>
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
                                            Surat permohonan dari Perusahaan yang disahkan oleh Direktur Perusahaan
                                            <span class="symbol required"></span>
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
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Foto Kendaraan (bagian depan) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                    style="width: 160px; height: 120px;"><img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image"
                                                        alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 160px; max-height: 120px; line-height: 20px;">
                                                </div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span
                                                            class="fileupload-new"><i class="fa fa-picture-o"></i>
                                                            Select image</span><span class="fileupload-exists"><i
                                                                class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file" name="foto_depan" required>
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey"
                                                        data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Foto Kendaraan (bagian belakang) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                    style="width: 160px; height: 120px;"><img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image"
                                                        alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 160px; max-height: 120px; line-height: 20px;">
                                                </div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span
                                                            class="fileupload-new"><i class="fa fa-picture-o"></i>
                                                            Select image</span><span class="fileupload-exists"><i
                                                                class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file" name="foto_belakang" required>
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey"
                                                        data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Foto Kendaraan (bagian kanan) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                    style="width: 160px; height: 120px;"><img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image"
                                                        alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 160px; max-height: 120px; line-height: 20px;">
                                                </div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span
                                                            class="fileupload-new"><i class="fa fa-picture-o"></i>
                                                            Select image</span><span class="fileupload-exists"><i
                                                                class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file" name="foto_kanan" required>
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey"
                                                        data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Foto Kendaraan (bagian kiri) <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                    style="width: 160px; height: 120px;"><img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image"
                                                        alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 160px; max-height: 120px; line-height: 20px;">
                                                </div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span
                                                            class="fileupload-new"><i class="fa fa-picture-o"></i>
                                                            Select image</span><span class="fileupload-exists"><i
                                                                class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file" name="foto_kiri" required>
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey"
                                                        data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kendaraan-baru">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat faktur intern dari dealer<span class="symbol required"></span>
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
                                                                    name="surat_faktur_intern">
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
                                                Nomor faktur <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="nomor_faktur"
                                                    name="nomor_faktur" placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Tanggal Faktur <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" id="tanggal_faktur"
                                                    name="tanggal_faktur" placeholder="tanggal faktur">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat registrasi uji tipe<span class="symbol required"></span>
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
                                                                    name="surat_registrasi_uji_tipe">
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
                                                Nomor faktur <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="nomor_srut"
                                                    name="nomor_srut" placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Tanggal Faktur <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" id="tanggal_srut"
                                                    name="tanggal_srut" placeholder="Text Field">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kendaraan-mutasi">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Nama perusahaan lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="perusahaan_lama"
                                                    name="perusahaan_lama" placeholder="nama perusahaan lama">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Kota / kabupaten asal <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <select name="kota_asal" id="select-kota-asal"
                                                    class="select2-container form-control search-select" >
                                                    <option value=""></option>
                                                    @foreach ($kota as $key => $item)
                                                    <option value="{{$item->nama}}"><?= $item->nama ?></option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Alamat perusahaan lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="alamat_lama"
                                                    name="alamat_lama" placeholder="alamat perusahaan lama">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Warna TNKB lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="warna_tnkb_lama"
                                                    name="warna_tnkb_lama" placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Surat keterangan fiskal <span class="symbol required"></span>
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
                                                                    name="surat_fiskal">
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
                                                Nomor surat fiskal <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="nomor_surat_fiskal"
                                                    name="nomor_surat_fiskal" placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Tanggal surat fiskal <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" id="tanggal_surat_fiskal"
                                                    name="tanggal_surat_fiskal" placeholder="Text Field">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 col-sm-offset-3">
                                            <button class="btn btn-light-grey back-step btn-block">
                                                <i class="fa fa-circle-arrow-left"></i> Back
                                            </button>
                                        </div>

                                    </div>
                                    <button class="col-sm-2 col-sm-offset-3 btn btn-blue " type="submit">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
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
<script src="{{ asset('assets/admin/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
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
        FormElements.init();
    });
    $("#select-perusahaan").select2({
        placeholder: 'Pilih Perusahaan', // Placeholder select
    });
    $("#select-keterangan").select2({
        placeholder: 'Pilih Keterangan', // Placeholder select
    });
    $("#select-kota").select2({
        placeholder: 'Pilih Kota/Kabupaten', // Placeholder select
    });
    $("#select-kota-asal").select2({
        placeholder: 'Pilih Kota/Kabupaten Asal', // Placeholder select
    });

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == divId ? 'block' : 'none';
    }

    function cekKeterangan(element) {
        showDiv('kendaraan-baru', element);
        showDiv('kendaraan-mutasi', element);
        document.getElementById("stnkb").style.display = element.value == 'kendaraan-baru' ? 'none' : 'block';
        if (element.value == 'kendaraan-baru') {
            $("[name='stnkb']").prop("required", false);
            $("[name='nomor_kendaraan']").val("baru");
            $("[name='nomor_uji']").val("baru");
            $("[name='nomor_kendaraan']").prop("disabled", true);
            $("[name='nomor_uji']").prop("disabled", true);
            $("[name='surat_faktur_intern']").prop("required", true);
            $("[name='surat_registrasi_uji_tipe']").prop("required", true);
            $("[name='nomor_faktur']").prop("required", true);
            $("[name='tanggal_faktur']").prop("required", true);
            $("[name='nomor_srut']").prop("required", true);
            $("[name='tanggal_srut']").prop("required", true);
        } else if (element.value == 'kendaraan-mutasi') {
            $("[name='alamat_lama']").prop("required", true);
            $("[name='perusahaan_lama']").prop("required", true);
            $("[name='warna_tnkb_lama']").prop("required", true);
            $("[name='surat_fiskal']").prop("required", true);
            $("[name='nomor_surat_fiskal']").prop("required", true);
            $("[name='tanggal_surat_fiskal']").prop("required", true);
            $("[name='nomor_kendaraan']").prop("disabled", false);
            $("[name='nomor_uji']").prop("disabled", false);
            $("[name='nomor_kendaraan']").val(null);
            $("[name='nomor_uji']").val(null);
        } else {
            $("[name='nomor_kendaraan']").prop("disabled", false);
            $("[name='nomor_uji']").prop("disabled", false);
            $("[name='nomor_kendaraan']").val(null);
            $("[name='nomor_uji']").val(null);
        }
    }

    function cek(element) {
        var data = <?php echo json_encode($khusus); ?>;
        

        var resdata = @json($perusahaan);
        var msg;

        for (const key in resdata) {
            if (resdata.hasOwnProperty.call(resdata, key)) {
                if (resdata[key].id == element.value) {
                    msg = resdata[key].kbli_id ;
                }
            }
        }

        if(data.includes(msg)) {
            document.getElementById("kps").style.display = 'block'  ;
            $("[name='kps']").prop("required", true);
        }
       
    }


</script>


@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />


<style>
    #izin-trayek {
        display: none
    }

    #kendaraan-baru {
        display: none
    }

    #kendaraan-mutasi {
        display: none
    }

    #kps {
        display: none
    }

</style>
@endpush
