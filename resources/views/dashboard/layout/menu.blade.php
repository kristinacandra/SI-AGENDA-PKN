<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
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
                    <a href="{{route('agenda')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Agenda Eksternal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('jadwal')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Jadwal Kegiatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('laporan')}}" class="nav-link">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Data Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pegawai')}}" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
        </nav>
    </ul>
</nav>
