<div class="sidebar">
    <!-- Other sidebar elements -->

    <div class="sidebar-brand-text mx-3">Hospital Admin <sup>2</sup></div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Patients -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('patients.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Patient</span>
        </a>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- Your sidebar toggler here -->
</div>
