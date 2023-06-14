<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->

<head>
    <title>Dinas Perhubungan Jawa Timur</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main-responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/iCheck/skins/all.css')}}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/theme_light.css')}}" type="text/css" id="skin_color">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/print.css')}}" type="text/css" media="print" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!--[if IE 7]>
		<link rel="stylesheet" href="assets/admin/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}">
    <style>
        ul.main-navigation-menu>li>a {
            font-weight: 500;
        }

        .label-success {
            background: #EDFCF6;
            border: 1px solid #B1E5CC;
            border-radius: 6px;
            color: #2D8057
        }

        .label-danger {
            background: #FFF3F2;
            border: 1px solid #F2C6C4;
            border-radius: 6px;
            color: #CC413D;
        }

        .label-warning {
            background: #FFF7F0;
            border: 1px solid #E5D2B1;
            border-radius: 6px;
            color: #A3550B;
        }

        .label-info {
            background: #F0F5FF;
            border: 1px solid #BBCBF2;
            border-radius: 6px;
            color: #416BCC;
        }

        .label-primary {
            background: #F2F2FF;
            border: 1px solid #C3C4F3;
            border-radius: 6px;
            color: #4C4DDC;
        }

        h1,
        h2 {
            font-family: 'Open Sans';
            color: #383838;
        }

    </style>
    @stack('style')
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

    {{-- <link rel="shortcut icon" href="favicon.ico" /> --}}
</head>
<!-- end: HEAD -->

<body>

    @yield('slot')

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
		<script src="assets/admin/plugins/respond.min.js"></script>
		<script src="assets/admin/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/blockUI/jquery.blockUI.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/iCheck/jquery.icheck.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/less/less-1.5.0.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
    <script src="{{ asset('assets/admin/js/main.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    @stack('script')
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script type="text/javascript">
        @if($message = Session::get('success'))
        toastr.success("{{ $message }}");
        @endif
        @if($message = Session::get('error'))
        toastr.error("{{$message}}");
        @endif
        @if($message = Session::get('warning'))
        toastr.warning("{{$message}}");
        @endif

    </script>
    <script>
        jQuery(document).ready(function () {
            Main.init();
        });

    </script>
</body>
<!-- end: BODY -->

</html>
