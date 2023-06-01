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
                    <h1>Detail Data Kode KBLI </h1>
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
                        <form  class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="kode">
                                    Kode:
                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static display-value" data-display="{{ $kbli->kode}}">{{ $kbli->kode}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="keterangan">
                                    Keterangan:
                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static display-value" data-display="{{ $kbli->keterangan}}">{{ $kbli->keterangan}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="uraian">
                                    Uraian:
                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static display-value" data-display="{{ $kbli->uraian}}">{{ $kbli->uraian}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-9">
                                    <a href="{{ route('kbli.index')}}" class="btn btn-blue next-step btn-block">
                                        Kembali <i class="fa fa-arrow-circle-right"></i>
                                    </a>
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
