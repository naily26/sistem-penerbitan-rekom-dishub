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
									<a href="{{ route('customer-service.index')}}">
										Data Customer Service
									</a>
								</li>
								<li class="active">
									tambah data
								</li>
							</ol>
							<div class="page-header">
								<h1>Tambah Data Customer Service </h1>
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
									<form method="post" action="{{ route('customer-service.update', $cs->id) }}" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
										<div class="form-group">
											<label class="col-sm-2 control-label" for="nama">
												Nama
											</label>
											<div class="col-sm-9">
												<input type="text" name="nama" value="{{$cs->nama}}" placeholder="Nama Lengkap" id="form-field-1" class="form-control"  required>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-2 control-label" for="no_hp">
												Nomor Handphone
											</label>
											<div class="col-sm-9">
												<input type="text" name="no_hp" value="{{$cs->no_hp}}" placeholder="Nomor Handphone" id="form-field-1" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-2 control-label" for="email">
												E-mail
											</label>
											<div class="col-sm-9">
												<input type="email" name="email" value="{{$cs->user->email}}" placeholder="E-mail" id="form-field-1" class="form-control" required>
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
		<script src="assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/admin/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<script src="assets/admin/js/form-wizard.js"></script>
  
       
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