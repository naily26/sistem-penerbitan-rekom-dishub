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
								
								<li class="active">
									Data Angkutan
								</li>
								
							</ol>
							<div class="page-header">
								<h1>Data Angkutan <small>Penerbitan surat rekomendasi peruntukan angkutan umum</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: DYNAMIC TABLE PANEL -->
                           
							<div class="panel panel-default">
								
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
												<th>No</th>
												<th>No Penerbitan</th> 
												<th>Nama Perusahaan</th>
												<th>KBLI</th>
												<th>Nomor Kendaraan</th>
												<th>Nomor Mesin</th>
												<th>Keterangan</th>
												<th>Status Penerbitan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $no2=1; ?>
												@foreach ($disetujui as $item)
												<tr>
													<td>{{$no2}}</td>
													<td>{{$item->nomor_rekomendasi_peruntukan}}</td>
													<td>{{$item->angkutan->perusahaan->nama_perusahaan}}</td>
													<td>{{$item->angkutan->perusahaan->kbli->kode}}</td>
													<td>{{$item->angkutan->nomor_kendaraan}}</td>
													<td>{{$item->angkutan->nomor_mesin}}</td>
													<td>{{$item->keterangan}}</td>
													<td>{{$item->status_penerbitan}}</td>
													<td><a class="btn btn-xs btn-success"
														href="{{ route('angkutan.show', $item->id)}}"><i
															class="fa fa-eye"></i>
														detail</a>
													</td>
												</tr>
												<?php $no2++; ?>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
@endsection
@push('style')
<link rel="stylesheet" type="text/css"
href="{{ asset('assets/admin/plugins/select2/select2.css') }}" />
<link rel="stylesheet"
href="{{ asset('assets/admin/plugins/DataTables/media/css/DT_bootstrap.css') }}" />
<style>
   .pdf {
        font-size: 16px !important;
        vertical-align: middle !important;
    }

	.i-pdf {
		text-align: center;
	}
</style>
@endpush

@push('script')
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="assets/admin/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/admin/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/admin/js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
				Index.init();
			});
		</script>
@endpush