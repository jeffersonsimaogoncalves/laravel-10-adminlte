<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Users
                    <span class="badge badge-info right">{{$userCount}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.role.index') }}" class="nav-link {{ Route::is('admin.role.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>
                    Role
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.permission.index') }}" class="nav-link {{ Route::is('admin.permission.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-hat-cowboy"></i>
                <p>
                    Permission
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                    Category
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.subcategory.index') }}" class="nav-link {{ Route::is('admin.subcategory.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list"></i>
                <p>
                    Sub Category
                </p>
            </a>
        </li>
    </ul>
</nav>
