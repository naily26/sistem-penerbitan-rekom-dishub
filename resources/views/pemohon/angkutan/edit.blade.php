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
                        <form method="post" action="{{route('angkutan.update', $pengajuan->id)}}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Perusahaan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="perusahaan_id" name="perusahaan_id"
                                        placeholder="Text Field" value="{{$pengajuan->angkutan->perusahaan->nama_perusahaan}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Keterangan / Tujuan </span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                                        placeholder="Text Field" value="{{$pengajuan->keterangan}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Kota / Kabupaten  <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select name="kota" id="select-kota"
                                        class="select2-container form-control search-select" >
                                        <option value=""></option>
                                        @foreach ($kota as $key => $item)
                                        <option value="{{$item->nama}}" {{ ($pengajuan->tembusan == $item->nama ? "selected":"") }}><?= $item->nama ?></option>
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
                                        name="nama_pemilik" placeholder="nama pemilik" value="{{$pengajuan->angkutan->nama_pemilik}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Kendaraan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_kendaraan"
                                        name="nomor_kendaraan" placeholder="Tnomor kendaraan" value="{{$pengajuan->angkutan->nomor_kendaraan}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Uji <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_uji" name="nomor_uji"
                                        placeholder="nomor uji" value="{{$pengajuan->angkutan->nomor_uji}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Rangka <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_rangka"
                                        name="nomor_rangka" placeholder="nomor rangka" value="{{$pengajuan->angkutan->nomor_rangka}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Mesin <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_mesin" name="nomor_mesin"
                                        placeholder="nomor mesin" value="{{$pengajuan->angkutan->nomor_mesin}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Merk <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="merk" name="merk"
                                        placeholder="merk kendaraan" value="{{$pengajuan->angkutan->merk}}"  oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tipe <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="tipe" name="tipe"
                                        placeholder="Tipe" value="{{$pengajuan->angkutan->tipe}}" oninput="this.value = this.value.toUpperCase()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tahun Pembuatan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" id="tahun_pembuatan" min="1900"
                                        max="{{date("Y")}}"  value="{{$pengajuan->angkutan->tahun_pembuatan}}" name="tahun_pembuatan" placeholder="tahun pembuatan"
                                        >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Jenis Kendaraan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="jenis" name="jenis"
                                        placeholder="jenis" value="{{$pengajuan->angkutan->jenis}}" oninput="this.value = this.value.toUpperCase()" >
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
                                                src="{{$pengajuan->foto_depan}}"
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
                                                <input type="file" name="foto_depan" value="{{$pengajuan->foto_depan}}">
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
                                                src="{{$pengajuan->foto_belakang}}"
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
                                                <input type="file" name="foto_belakang" value="{{$pengajuan->foto_belakang}}">
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
                                                src="{{$pengajuan->foto_kanan}}"
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
                                                <input type="file" name="foto_kanan" value="{{$pengajuan->foto_kanan}}">
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
                                                src="{{$pengajuan->foto_kiri}}"
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
                                                <input type="file" name="foto_kiri" value="{{$pengajuan->foto_kiri}}">
                                            </span>
                                            <a href="#" class="btn fileupload-exists btn-light-grey"
                                                data-dismiss="fileupload">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($pengajuan->angkutan->kps)
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
                                                    <input type="file" class="file-input" name="kps" value="{{$pengajuan->angkutan->kps}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->angkutan->kps}}">kps.pdf</a></p>
                                </div>
                                
                            </div>
                            @endif
                            @if ($pengajuan->angkutan->stnkb)
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
                                                    <input type="file" class="file-input" name="stnkb" value="{{$pengajuan->angkutan->stnkb}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->angkutan->stnkb}}">stnkb.pdf</a></p>
                                </div>
                            </div>
                            @endif
                            @if ($pengajuan->angkutan->buku_uji_berkala)
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
                                                        name="buku_uji_berkala" value="{{$pengajuan->angkutan->buku_uji_berkala}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->angkutan->buku_uji_berkala}}">buku_uji.pdf</a></p>
                                </div>
                            </div>
                            @endif
                            @if ($pengajuan->keterangan == 'kendaraan-baru')
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
                                                    <input type="file" class="file-input" value="{{$pengajuan->angkutan->surat_faktur_intern}}"
                                                        name="surat_faktur_intern">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->angkutan->surat_faktur_intern}}">surat_faktur_intern.pdf</a></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor faktur <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_faktur"
                                        name="nomor_faktur" placeholder="Text Field" value="{{$pengajuan->angkutan->nomor_faktur}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tanggal Faktur <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="tanggal_faktur"
                                        name="tanggal_faktur" placeholder="tanggal faktur" value="{{$pengajuan->angkutan->tanggal_faktur}}">
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
                                                        name="surat_registrasi_uji_tipe" value="{{$pengajuan->angkutan->surat_registrasi_uji_tipe}}">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->angkutan->surat_registrasi_uji_tipe}}">surat_faktur_intern.pdf</a></p>
                                </div>
                            </div>
                            @endif
                            @if ($pengajuan->keterangan == 'kendaraan-mutasi')
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama perusahaan lama <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="perusahaan_lama"
                                        name="perusahaan_lama" placeholder="nama perusahaan lama" value="{{$pengajuan->data_mutasi->perusahaan_lama}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Kota / kabupaten asal <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select name="kota_asal" id="select-kota-asal"
                                        class="select2-container form-control search-select">
                                        <option value=""></option>
                                        @foreach ($kota as $key => $item)
                                        <option value="{{$item->nama}}" {{ ($pengajuan->data_mutasi->kota_asal == $item->nama ? "selected":"") }}><?= $item->nama ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nama Pemilik Kendaraan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="pemilik_lama"
                                        name="pemilik_lama" placeholder="nama pemilik"
                                        oninput="this.value = this.value.toUpperCase()" value="{{$pengajuan->data_mutasi->pemilik_lama}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Alamat perusahaan lama <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="alamat_lama"
                                        name="alamat_lama" placeholder="alamat perusahaan lama" value="{{$pengajuan->data_mutasi->alamat_lama}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Warna TNKB lama <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="warna_tnkb_lama"
                                        name="warna_tnkb_lama" placeholder="Text Field" value="{{$pengajuan->data_mutasi->warna_tnkb_lama}}">
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
                                                        name="surat_fiskal" value="{{$pengajuan->data_mutasi->surat_fiskal}}">
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->data_mutasi->surat_fiskal}}">surat_fiskal.pdf</a></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor surat fiskal <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_surat_fiskal"
                                        name="nomor_surat_fiskal" placeholder="Text Field" value="{{$pengajuan->data_mutasi->nomor_surat_fiskal}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Tanggal surat fiskal <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" id="tanggal_surat_fiskal"
                                        name="tanggal_surat_fiskal" placeholder="Text Field" value="{{$pengajuan->data_mutasi->tanggal_surat_fiskal}}">
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Nomor Permohonan Surat <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="nomor_permohonan"
                                        name="nomor_permohonan" placeholder="nomor permohonan surat" value="{{$pengajuan->nomor_permohonan}}"
                                        oninput="this.value = this.value.toUpperCase()" >
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
                                                        name="surat_pernyataan" value="{{$pengajuan->surat_pernyataan}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->surat_pernyataan}}">surat_pernyataan.pdf</a></p>
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
                                                        name="surat_permohonan" value="{{$pengajuan->surat_permohonan}}" >
                                                </div>
                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                    data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Dokumen yang telah terunggah pada permohonan sebelumnya <a target="_blank" href="{{$pengajuan->surat_permohonan}}">surat_permohonan.pdf</a></p>
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
<script src="{{asset('assets/admin/plugins/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/form-elements.js')}}"></script>
<script src="{{asset('assets/js/ui-buttons.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>

<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
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
        document.getElementById(divId).style.display = element.value == 'tidak-lengkap' ? 'block' : 'none';
    }

</script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('assets/admin/plugins/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}">
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
