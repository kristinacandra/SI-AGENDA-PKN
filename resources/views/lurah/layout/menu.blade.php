<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="/lurah"
                        class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-header">AGENDA KEGIATAN</li>
                <li class="nav-item">
                    {{-- <a href="{{ route('dashboard') }}"
                        class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a> --}}
                </li>
                <li class="nav-item">
                    <a href="{{route('LurahAgenda')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Agenda Eksternal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('LurahJadwal')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Jadwal Kegiatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('LurahLaporan')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('LurahPegawai')}}" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/logout"
                        class="nav-link">
                        <i class="nav-icon far fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
        </nav>
    </ul>
</nav>
