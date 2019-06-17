<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin') }}" class="logo">
        <span class="logo-lg">Dashboard Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                {{-- <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li> --}}
                @else
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        {{-- <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/> --}}
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            {{-- <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" /> --}}
                            <h3 style="color: #fff;">#Selamat Datang</h3>
                            <h4 style="color: #fff;">{{ Auth::user()->nama }}</h4>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-3">
                                <a href="{{ url('/admin/profil') }}">Profil</a>
                            </div>
                            <div class="col-xs-5">
                                <a href="{{ url('/admin/ubahpassword') }}">Password</a>
                            </div>
                            <div class="col-xs-4">
                                <a href="{{ url('/logout') }}">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
