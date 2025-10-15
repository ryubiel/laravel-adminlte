<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}" class="brand-link">
            <img
                src="{{ Vite::asset('resources/images/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-person"></i>
                        <p>Usuários</p>
                    </a>
                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
