<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Masjid NAILUL-HUDA</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">N-H</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header"></li>
        <li class="menu-header">Beranda</li>
        <li class="{{ Request()->is('/NAILUL-HUDA/dashboard') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="nav-item  {{ Request()->is('/NAILUL-HUDA/kegiatan') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/kegiatan" class="nav-link"><i class="fas fa-columns"></i><span>Kegiatan</span></a>
        </li>
        <li class="menu-header">Action</li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/import') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/pemasukan" class="nav-link "><i class="fas fa-columns"></i>
                <span>Import Dana</span></a>
        </li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/export') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/export" class="nav-link "><i class="fas fa-print"></i>
                <span>Export Dana</span></a>
        </li>
        <li class="menu-header">Siswa</li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/kelas') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/kelas" class="nav-link "><i class="fas fa-th-large"></i>
                <span>Kelas</span></a>
        </li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/jurusan') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/jurusan" class="nav-link "><i class="fas fa-th-large"></i>
                <span>Jurusan</span></a>
        </li>
        <li class="menu-header">Settings</li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/pengurus') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/pengurus" class="nav-link "><i class="far fa-user"></i>
                <span>Pengurus</span></a>
        </li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/tahun') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/tahun" class="nav-link "><i class="far fa-user"></i>
                <span>Tahun Ajaran</span></a>
        </li>
        <li class="nav-item {{ Request()->is('/NAILUL-HUDA/bio') ? 'active' : '' }}">
            <a href="/NAILUL-HUDA/bio" class="nav-link "><i class="far fa-user"></i>
                <span>Biodata</span></a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
