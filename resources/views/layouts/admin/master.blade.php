@extends('layouts.admin.base')

@section('slot')
    @include('layouts.admin.partials.header')

    <!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				@include('layouts.admin.partials.sidebar')
				<!-- end: SIDEBAR -->
			</div>
            @yield('content')
        </div>
		<!-- end: MAIN CONTAINER -->
        <!-- start: FOOTER -->
		@include('layouts.admin.partials.footer')
		<!-- end: FOOTER -->
@endsection

