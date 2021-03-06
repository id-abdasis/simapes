    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.html">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">E-</span><span class="font-size-xl text-primary">NURA</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        @auth
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{ url('/') }}/avatar/avatar-default.png" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="{{ url('/') }}/avatar/avatar-default.png" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="{{ route('signout') }}">
                            <i class="si si-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        @endauth
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">AK</span><span class="sidebar-mini-hidden">Akademik</span></li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">TB</span><span class="sidebar-mini-hidden">Tabungan</span></li>
                <li class="{{ request()->is('nasabah/*') ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">Nasabah</span></a>
                    <ul>
                        <li>
                            <a class="{{ request()->is('nasabah/tambah-nasabah') ? 'active' : '' }}" href="{{ route('tambah-nasabah') }}">Tambah Nasabah</a>
                        </li>
                        <li>
                            <a href="{{ route('daftar-nasabah') }}">Daftar Nasabah</a>
                        </li>
                        <li>
                            <a href="be_blocks_draggable.html">Catatan Nasabah</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-bank
                        "></i><span class="sidebar-mini-hide">Tabungan</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('transaksi.index') }}">Data Transaksi</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.setor-tunai') }}">Setor Tunai</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.tarik-tunai') }}">Tarik Tunai</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.mutasi-tabungan') }}">Mutasi Tabungan</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.laporan-ebank') }}">Rekap Tabungan</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">KS</span><span class="sidebar-mini-hidden">Data Santri</span></li>
                <li>
                    <a class="{{ request()->is('santri/tambah-santri') ? 'active' : '' }}" href="{{ route('tambah-santri') }}"><i class="si si-user-follow "></i><span class="sidebar-mini-hide">Tambah Santri</span></a>
                    <a href="{{ route('daftar-santri') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Data Santri</span></a>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-list-ul"></i><span class="sidebar-mini-hide">Pelanggaran</span></a>
                    <ul>
                        <li>
                            <a href="be_blocks.html">Catat Pelanggaran</a>
                        </li>
                        <li>
                            <a href="be_blocks_tiles.html">Daftar Pelanggaran</a>
                        </li>
                        <li>
                            <a href="be_blocks_draggable.html">Rekap Pelanggaran</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">PP</span><span class="sidebar-mini-hidden">Perpustakaan</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Data Kitab</span></a>
                    <ul>
                        <li>
                            <a href="be_pages_generic_blank_block.html">Tambah Kitab</a>
                        </li>
                        <li>
                            <a href="be_pages_generic_blank_breadcrumb.html">Daftar Kitab</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Data Peminjaman</span></a>
                    <ul>
                        <li>
                            <a href="be_pages_auth_all.html">Catat Peminjaman</a>
                        </li>
                        <li>
                            <a href="op_auth_signin.html">Data Peminjaman</a>
                        </li>
                        <li>
                            <a href="op_auth_signin2.html">Laporan Peminjaman</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-heading"><span class="sidebar-mini-visible">KG</span><span class="sidebar-mini-hidden">Pertokoan</span></li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('pertokoan.tambah-kategori') }}"><i class="si si-basket-loaded                        "></i><span class="sidebar-mini-hide">Data Barang</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('pertokoan.tambah-barang') }}">Tambah Barang</a>
                        </li>
                        <li>
                            <a href="#">Daftar Barang</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Kategori Barang</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('pertokoan.tambah-kategori') }}">Tambah Kategori</a>
                        </li>
                        <li>
                            <a href="#">Daftar Kategori</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Supplier</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('pertokoan.tambah-kategori') }}">Tambah Supplier</a>
                        </li>
                        <li>
                            <a href="#">Daftar Supplier</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">KG</span><span class="sidebar-mini-hidden">Kepegawaian</span></li>

                <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pengaturan</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-organization"></i><span class="sidebar-mini-hide">Data User</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('tambah-pegawai') }}">Tambah User</a>
                        </li>
                        <li>
                            <a href="{{ route('daftar-pegawai') }}">Daftar User</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
