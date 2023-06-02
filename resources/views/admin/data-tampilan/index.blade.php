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
									Form Data Landing Page
								</li>
							</ol>
							<div class="page-header">
								<h1>Form Tampilan <small>form setting data tampilan landing page</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: FORM VALIDATION 2 PANEL -->
							<div class="panel panel-default">
								<div class="panel-body">
									<h2><i class="fa fa-pencil-square teal"></i> DATA TAMPILAN</h2>
									<p>
										Data yang anda inputkan pada halaman ini akan ditampilkan pada halaman landing page.
									</p>
									<hr>
									<form action="{{route('data-tampilan.store')}}" method="post" role="form" id="form2" enctype="multipart/form-data">
                                        @csrf
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Deskripsi Lembaga <span class="symbol required"></span>
													</label>
													<textarea class="form-control" id="deskripsi_lembaga" name="deskripsi_lembaga"  rows="5">{{$data['deskripsi_lembaga']}}</textarea>
												</div>
												<div class="form-group">
													<label class="control-label">
														Alamat Lembaga <span class="symbol required"></span>
													</label>
													<textarea class="form-control" id="alamat_lembaga" name="alamat_lembaga"  rows="3">{{$data['alamat_lembaga']}}</textarea>
												</div>
												<div class="form-group">
													<label class="control-label">
														Email Lembaga<span class="symbol required"></span>
													</label>
													<input type="email" placeholder="Email Lembaga" class="form-control" id="email_lembaga" name="email_lembaga" value="{{$data['email_lembaga']}}">
												</div>
												<div class="form-group">
													<label class="control-label">
														Nomor Telepon Lembaga<span class="symbol required"></span>
													</label>
													<input type="text" placeholder="Nomor Telepon Lembaga" class="form-control" name="telepon_lembaga" id="telepon_lembaga" value="{{$data['telepon_lembaga']}}">
												</div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Foto Lembaga <span class="symbol required"></span>
                                                    </label>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail"
                                                            style="width: 160px; height: 120px;"><img
                                                                src="<?= $data['foto_lembaga'] ?? 'http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image' ?> "
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
                                                                <input type="file" name="foto_lembaga" value="{{$data['foto_lembaga']}}">
                                                            </span>
                                                            <a href="#" class="btn fileupload-exists btn-light-grey"
                                                                data-dismiss="fileupload">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="form-group connected-group">
													<label class="control-label">
														Dasar Hukum Penerbitan Rekom
													</label>
													<input type="text" class="form-control" id="dasar_hukum" name="dasar_hukum" value="{{$data['dasar_hukum']}}">
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Isi Dasar Hukum Penerbitan Rekom
													</label>
													<textarea class="form-control" id="isi_dasar_hukum" name="isi_dasar_hukum"  rows="6" >{{$data['isi_dasar_hukum']}}</textarea>
												</div>
												<div class="form-group connected-group">
													<label class="control-label">
														Video Youtube Tutorial
													</label>
													<textarea class="form-control" id="video" name="video"  rows="3"> {{$data['video']}}</textarea>
                                                    <p>*Ikuti tutorial berikut <a href="https://support.google.com/youtube/answer/171780?hl=id" target="_blank">get-link</a></p>
												</div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Dokumen Pedoman <span class="symbol required"></span>
                                                    </label>
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
                                                                    <input type="file" class="file-input" name="dokumen_pedoman">
                                                                </div>
                                                                <a href="#" class="btn btn-light-grey fileupload-exists"
                                                                    data-dismiss="fileupload">
                                                                    <i class="fa fa-times"></i> Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
													<p>Berikut dokumen yang telah erungga sebelumnya <a href=" {{$data['dokumen_pedoman']}}" target="_blank">pedoman.pdf</a></p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Foto Pelayanan <span class="symbol required"></span>
                                                    </label>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail"
                                                            style="width: 160px; height: 120px;"><img
                                                                src= " <?= $data['foto_persyaratan'] ?? 'http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image' ?> "
                                                                alt= "" />
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                                            style="max-width: 160px; max-height: 120px; line-height: 20px;">
                                                        </div>
                                                        <div>
                                                            <span class="btn btn-light-grey btn-file"><span
                                                                    class="fileupload-new"><i class="fa fa-picture-o"></i>
                                                                    Select image</span><span class="fileupload-exists"><i
                                                                        class="fa fa-picture-o"></i> Change</span>
                                                                <input type="file" name="foto_persyaratan" value="{{ $data['foto_persyaratan']}}">
                                                            </span>
                                                            <a href="#" class="btn fileupload-exists btn-light-grey"
                                                                data-dismiss="fileupload">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Persyaratan Permohonan <span class="symbol required"></span>
													</label>
													<textarea class="ckeditor form-control" id="editor2" name="persyaratan" cols="10" rows="10" >{{$data['persyaratan']}}</textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<p>
													Dengan klik tombol simpan maka data otomatis terpublikasikan ke publik
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-yellow btn-block" type="submit">
													Simpan <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FORM VALIDATION 2 PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
@endsection

@push('style')
<link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/build/summernote.css')}}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
@endpush

@push('script')
<script src="{{asset('assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/summernote/build/summernote.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/admin/plugins/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function() {
        Main.init();
        Index.init();
        FormValidator.init();
    });
</script>
@endpush