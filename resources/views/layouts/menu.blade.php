<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="fas fa-user-cog"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="{{ route('permissions.index') }}">
        <i class="fas fa-user-lock"></i><span>Permisos</span>
    </a>
    <a class="nav-link" href="{{ route('identificaciones.index') }}">
        <i class="fas fa-id-card"></i><span>Identificaciones</span>
    </a>
</li>
