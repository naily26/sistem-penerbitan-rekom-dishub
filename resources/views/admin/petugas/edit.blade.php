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
									<a href="{{ url('pegawai')}}">
										Data Akun Pegawai
									</a>
								</li>
								<li class="active">
									Edit data Petugas
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Data Petugas </h1>
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
									<form method="post" action="{{ route('petugas.update', $petugas->id) }}" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
										<div class="form-group">
											<label class="col-sm-2 control-label" for="nama">
												Nama
											</label>
											<div class="col-sm-9">
												<input type="text" name="nama" value="{{$petugas->nama}}" placeholder="Nama Lengkap" id="form-field-1" class="form-control"  required>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-2 control-label" for="kode">
												Kode
											</label>
											<div class="col-sm-9">
												<input type="text" name="kode" value="{{$petugas->kode}}" placeholder="Kode" id="form-field-1" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="jabatan">
												Jabatan
											</label>
											<div class="col-sm-9">
												<input type="text" name="jabatan" value="{{$petugas->jabatan}}" placeholder="Jabatan" id="form-field-1" class="form-control" required>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-2 control-label" for="no_hp">
												Nomor Handphone
											</label>
											<div class="col-sm-9">
												<input type="text" name="no_hp" value="{{$petugas->no_hp}}" placeholder="Nomor Handphone" id="form-field-1" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-2 control-label" for="email">
												E-mail
											</label>
											<div class="col-sm-9">
												<input type="email" name="email" value="{{$petugas->user->email}}" placeholder="E-mail" id="form-field-1" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label" for="password">
												Password
											</label>
											<div class="col-sm-9">
												<input type="text" name="password"  placeholder="Password" 
													id="form-field-1" class="form-control" >
												<p>Isi kolom ini jika anda ingin mengganti password default yang telah diberikan</p>
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
			jQuery(document).ready(function() {
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