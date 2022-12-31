  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href={{ URL::asset("/") }} class="brand-link">
      <img src={{ URL::asset("Assets/images/logospipm.png") }} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SP IPM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{ URL::asset("Assets/dist/img/user2-160x160.jpg") }} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href={{ URL::asset('/dashboard') }} class="d-block">
        <?php
           $user = Auth::user()->name;
        ?>

        {{ $user }}

        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

     <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">Manajemen</li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/kepanitiaan') }}"
                        class="nav-link {{ $active == 'kepanitiaan' ? 'active' : '' }} ">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Kepanitiaan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/fasilitator') }}"
                        class="nav-link {{ $active == 'fasilitator' ? 'active' : '' }} ">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <p>
                            Fasilitator

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/peserta') }}" class="nav-link {{ $active == 'Peserta' ? 'active' : '' }} ">
                        <i class="fa-solid fa-users-rectangle"></i>
                        <p>
                            Peserta

                        </p>
                    </a>

                </li>
                <li class="nav-header">Mengelola</li>


                <li class="nav-item">
                    <a href="{{ URL::asset('/kegiatan') }}"
                        class="nav-link {{ $active == 'kegiatan' ? 'active' : '' }}">
                      <i class="fa-solid fa-chart-line"></i>
                        <p>
                            Kegiatan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/materi') }}" class="nav-link {{ $active == 'materi' ? 'active' : '' }}">
                      <i class="fa-solid fa-swatchbook"></i>
                        <p>
                            Materi

                        </p>
                    </a>

                </li>




                <li class="nav-header">Kegiatan</li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/penentuan-peserta') }}" class="nav-link {{ $active == 'penentuan' ? 'active' : '' }}">
                       <i class="fa-solid fa-user-pen"></i>
                        <p>
                            Penentuan Peserta

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/evaluasi') }}" class="nav-link {{ $active == 'evaluasi' ? 'active' : '' }}">
                       <i class="fa-solid fa-dna"></i>
                        <p>
                            Evaluasi Perkaderan

                        </p>
                    </a>

                </li>


                <li class="nav-header">Administrasi</li>

                <li class="nav-item">
                    <a href="{{ URL::asset('/penilaian') }}" class="nav-link  {{ $active == 'penilaian' ? 'active' : '' }} ">
                     <i class="fa-solid fa-star"></i>
                        <p>
                            Penilaian
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('/absensi') }}"
                                class=" nav-link {{ $active == 'absensi' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/pre-post-test') }}"
                                class=" nav-link {{ $active == 'PrePostTest' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pre - Post test</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/pemahaman-keaktifan') }}"
                                class="nav-link {{ $active == 'pemahaman-keaktidan' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemahaman/keaktifan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Praktek Kultum / Pidato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Praktek Sholat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/outbound') }}"
                                class="nav-link {{ $active == 'outbound' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Outbound</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ URL::asset('/penjualan/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>RKTL</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ URL::asset('/hasil-belajar') }}"
                                class="nav-link {{ $active == 'hasilBelajar' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Hasil Belajar Peserta

                                </p>
                            </a>

                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa-brands fa-codepen"></i>
                        <p>
                            Pelatihan
                              <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('/screening-test') }}"
                                class=" nav-link {{ $active == 'screening' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lembar Screening</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/rowndown-acara') }}"
                                class=" nav-link {{ $active == 'rowndown' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rowndown Acara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/cv-peserta') }}"
                                class="nav-link {{ $active == 'cv-peserta' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lembar CV Peserta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/cv-pemateri') }}"
                                class="nav-link {{ $active == 'cv-pemateri' ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lembar CV Pemateri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/presensi') }}"
                                class="nav-link {{ $active == 'presensi' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>presensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/term-of-reference') }}"
                                class="nav-link {{ $active == 'tor' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Term Of Reference</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/silabus') }}"
                                class="nav-link {{ $active == 'silabus' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Silabus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ URL::asset('/notulensi ') }}"
                                class="nav-link {{ $active == 'notulensi' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notulensi</p>
                            </a>
                        </li>

                    </ul>
                    </a>

                </li>
                <li class="nav-header">Laporan</li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/input-laporan') }}"
                        class="nav-link {{ $active == 'input' ? 'active' : '' }}">
                      <i class="fa-regular fa-pen-to-square"></i>
                        <p>
                            Input Laporan

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/cetak-laporan') }}"
                        class="nav-link {{ $active == 'cetak' ? 'active' : '' }}">
                      <i class="fa-solid fa-print"></i>
                        <p>
                            Cetak Laporan

                        </p>
                    </a>

                </li>
                <li class="nav-header">E-library</li>
                <li class="nav-item">
                    <a href="{{ URL::asset('/buku-pedoman') }}"
                        class="nav-link {{ $active == 'buku' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Buku Pedoman IPM

                        </p>
                    </a>

                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
