<!-- start: SIDEBAR -->
<div class="main-navigation navbar-collapse collapse" >
    <!-- start: MAIN MENU TOGGLER BUTTON -->
    <div class="navigation-toggler">
        <i class="clip-chevron-left"></i>
        <i class="clip-chevron-right"></i>
    </div>
    <!-- end: MAIN MENU TOGGLER BUTTON -->
    <!-- start: MAIN NAVIGATION MENU -->
    <ul class="main-navigation-menu">

        @if (Auth::user()->role == 'admin')
        <!-- start: ADMIN -->
        <li class="{{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="/home"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        @php
            $segment = ['kbli', 'data-tampilan', 'pengawas', 'petugas', 'pegawai', 'customer-service'];
        @endphp
        <li class="{{ in_array(Request::segment(1), $segment) ? 'active' : '' }}">
            <a href="javascript:void(0)"><i class="clip-code"></i>
                <span class="title">Data Master</span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="{{ Request::segment(1) === 'kbli' ? 'active' : '' }}">
                    <a href="{{ route('kbli.index') }}">
                        <span class="title"> Kode KBLI </span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'data-tampilan' ? 'active' : '' }}">
                    <a href="{{ route('data-tampilan.index')}}" href="javascript:void(0)">
                        <span class="title"> Tampilan </span>
                        <span class="selected"></span>
                    </a>
                </li>
                @php
                    $pegawai = ['pegawai', 'petugas', 'customer-service', 'pengawas']
                @endphp
                <li class="{{ in_array(Request::segment(1), $pegawai) ? 'active' : '' }}">
                    <a href="{{ url('pegawai')}}">
                        <span class="title"> Pegawai </span>
                        <span class="selected"></span>
                    </a>
                </li>
                {{-- <li class="{{ Request::segment(1) === 'pengawas' ? 'active' : '' }}">
                    <a href="{{ route('pengawas.index')}}">
                        <span class="title"> Pengawas </span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'petugas' ? 'active' : '' }}">
                    <a href="{{ route('petugas.index')}}">
                        <span class="title"> Petugas </span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'customer-service' ? 'active' : '' }}">
                    <a href="{{ route('customer-service.index')}}">
                        <span class="title"> Customer service </span>
                        <span class="selected"></span>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan' ? 'active' : '' }}">
            <a href="{{route('perusahaan.index')}}"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'angkutan' ? 'active' : '' }}">
            <a href="{{route('angkutan.index')}}"><i class="clip-truck"></i>
                <span class="title"> Angkutan </span><span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'penerbitan-angkutan' || Request::segment(1) === 'penerbitan-perusahaan' ? 'active' : '' }}">
            <a href="javascript:void(0)"><i class="clip-file"></i>
                <span class="title">Data Penerbitan</span><i class="icon-arrow"></i>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="{{ Request::segment(1) === 'penerbitan-perusahaan' ? 'active' : '' }}">
                    <a href="{{url('/penerbitan-perusahaan')}}">
                        <span class="title">Perusahaan</span>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'penerbitan-angkutan' ? 'active' : '' }}">
                    <a href="{{url('/penerbitan-angkutan')}}">
                        <span class="title">Angkutan</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::segment(1) === 'report' ? 'active' : '' }}">
            <a href="{{url('/report')}}"><i class="clip-pencil"></i>
                <span class="title"> Laporan </span>
                <span class="selected"></span>
            </a>
        </li>
        <!-- end: ADMIN -->

        @elseif (Auth::user()->role == 'petugas')
        <!-- start: PETUGAS -->
        <li class="{{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{route('home')}}"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan' ? 'active' : '' }}">
            <a href="{{route('perusahaan.index')}}"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'angkutan' ? 'active' : '' }}">
            <a href="{{route('angkutan.index')}}"><i class="clip-truck"></i>
                <span class="title"> Angkutan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PETUGAS -->

        @elseif (Auth::user()->role == 'pengawas')
        <!-- start: PENGAWAS -->
        <li class="{{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{route('home')}}"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Penerbitan Surat</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan' ? 'active' : '' }}">
            <a href="{{route('perusahaan.index')}}"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'angkutan' ? 'active' : '' }}">
            <a href="{{route('angkutan.index')}}"><i class="clip-truck"></i>
                <span class="title"> Angkutan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PENGAWAS -->

        @elseif (Auth::user()->role == 'customer-service')
        <!-- start: CUSTOMER-SERVICE -->
        <li class="{{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{route('home')}}"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Penerbitan Surat</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'penerbitan-perusahaan' ? 'active' : '' }}">
            <a href="{{url('/penerbitan-perusahaan')}}"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'penerbitan-angkutan' ? 'active' : '' }}">
            <a href="{{url('/penerbitan-angkutan')}}"><i class="clip-truck"></i>
                <span class="title"> Angkutan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: CUSTOMER-SERVICE -->

        @elseif (Auth::user()->role == 'pemohon')
        <!-- start: PEMOHON -->
        <li class="{{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{route('home')}}"><i class="clip-home-3"></i>
                <span class="title"> Dashboard </span><span class="selected"></span>
            </a>
        </li>
        <li class="menu-header">
            <a class="menu-header">
                <span class="title"> Data Permohonan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'perusahaan' ? 'active' : '' }}">
            <a href="{{route('perusahaan.index')}}"><i class="clip-pencil"></i>
                <span class="title"> Perusahaan </span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="{{ Request::segment(1) === 'angkutan' ? 'active' : '' }}">
            <a href="{{route('angkutan.index')}}"><i class="clip-truck"></i>
                <span class="title"> kendaraan </span><span class="selected"></span>
            </a>
        </li>
        <!-- end: PEMOHON -->
        @endif

    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</div>
<!-- end: SIDEBAR -->
