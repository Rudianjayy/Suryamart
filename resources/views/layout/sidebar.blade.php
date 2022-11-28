<div class="sidebar-wrapper sidebar-theme">

    <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item d-flex">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('TempSuryamart/suryamart/mart/html/assets/surya/img/suryamart/Logosurya.jpg') }}" alt="Logo" style="width:86px; height:47px; margin-bottom:5px; margin-top:5px; margin-left:1px; padding:3px;">
                </a>
                <p class="border-underline"></p>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> Suryamart </a>
            </li>
        </ul>


        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="/welcome" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <i class="flaticon-home-line"></i>
                        <span>Beranda</span>
                    </div>
                </a>
                {{-- <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="/welcome"> <i class="flaticon-home-line"></i> Dashboard </a>
                    </li>

                </ul> --}}
            </li>
            <li class="menu-title">Landing Suryamart</li>
                <li class="menu">
                    <a href="#tentangkami" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-menu-list"></i>
                            <span>Landing Suryamart</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="tentangkami" data-parent="#accordionExample">
                        <li>
                            <a href="/profilsekolahadmin">Slider</a>
                        </li>
                        <li>
                            <a href="/adminsejarah"> Sejarah Suryamart </a>
                        </li>
                        <li>
                            <a href="/identitas_admin"> Kategori Teratas</a>
                        </li>
                        <li>
                            <a href="/teamsurya"> Team Suryamart </a>
                        </li>
                        <li>
                            <a href="/admingaleri"> Galeri Suryamart </a>
                        </li>
                        <li>
                            <a href="/fasilitasadmin"> Footer </a>
                        </li>
                    </ul>
                </li>
            <li class="menu-title">Katalog</li>
                <li class="menu">
                    <a href="#tentangkami" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-menu-list"></i>
                            <span>Katalog</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                      </a>
                    <ul class="collapse submenu list-unstyled" id="tentangkami" data-parent="#accordionExample">
                        <li>
                            <a href="/adminkatalog">Katalog</a>
                        </li>
                    </ul>
                </li>
        </ul>
    </nav>

</div>
