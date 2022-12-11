<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="/">
                <div class="logo">
                    <i class="bi bi-newspaper"></i><img class="ml-2 mr-lg-5 img-fluid" src="{{asset('images/title-project.png')}}" alt="title project" width="50%">
                </div>
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li>

                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <a href="#!">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink"></span>
                    </a>
                    <ul class="show-notification notif-user">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        <?php
                            use App\User;

                            $user = User::orderBy('created_at','desc')->get();
                        ?>
                        @foreach ($user as $u)
                        <li>
                            <div class="media">
                                <i class="bi bi-person-bounding-box"></i>
                                <div class="media-body">
                                    <h5 class="notification-user">{{$u->nama}}</h5>
                                    <p class="notification-msg">Telah Bergabung di NewsPortal</p>
                                    <span class="notification-time">{{$u->created_at->format('H:i')}}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!">
                        <i class="bi bi-person-circle"></i>
                        <span>{{ Auth::user()->nama }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="/profile">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>