<header>
    <div role="navigation" class="navbar navbar-default navbar-fixed-top ">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
            <div class="navbar-header">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- end: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <a class="navbar-brand" href="index.html">
                    CLIP<i class="clip-clip"></i>ONE
                </a>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::segment(1) === null ? 'active' : '' }}">
                        <a href="{{ route('homepage') }}">
                            Home
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'tutorial' ? 'active' : '' }}">
                        <a href="{{ route('tutorial') }}">
                            Tutorial
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'aboutus' ? 'active' : '' }}">
                        <a href="{{ route('aboutus') }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        @auth
                        <a target="blank" href="{{ route('login') }}">
                            <div class="btn btn-primary" style="font-size: small">
                                Dashboard
                            </div>
                        </a>
                        @else
                        <a target="blank" href="{{ route('home') }}">
                            <div class="btn btn-primary" style="font-size: small">
                                Masuk
                            </div>
                        </a>
                        @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
</header>
