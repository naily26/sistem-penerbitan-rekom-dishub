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
                        <a href="{{ route('kbli.index')}}">
                            Data KBLI
                        </a>
                    </li>
                    <li class="active">
                        edit data
                    </li>
                </ol>
                <div class="page-header">
                    <h1>Edit Data Kode KBLI </h1>
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
                        <form method="post" action="{{ route('kbli.update', $kbli->id) }}" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="kode">
                                    Kode
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="kode" value="{{ $kbli->kode }}" placeholder="Kode KBLI" id="form-field-1"
                                        class="form-control"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="keterangan">
                                    Keterangan
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" name="keterangan" value="{{ $kbli->keterangan}}" placeholder="Keterangan" id="form-field-1"
                                        class="form-control" oninput="this.value = this.value.toUpperCase()" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="kategori">
                                    Kategori
                                </label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="keterangan" name="kategori" required>
                                        <option value="">&nbsp;</option>
                                        <option value="angkutan-barang-umum" {{ $kbli->kategori == 'angkutan-barang-umum' ? 'selected' : ''  }}>Angkutan Barang Umum</option>
                                        <option value="angkutan-barang-khusus" {{ $kbli->kategori == 'angkutan-barang-khusus' ? 'selected' : ''  }}>Angkutan Barang Khusus</option>
                                        <option value="angkutan-penumpang-umum-dalam-trayek" {{ $kbli->kategori == 'angkutan-penumpang-umum-dalam-trayek' ? 'selected' : ''  }}>Angkutan Penumpang Umum dalam Trayek</option>
                                        <option value="angkutan-penumpang-umum-tidak-dalam-trayek" {{ $kbli->kategori == 'angkutan-penumpang-umum-tidak-dalam-trayek' ? 'selected' : ''  }}>Angkutan Penumpang Umum Tidak dalam Trayek</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="uraian">
                                    Uraian
                                </label>
                                <div class="col-sm-9">
                                    <textarea placeholder="Uraian" name="uraian"  id="form-field-22"
                                        class="form-control" >{{ $kbli->uraian}}</textarea>
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
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormWizard.init();
    });

</script>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

</script>
@endpush

@push('style')
@endpush
