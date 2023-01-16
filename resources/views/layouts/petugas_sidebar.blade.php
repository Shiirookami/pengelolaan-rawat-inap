<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('template/img/dashboard-logo.png') }}" class="img-fluid">
        </div>
        <div class="sidebar-brand-text mx-3">PRI <sup>APP</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $routeName == 'petugas.dashboard.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading"> Interface </div>
    <li class="nav-item {{ $routeName == 'petugas.dokter.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.dokter.index') }}">
            <i class="fas fa-solid fa-user"></i>
            <span>Dokter</span>
        </a>
    </li>
    <li class="nav-item {{ $routeName == 'petugas.kamar.index' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.kamar.index') }}">
            <i class="fas fa-solid fa-hospital"></i>
            <span>Kamar</span>
        </a>
    </li>
    <li class="nav-item {{ $routeName == 'petugas.pasienrawatinap.index' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.pasienrawatinap.index') }}">
            <i class="fas fa-solid fa-bed"></i>
            <span>Pasien</span>
        </a>
    </li>
    <li class="nav-item {{ $routeName == 'petugas.visitdokter.index' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.visitdokter.index') }}">
            <i class="fas fa-solid fa-book"></i>
            <span>Visit Dokter</span>
        </a>
    </li>
    <li class="nav-item {{ $routeName == 'petugas.rujukan.index' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('petugas.rujukan.index') }}">
            <i class="fas fa-solid fa-star-of-life"></i>
            <span>Rujukan</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
