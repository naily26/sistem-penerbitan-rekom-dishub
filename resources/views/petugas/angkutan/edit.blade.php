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
                        Pengecekan data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Pengecekan Data <small>Permohonan surat rekomendasi peruntukan angkutan umum</small></h1>
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
                            <tr><td colspan="2" style="font-weight: 600">Data Perusahaan</td></tr>
                            <tr>
                                <td class="column-left">Nama Perusahaan</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->perusahaan->nama_perusahaan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">KBLI</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->perusahaan->kbli->kode}} - {{$pengajuan->angkutan->perusahaan->kbli->keterangan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">NIB</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->perusahaan->nib}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Dokumen NIB</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->perusahaan->dokumen_nib}}" target="_blank"><i class="clip-file-pdf" style="color: blue"> | NIB</i></a></span>
                                </td>
                            </tr>
                            @if ($pengajuan->angkutan->perusahaan->kbli->kategori == 'angkutan-barang-khusus')
                            <tr>
                                <td class="column-left">SK Izin Penyelenggara</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->perusahaan->surat_izin_penyelenggara}}" target="_blank"><i class="clip-file-pdf" style="color: blue"> | Izin Penyelenggara</i></a></span>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="column-left">SK Izin Penyelenggara</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->perusahaan->sertifikat_standar}}" target="_blank"><i class="clip-file-pdf" style="color: blue"> | Sertifikat Standar</i></a></span>
                                </td>
                            </tr>
                            @endif
                            @if (str_contains($pengajuan->angkutan->perusahaan->kbli->kategori, 'angkutan-penumpang'))
                            <tr>
                                <td class="column-left">Surat Izin Trayek</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="#"><i class="clip-file-pdf" style="color: blue"> | Izin Trayek</i></a></span>
                                </td>
                            </tr>
                            @elseif (str_contains($pengajuan->angkutan->perusahaan->kbli->kategori, 'angkutan-barang'))
                            <tr>
                                <td class="column-left">Rekap Transaksi Surat Jalan (Delivery Order) 
                                    1 (satu) bulan terakhir </td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="#"><i class="clip-file-pdf" style="color: blue"> | Rekap Transaksi Surat Jalan</i></a></span>
                                </td>
                            </tr>
                            @endif
                            <tr><td colspan="2"  style="font-weight: 600">Data Angkutan</td></tr>
                            <tr>
                                <td class="column-left">Nomor Kendaraan</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->nomor_kendaraan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Uji</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->nomor_uji}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Mesin</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->nomor_mesin}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nomor Rangka</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->nomor_rangka}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Merk</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->merk}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Tipe</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->tipe}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Tahun Pembuatan</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->tahun_pembuatan}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Nama Pemilik Kendaraan</td>
                                <td class="column-right">
                                    {{$pengajuan->angkutan->nomor_rangka}}</td>
                            </tr>
                            <tr>
                                <td class="column-left">Warna TNKB</td>
                                <td class="column-right">
                                    Warna Dasar Plat Kuning Dengan Tulisan Hitam</td>
                            </tr>
                            <tr>
                                <td class="column-left">Keterangan</td>
                                <td class="column-right" style="font-weight: 600">
                                    {{$pengajuan->keterangan}}</td>
                            </tr>
                            @if ($pengajuan->keterangan == 'kendaraan-baru')
                            <tr>
                                <td class="column-left">Surat Faktur Intern dari Dealer</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->surat_faktur_intern}}"><i class="clip-file-pdf" style="color: blue"> | Surat Faktur</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Sertifikat Registrasi Uji Tipe (SRUT)</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->surat_registrasi_uji_tipe}}"><i class="clip-file-pdf" style="color: blue"> | SRUT</i></a></span>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="column-left">STNKB</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->stnk}}"><i class="clip-file-pdf" style="color: blue"> | STNKB</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Buku Uji Berkala</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->buku_uji_berkala}}"><i class="clip-file-pdf" style="color: blue"> | Buku Uji Berkala</i></a></span>
                                </td>
                            </tr>
                            @if ($pengajuan->keterangan == 'kendaraan-mutasi')
                            <tr>
                                <td class="column-left">Surat Keterangan Fiskal</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->surat_fiskal}}"><i class="clip-file-pdf" style="color: blue"> | Keterangan Fiskal</i></a></span>
                                </td>
                            </tr>
                            @endif
                            @endif
                            <tr>
                                <td class="column-left">Surat Permohonan dari Pimpinan</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->surat_permohonan}}"><i class="clip-file-pdf" style="color: blue"> | Keterangan Fiskal</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Surat Pernyataan Memenuhi Persyaratan</td>
                                <td class="column-right">
                                    <span class="label label-primary"><a href="{{$pengajuan->angkutan->surat_pernyataan}}"><i class="clip-file-pdf" style="color: blue"> | Keterangan Fiskal</i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="column-left">Foto Kendaraan</td>
                                <td class="column-right">
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="{{$pengajuan->foto_depan}}" title="Clip-One Responsive Screen">
                                                <img src="{{$pengajuan->foto_depan}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="{{$pengajuan->foto_belakang}}" title="Clip-One Responsive Screen">
                                                <img src="{{$pengajuan->foto_belakang}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="{{$pengajuan->foto_kanan}}" title="Clip-One Responsive Screen">
                                                <img src="{{$pengajuan->foto_kanan}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 gallery-img">
                                        <div class="wrap-image">
                                            <a class="group1" href="{{$pengajuan->foto_kiri}}" title="Clip-One Responsive Screen">
                                                <img src="{{$pengajuan->foto_kiri}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Catatan <a id="pencil" href="#"><i class="fa fa-pencil"></i></a>
                               </td>
                                <td>
                                <div data-original-title="Enter notes" data-toggle="manual" data-type="wysihtml5" data-pk="1" id="note" class="editable" tabindex="-1" style="display: block;">
                                    @if ($pengajuan->status_pengecekan == 'menunggu')
                                        tidak ada catatan
                                    @elseif ($pengajuan->status_pengecekan == 'disetujui')
                                        data telah disetujui, tidak ada catatan
                                    @elseif ($pengajuan->status_pengecekan == 'ditolak')
                                        {{$pengajuan->catatan}}
                                    @endif
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
                        <form method="post" action="{{route('angkutan.update', $pengajuan->id)}}" class="form-horizontal">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    Konfirmasi Persyaratan <span class="symbol required"></span>
                                </label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="status_pengecekan" onchange="cekStatus(this)" required>
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
        if(element.value == 'ditolak'){
            $("[name='catatan']").prop("required", true);
        }
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
