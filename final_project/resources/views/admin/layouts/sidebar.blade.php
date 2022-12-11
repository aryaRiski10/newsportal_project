<div class="pcoded-wrapper" style="margin-top: 4rem;">
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <div class="">
                <div class="main-menu-header">
                    {{-- <img class="img-40 img-radius" src="{{asset('guruable2-01.0/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image"> --}}
                    <i class="bi bi-person-circle" style="font-size:40px"></i>

                    <div class="user-details">
                        <span>{{ Auth::user()->nama }}</span>
                        <span id="more-details">{{ Auth::user()->profile->bio }}<i class="ti-angle-down"></i></span>
                    </div>
                </div>

                <div class="main-menu-content">
                    <ul>
                        <li class="more-details">
                            <a href="/profile"><i class="ti-user"></i>View Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pcoded-search">
                <span class="searchbar-toggle">  </span>
                <div class="pcoded-search-box ">
                    <input type="text" placeholder="Search">
                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">News Portal</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="#">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                 <li class="pcoded-hasmenu">
                    <a href="#">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Berita</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="/berita">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">DataTable Berita</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>         
                        <li class=" ">
                            <a href="/berita/list">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Edit Berita</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>         
                    </ul> 
                </li>
                <li>
                    <a href="/tag">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Tag</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#">
                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Kategori</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/kategori">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">List Kategori</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <?php
                            use App\Kategori;
                            $kategori = Kategori::all();
                        ?>
                        @foreach ($kategori as $item)
                            <li class=" ">
                                <a href="accordion.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">{{$item->nama}}</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>         
                        @endforeach
                        {{-- <li class=" ">
                            <a href="breadcrumb.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Hiburan</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="button.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Olahraga</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="tabs.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Musik</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="color.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Kriminal</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms</div>
            <ul class="pcoded-item pcoded-left-item">
                <li>
                    <a href="/tag/create">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah Tag</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="/kategori/create">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah Kategori</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li>
                    <a href="/berita/create">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah Berita</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                
                
            </ul>
            
        </div>
    </nav>
</div>
