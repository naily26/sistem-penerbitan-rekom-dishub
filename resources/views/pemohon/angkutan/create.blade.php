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
                    <strong>Perhatian!</strong> Untuk mengajukan permohonan surat rekomendasi peruntukan angkutan harap mengajukan permohonan surat keterang perusahaan terlebih dahulu
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
                        <form action="#" role="form" class="smart-wizard form-horizontal" id="form">
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
                                            <select name="jurusans_id" id="select-perusahaan"
                                                class="select2-container form-control search-select" required>
                                                <option value=""></option>
                                                @foreach ($perusahaan as $key => $item)
                                                <option value="{{$item->id}}"><?= $item->nama_perusahaan ?></option>
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
                                                name="keterangan" onchange="cekKeterangan(this)">
                                                <option value=""></option>
                                                <option value="perpanjangan-STNK">Perpanjangan STNK</option>
                                                <option value="kendaraan-baru">Kendaraan Baru</option>
                                                <option value="kendaraan-mutasi">Kendaraan Mutasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nomor Uji <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="full_name" name="full_name"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Merk <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tipe <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Tahun Pembuatan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Nama Pemilik Kendaraan <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Warna TNKB <span class="symbol required"></span>
                                        </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="Text Field">
                                        </div>
                                    </div>
                                    <div id="izin-trayek" class="form-group">
                                        <label class="col-sm-3 control-label">
                                            Surat Keputusan Izin Trayek <span class="symbol required"></span>
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
                                                            <input type="file" class="file-input">
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
                                                            <input type="file" class="file-input">
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
                                                            <input type="file" class="file-input">
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
                                            Surat Kuasa <span class="symbol required"></span>
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
                                                            <input type="file" class="file-input">
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
                                            Surat Pernyataan memenuhi persyaratan <span class="symbol required"></span>
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
                                                            <input type="file" class="file-input">
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
                                                        <input type="file">
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
                                                        <input type="file">
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
                                                        <input type="file">
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
                                                        <input type="file">
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
                                                                        class="fa fa-folder-open-o"></i> Select file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input" name="surat_faktur_intern">
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
                                                                        class="fa fa-folder-open-o"></i> Select file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input" name="surat_registrasi_uji_tipe">
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
                                                <input type="text" class="form-control" id="nomor_faktur" name="nomor_faktur"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                Tanggal Faktur <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" id="tanggal_faktur" name="tanggal_faktur"
                                                    placeholder="tanggal faktur">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kendaraan-mutasi">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                               Nama perusahaan lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="perusahaan_lama" name="perusahaan_lama"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                               Alamat perusahaan lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="alamat_perusahaan_lama" name="alamat_perusahaan_lama"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                               Warna TNKB lama <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="warna_tnkb_lama" name="warna_tnkb_lama"
                                                    placeholder="Text Field">
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
                                                                        class="fa fa-folder-open-o"></i> Select file</span>
                                                                <span class="fileupload-exists"><i
                                                                        class="fa fa-folder-open-o"></i> Change</span>
                                                                <input type="file" class="file-input" name="surat_fiskal">
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
                                                <input type="text" class="form-control" id="nomor_surat_fiskal" name="nomor_surat_fiskal"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                               Tanggal surat fiskal <span class="symbol required"></span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="tanggal_surat_fiskal" name="tanggal_surat_fiskal"
                                                    placeholder="Text Field">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 col-sm-offset-3">
                                            <button class="btn btn-light-grey back-step btn-block">
                                                <i class="fa fa-circle-arrow-left"></i> Back
                                            </button>
                                        </div>
                                        <button class="col-sm-2 col-sm-offset-3 btn btn-blue " type="submit">Submit
                                        </button>
                                    </div>
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

</script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == divId ? 'block' : 'none';
    }

    function cekKeterangan(element) {
        showDiv('kendaraan-baru', element);
        showDiv('kendaraan-mutasi', element);
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

</style>
@endpush
