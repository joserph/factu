
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="dropdown {{ Request::is('admin/users') || Request::is('admin/roles') || Request::is('admin/permissions') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-lock"></i> <span>Admin Usuario</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('admin/users') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-users"></i><span>Usuarios</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/roles') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="fas fa-user-cog"></i><span>Roles</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/permissions') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="fas fa-user-lock"></i><span>Permisos</span>
            </a>
        </li>
    </ul>
</li>
<li class="dropdown {{ Request::is('admin/identificaciones') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Parametrización</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('admin/identificaciones') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('identificaciones.index') }}">
                <i class="fas fa-id-card"></i><span>Identificaciones</span>
            </a>
        </li>
    </ul>
</li>
<li class="dropdown {{ 
    Request::is('admin/clients') || 
    Request::is('admin/plans') || 
    Request::is('admin/transmitters') || 
    Request::is('admin/establishments') ||
    Request::is('admin/emission_points') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i><span>Administrar</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('admin/clients') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('clients.index') }}">
                <i class="fas fa-user-tie"></i><span>Clientes</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/plans') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('plans.index') }}">
                <i class="fas fa-columns"></i><span>Planes</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/transmitters') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('transmitters.index') }}">
                <i class="fas fa-address-book"></i><span>Emisores</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/establishments') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('establishments.index') }}">
                <i class="fab fa-houzz"></i><span>Establecimientos</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('admin/emission_points') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('emission_points.index') }}">
                <i class="fas fa-store-alt"></i><span>Puntos de Emisión</span>
            </a>
        </li>
    </ul>
</li>